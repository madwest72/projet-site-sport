<?php include('commun2/header1.php'); ?>

<?php
session_start();
include('../bdd/bdd.php');



if (isset($_GET['id']) and $_GET['id'] > 0) {
    $getid = intval($_GET['id']);

    $reqs = $bdd->prepare('SELECT * FROM utilisateur u INNER JOIN sport s ON u.id = s.id_user WHERE u.id = ?');
    $reqs->execute(array($getid));
    $user = $reqs->fetch();
}
?>

<div class="container mt-4">

    <table class="table table-dark table-bordered w-100">
        <tr>
            <th scope="row" style="width: 30%;">Nom</th>
            <td><?php echo ($user['nom']); ?></td>
        </tr>
        <tr>
            <th scope="row">Prénom</th>
            <td><?php echo ($user['prenom']); ?></td>
        </tr>
        <tr>
            <th scope="row">Date de naissance</th>
            <td><?php echo ($user['date_naissance']); ?></td>
        </tr>
        <tr>
            <th scope="row">Adresse</th>
            <td><?php echo ($user['adresse']); ?></td>
        </tr>
        <tr>
            <th scope="row">Numéro téléphone</th>
            <td><?php echo ($user['tel']); ?></td>
        </tr>

        <tr>
            <th scope="row">Sports</th>
            <td>
                <?php
                $mesSports = [];


                if ($user['foot'] == 1) {
                    $mesSports[] = "Football";
                }
                if ($user['basket'] == 1) {
                    $mesSports[] = "Basketball";
                }
                if ($user['natation'] == 1) {
                    $mesSports[] = "Natation";
                }
                if ($user['athle'] == 1) {
                    $mesSports[] = "Athlétisme";
                }
                if ($user['danse'] == 1) {
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
    </table>

</div>

<?php include('commun2/footer1.php'); ?>