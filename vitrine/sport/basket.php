<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Mouvement Maximal</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark border-bottom: 3px solid #ff6600;" data-bs-theme="dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false ">
                            Sport
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="foot.php">foot</a></li>
                            <li><a class="dropdown-item" href="basket.php">basket</a></li>
                            <li><a class="dropdown-item" href="natation.php">natation</a></li>
                            <li><a class="dropdown-item" href="athle.php">athlétisme</a></li>
                            <li><a class="dropdown-item" href="danse.php">danse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../inscription.php">inscription</a>
                    </li>
                </ul>

                <a class="navbar-brand mx-auto" href="../index.php">
                    <img src="../img/logo.png" alt="Logo" width="70" height="70">
                </a>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container my-5">

        <div class="row g-5">

            <div class="col-12 col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white fw-bold text-center py-3" style="background-color: #ff6600;">
                        <i class="bi bi-tag-fill me-2"></i> TARIFS 2026
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">École </h6>
                                <small class="text-muted" style="font-size: 0.8rem;">6 - 12 ans</small>
                            </div>
                            <span class="fw-bold fs-5" style="color: #ff6600;">140€</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">Compétition</h6>
                                <small class="text-muted" style="font-size: 0.8rem;">Ados & Adultes</small>
                            </div>
                            <span class="fw-bold fs-5" style="color: #ff6600;">190€</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">Loisir </h6>
                                <small class="text-muted" style="font-size: 0.8rem;">Accès libre</small>
                            </div>
                            <span class="fw-bold fs-5" style="color: #ff6600;">120€</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9">

                <h1 class="fw-bold text-uppercase mb-4" style="color: #ff6600;">La Section BASKETBALL</h1>

                <img src="../img/basket2.jpg" class="img-fluid rounded-3 mb-4" alt="Basketball">

                <p class="lead fw-bold">
                    Prenez de la hauteur avec notre section Basket. Rythme, adresse et explosivité sont les maîtres-mots sur le parquet.
                </p>
                <p>
                    Le basketball est un sport d'adresse et de rapidité inventé pour garder les athlètes actifs en hiver. Fondé sur le dribble et le tir, il exige une coordination œil-main exceptionnelle et une prise de décision instantanée. C'est l'art de trouver l'espace dans une défense serrée pour atteindre le panier avec précision.
                </p>
                <p>
                    Que vous soyez débutant apprenant à dribbler ou pivot expérimenté cherchant à perfectionner votre dunk, nos entraîneurs certifiés vous guident chaque semaine pour développer votre détente et votre jeu d'équipe.
                </p>

                <hr class="my-5">

                <h3 class="fw-bold mb-3">Horaires & Entraînements</h3>

                <div class="table-responsive">
                    <table class="table table-striped table-hover border">
                        <thead class="table-dark">
                            <tr>
                                <th>Groupe</th>
                                <th>Jour</th>
                                <th>Horaire</th>
                                <th>Lieu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>École de basketball (6-10 ans)</td>
                                <td>Mercredi</td>
                                <td>14h00 - 15h30</td>
                                <td>Stade Annexe</td>
                            </tr>
                            <tr>
                                <td>Ados / Compétition</td>
                                <td>Mardi & Jeudi</td>
                                <td>18h30 - 20h30</td>
                                <td>Terrain Principale</td>
                            </tr>
                            <tr>
                                <td>Loisir </td>
                                <td>Samedi</td>
                                <td>10h00 - 12h00</td>
                                <td>terrain</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <a href="../inscription.php" class="btn btn-lg text-white px-4" style="background-color: #ff6600;">
                        Je m'inscris !
                    </a>
                </div>

            </div>
        </div>
    </div>

    <?php include('../commun2/footer1.php'); ?>