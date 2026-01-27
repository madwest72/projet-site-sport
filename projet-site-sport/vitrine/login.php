<?php include('commun2/header1.php');
include('../bdd/bdd.php');
session_start();
if (isset($_POST['log'])) {
    $noms = htmlspecialchars($_POST['noms']);
    $mdps = $_POST['mdps'];
    if (!empty($mdps) and !empty($noms)) {
        $reqs = $bdd->prepare('SELECT * FROM utilisateur WHERE nom = ? AND mdp =?');
        $reqs->execute(array($noms, $mdps));
        $userexist = $reqs->rowCount();
        if ($userexist == 1) {
            $user = $reqs->fetch();
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = $user['admins'];
            if ($user['admins'] == 1) {
                header("Location: ../admin/user.php");
            } else {
                header("Location: info.php?id=" . $_SESSION['id']);
            }
        } else {
            $erreur = "bug";
        }
    } else {
        $erreur = "miaou";
    }
} else {
    $erreur = "identifiant ou mot de passe incorrect";
}


?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-mg-1 col-lg-12">

            <div class="card shadow-lg border-0" style="border-top: 5px solid #ff6600; border-radius: 15px; overflow: hidden;">
                <div class="row g-0">

                    <div class="col-lg-6 p-4">
                        <div class="text-center mb-3">
                            <h6 class="text-uppercase fw-bold mb-4" style="color: #ff6600; letter-spacing: 1px;"> login </h6>
                        </div>

                        <form method="post" action="">
                            <div class="text-center mb-3">
                                <p>Rentrez vos identifiants</p>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="noms">Identifiant</label>
                                <input type="text" name="noms" class="form-control" />
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="mdps">Password</label>
                                <input type="password" name="mdps" class="form-control" />
                            </div>
                            <div class="text-center pt-1 mb-5 pb-1">
                                <input type="submit" name="log" value=" Se connecter" />
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" style="background-color: #ff7700;">
                        <div class="text-black px-4 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">À propos du site</h4>
                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <?php echo $erreur; ?> </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include('commun2/footer1.php'); ?>