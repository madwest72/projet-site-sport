<?php include('commun/header.php'); ?>

<div class="container mt-5">
    <center>
        <h2>Liste des Inscrits et leurs Sports</h2>
    </center>
</div>

<?php
include('../bdd/bdd.php');

$requete = $bdd->prepare('SELECT * FROM utilisateur u 
                          INNER JOIN sport s ON u.id = s.id_user
                          ORDER BY u.admins DESC, u.nom ASC');
$requete->execute();
$inscrits = $requete->fetchAll();
?>


<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th scope="col"># ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">telephone</th>
            <th scope="col">competitif/loisir</th>
            <th scope="col">Sports pratiqués</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($inscrits as $inscrit) {
            if ($inscrit['admins'] == 1) {
                $styleTexte = ' fw-bold';
            } else {
                $styleTexte = '';
            } ?>
            <tr class="<?php echo $styleTexte; ?>">
                <th scope="row"><?php echo $inscrit['id']; ?></th>
                <td><?php echo $inscrit['nom']; ?></td>
                <td><?php echo $inscrit['prenom']; ?></td>
                <td><?php echo $inscrit['email']; ?></td>
                <td><?php echo $inscrit['tel']; ?></td>
                <td>
                    <?php
                    if ($inscrit['professionnel'] == 1) {
                        echo "Compétitif";
                    } else {
                        echo "Loisir";
                    }
                    ?>
                </td>


                <td>
                    <?php

                    $mesSports = [];

                    if ($inscrit['foot'] == 1) {
                        $mesSports[] = "Football";
                    }
                    if ($inscrit['basket'] == 1) {
                        $mesSports[] = "Basketball";
                    }
                    if ($inscrit['natation'] == 1) {
                        $mesSports[] = "Natation";
                    }
                    if ($inscrit['athle'] == 1) {
                        $mesSports[] = "Athlétisme";
                    }
                    if ($inscrit['danse'] == 1) {
                        $mesSports[] = "Danse";
                    }

                    if (!empty($mesSports)) {
                        echo implode(', ', $mesSports);
                    } else {
                        echo '<span class="text-muted">Aucun sport</span>';
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include('commun/footer.php'); ?>