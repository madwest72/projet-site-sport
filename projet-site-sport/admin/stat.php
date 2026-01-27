<?php include('commun/header.php'); ?>




<?php include("../bdd/bdd.php");
$requete = $bdd->prepare('SELECT 
    SUM(foot) as total_foot, 
    SUM(basket) as total_basket, 
    SUM(athle) as total_athle, 
    SUM(natation) as total_natation, 
    SUM(danse) as total_danse 
    FROM sport');

$requete->execute();
$ligne = $requete->fetch();
$adherentstotal = $ligne['total_foot'] + $ligne['total_basket'] + $ligne['total_athle'] + $ligne['total_natation'] + $ligne['total_danse'];
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">

            <div class="card shadow-lg border-0 p-4" style="border-top: 5px solid #fd7e14; border-radius: 15px;">

                <div class="text-center mb-3">
                    <h6 class="text-uppercase fw-bold" style="color: #fd7e14; letter-spacing: 1px;">Inscriptions Sport</h6>
                </div>




                <div class="d-flex justify-content-center align-items-end my-3">
                    <span class="display-5 fw-bold" style="color: #fd7e14;"><?php echo $ligne['total_foot'] ?></span>
                    <span class="h4 ms-2 text-muted mb-2">/ 100 inscrits en foot </span>
                </div>

                <div class="progress shadow-sm" style="height: 30px; border-radius: 50px; background-color: #ffe8d6;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: <?php echo $ligne['total_foot'] ?>%; background-color: #fd7e14;"
                        aria-valuenow="<?php echo $ligne['total_foot'] ?>"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="fw-bold"><?php echo $ligne['total_foot'] ?>%</span>
                    </div>
                </div>




                <div class="d-flex justify-content-center align-items-end my-3">
                    <span class="display-5 fw-bold" style="color: #fd7e14;"><?php echo $ligne['total_basket'] ?></span>
                    <span class="h4 ms-2 text-muted mb-2">/ 100 inscrits en basket</span>
                </div>

                <div class="progress shadow-sm" style="height: 30px; border-radius: 50px; background-color: #ffe8d6;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: <?php echo $ligne['total_basket'] ?>%; background-color: #fd7e14;"
                        aria-valuenow="<?php echo $ligne['total_basket'] ?>"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="fw-bold"><?php echo $ligne['total_basket'] ?>%</span>
                    </div>
                </div>



                <div class="d-flex justify-content-center align-items-end my-3">
                    <span class="display-5 fw-bold" style="color: #fd7e14;"><?php echo $ligne['total_athle'] ?></span>
                    <span class="h4 ms-2 text-muted mb-2">/ 100 inscrits en athlétisme</span>
                </div>

                <div class="progress shadow-sm" style="height: 30px; border-radius: 50px; background-color: #ffe8d6;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: <?php echo $ligne['total_athle'] ?>%; background-color: #fd7e14;"
                        aria-valuenow="<?php echo $ligne['total_athle'] ?>"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="fw-bold"><?php echo $ligne['total_athle'] ?>%</span>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-end my-3">
                    <span class="display-5 fw-bold" style="color: #fd7e14;"><?php echo $ligne['total_natation'] ?></span>
                    <span class="h4 ms-2 text-muted mb-2">/ 100 inscrits en natation</span>
                </div>

                <div class="progress shadow-sm" style="height: 30px; border-radius: 50px; background-color: #ffe8d6;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: <?php echo $ligne['total_natation'] ?>%; background-color: #fd7e14;"
                        aria-valuenow="<?php echo $ligne['total_natation'] ?>"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="fw-bold"><?php echo $ligne['total_natation'] ?>%</span>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-end my-3">
                    <span class="display-5 fw-bold" style="color: #fd7e14;"><?php echo $ligne['total_danse'] ?></span>
                    <span class="h4 ms-2 text-muted mb-2">/ 100 inscrits en danse</span>
                </div>

                <div class="progress shadow-sm" style="height: 30px; border-radius: 50px; background-color: #ffe8d6;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style="width: <?php echo $ligne['total_danse'] ?>%; background-color: #fd7e14;"
                        aria-valuenow="<?php echo $ligne['total_danse'] ?>"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="fw-bold"><?php echo $ligne['total_danse'] ?>%</span>
                    </div>
                </div>






                <div class="text-center mt-4">
                    <p class="mb-0 fw-medium" style="color: #854d0e;">
                        Nombre d'adhérents : <span class="badge" style="background-color: #ff922b;"><?php echo $adherentstotal ?></span>
                    </p>
                </div>

            </div>

        </div>
    </div>

    <?php include('commun/footer.php'); ?>