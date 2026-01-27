<?php

include('commun/header.php');
include("../bdd/bdd.php");

if (isset($_POST['valider'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = $_POST['mdp'];
    $adresse = htmlspecialchars($_POST['adresse']);

    $date = $_POST['date_naissance'];
    $tel = $_POST['tel'];


    $professionnel = isset($_POST['professionnel']) ? 1 : 0;


    $role = "membre";

    $foot = isset($_POST['foot']) ? 1 : 0;
    $basket = isset($_POST['basket']) ? 1 : 0;
    $natation = isset($_POST['natation']) ? 1 : 0;
    $athle = isset($_POST['athle']) ? 1 : 0;
    $danse = isset($_POST['danse']) ? 1 : 0;


    $requser = $bdd->prepare("INSERT INTO utilisateur (nom, prenom, email, adresse, date_naissance, tel, mdp, professionnel, admins) 
                              VALUES (:nom, :prenom, :mail, :adresse, :date_naissance, :tel, :mdp, :professionnel, :admins)");

    $requser->bindParam(':nom', $nom);
    $requser->bindParam(':prenom', $prenom);
    $requser->bindParam(':mail', $mail);
    $requser->bindParam(':adresse', $adresse);
    $requser->bindParam(':date_naissance', $date);
    $requser->bindParam(':tel', $tel);
    $requser->bindParam(':mdp', $mdp);
    $requser->bindParam(':professionnel', $professionnel, PDO::PARAM_INT);
    $requser->bindParam(':admins', $role);
    $requser->execute();


    $id_du_nouveau = $bdd->lastInsertId();

    $reqSport = $bdd->prepare("INSERT INTO sport (id_user, foot, basket, natation, athle, danse) 
                               VALUES (:id_user, :foot, :basket, :natation, :athle, :danse)");

    $reqSport->bindParam(':id_user', $id_du_nouveau, PDO::PARAM_INT);
    $reqSport->bindParam(':foot', $foot, PDO::PARAM_INT);
    $reqSport->bindParam(':basket', $basket, PDO::PARAM_INT);
    $reqSport->bindParam(':natation', $natation, PDO::PARAM_INT);
    $reqSport->bindParam(':athle', $athle, PDO::PARAM_INT);
    $reqSport->bindParam(':danse', $danse, PDO::PARAM_INT);

    $reqSport->execute();

    echo '<div class="alert alert-success mt-3">Utilisateur ajouté avec succès !</div>';
}
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">

            <h2 class="text-center fw-bold mb-4">Formulaire</h2>

            <form action="" method="POST">

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Nom</p>
                    <input type="text" name="nom">
                </div>

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Prénom</p>
                    <input type="text" name="prenom">
                </div>

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Mail</p>
                    <input type="email" name="mail">
                </div>

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Adresse</p>
                    <input type="text" name="adresse">
                </div>

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Date de naissance</p>
                    <input type="date" name="date_naissance">
                </div>

                <div class="mb-3">
                    <p class="form-label fw-bold mb-1">Téléphone</p>
                    <input type="number" name="tel">
                </div>

                <div class="mb-4">
                    <p class="form-label fw-bold mb-1">Mot de passe</p>
                    <input type="password" name="mdp">
                </div>

                <div class="mb-4">
                    <p class="form-label fw-bold mb-2">Sports</p>

                    <div class="card p-3 ">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="foot" value="1" id="checkFoot">
                            <label class="form-check-label" for="checkFoot">Football</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="basket" value="1" id="checkBasket">
                            <label class="form-check-label" for="checkBasket">Basketball</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="natation" value="1" id="checkNatation">
                            <label class="form-check-label" for="checkNatation">Natation</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="athle" value="1" id="checkAthle">
                            <label class="form-check-label" for="checkAthle">Athlétisme</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="danse" value="1" id="checkDanse">
                            <label class="form-check-label" for="checkDanse">Danse</label>
                        </div>

                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="professionnel" id="checkPro" value="1">
                    <label class="form-check-label " for="checkPro">competitif </label>
                </div>

                <input type="submit" name="valider" value="Valider" class="btn text-white w-100 py-2 fw-bold" style="background-color: black;">

            </form>

        </div>
    </div>
</div>

<?php include('commun/footer.php'); ?>