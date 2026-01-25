<?php include('commun2/header1.php'); ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/foot.jpg" class="d-block w-100" alt="foot">
        </div>
        <div class="carousel-item">
            <img src="img/basket.jpg" class="d-block w-100" alt="basket">
        </div>
        <div class="carousel-item">
            <img src="img/natation.jpg" class="d-block w-100" alt="natation">
        </div>
        <div class="carousel-item">
            <img src="img/athle.jpg" class="d-block w-100" alt="athle">
        </div>
        <div class="carousel-item">
            <img src="img/danse.jpg" class="d-block w-100" alt="danse">
        </div>
    </div>
</div>
<div class="container my-5 text-bg-dark p-3">
    <h2 class="fs-2 text-center mb-4 text-uppercase fw-bold" style="color: #ff6600;">Actualité</h2>

    <div class="row g-4">
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm" style="border: 1px solid #ff6600"> 
                <img src="img/danse.jpg" class="card-img-top" alt="Nouveauté" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-uppercase">Nouveauté</h5>
                    <p class="card-text">La Danse débarque au club ! Venez découvrir nos nouveaux cours tous les mardis soirs.</p>
                    <a href="danse.php" class="btn text-white fw-bold" style="background-color: #ff6600;">Voir +</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100  shadow-sm" style="border: 1px solid #ff6600">
                <img src=" img/athle.jpg" class="card-img-top" alt="Inscription" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-uppercase">Inscription</h5>
                    <p class="card-text">Les inscriptions pour la saison 2026 sont ouvertes. Ne tardez pas, les places sont limitées !</p>
                    <a href="inscription.php" class="btn text-white fw-bold" style="background-color: #ff6600;">S'inscrire</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100  shadow-sm" style="border: 1px solid #ff6600">
                <img src="img/foot.jpg" class="card-img-top" alt="Événement" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-uppercase">Événement</h5>
                    <p class="card-text">Grande soirée portes ouvertes ce samedi. Venez rencontrer les coachs et tester le matériel.</p>
                    <a href="#" class="btn text-white fw-bold" style="background-color: #ff6600;">Détails</a>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include('commun2/footer1.php'); ?>