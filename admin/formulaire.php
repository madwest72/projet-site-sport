<?php include('commun/header.php'); ?>

<!-- contenue de la page en dessous -->

<div>
    <h1>salaire </h1>
</div>

<?php include("../bdd/bdd.php");


if (isset($_POST['libelle'])) {
    var_dump("miaou");
    //execution pour envoyer a la BDD 
    $requete = $bdd->prepare("INSERT INTO salaire(libelle, montant) VALUES(:libelle, :montant)");
    $requete->bindParam(':libelle', $_POST['libelle']); // permet d'eviter les injonction sql
    $requete->bindParam(':montant', $_POST['montant']);
    return $requete->execute();
    
}
?>

<div>
    <center>
        <h2>formulaire </h2>
        <form action="" method="POST">
            <p>Nom</p>
            <input type="text" name="nom"><br>
            <p>Prenom</p>
            <input type="text" name="prenom"><br>
            <p>mail</p>
            <input type="text" name="mail"><br>
            <p>adresse</p>
            <input type="text" name="adressse"><br>
            <p>date de naissance</p>
            <input type="date" name="date_naissance"><br>
            <p>telephone</p>
            <input type="number" name="tel"><br>
            <p>mot de passe</p>
            <input type="text" name="mdp"><br>
            <p>basket</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="basket" id="basket1">
                <label class="form-check-label" for="basket1">
                    oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="basket" id="basket2" checked>
                <label class="form-check-label" for="basket2">
                    non
                </label>
            </div>
            <p>foot</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="foot" id="foot1">
                <label class="form-check-label" for="foot1">
                    oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="foot" id="foot2" checked>
                <label class="form-check-label" for="foot2">
                    non
                </label>
            </div>
            <p>athle</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="athle" id="athle1">
                <label class="form-check-label" for="athle1">
                    oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="athle" id="athle2" checked>
                <label class="form-check-label" for="athle2">
                    non
                </label>
            </div>
            <p>danse</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="danse" id="danse1">
                <label class="form-check-label" for="danse1">
                    oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="danse" id="danse2" checked>
                <label class="form-check-label" for="danse2">
                    non
                </label>
            </div>
            <p>natation</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="natation" id="natation1">
                <label class="form-check-label" for="natation1">
                    oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="natation" id="2" checked>
                <label class="form-check-label" for="natation2">
                    non
                </label>
            </div>
            <p>Type</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="professionnel" id="professionnel1">
                <label class="form-check-label" for="professionnel1">
                    professionnelle
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="professionnel" id="professionnel2" checked>
                <label class="form-check-label" for="professionnel2">
                    loisir
                </label>
            </div>
            <input type="submit" name="valider" value="valider">
        </form>
    </center>




</div>



<?php include('commun/footer.php'); ?>