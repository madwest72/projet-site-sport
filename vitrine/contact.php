<?php include('commun2/header1.php'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-mg-1 col-lg-12">

            <div class="card shadow-lg border-0" style="border: 1px solid #ff6600 !important; border-radius: 15px !important;  ">
                <div class="row g-0">
                    <div class="col-lg-6 p-4">
                        <div class="text-center mb-3">
                            <h6 class="text-uppercase fw-bold mb-4" style="color: #ff6600; letter-spacing: 1px;"> Nous contacter </h6>
                        </div>

                        <form action="" method="POST">
                            <div class="text-center mb-3">
                                <p>Remplissez le formulaire ci-dessous</p>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" />
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="nom@exemple.com" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="message">Votre message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Bonjour..."></textarea>
                            </div>

                            <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-block fa-lg mb-3 text-white" style="background-color: #ff6600;" type="submit">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('commun2/footer1.php'); ?>