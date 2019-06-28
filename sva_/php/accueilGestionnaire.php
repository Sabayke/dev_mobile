<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container"> <a class="navbar-brand" href="#">
                <b> SMS Banking |</b> Espace gestionnaire
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav ml-auto">
                </ul> 
                <a class="btn navbar-btn ml-md-2 btn-light" >Deconnexion</a>
            </div>
        </div>
    </nav>
    <div class="">
        <div class="row px-3">
            <div class="col-md-3 ">
                <div class="card text-center">
                    <img src="img/retrait.png" class="card-img-top" alt="retrait-image">
                    <div class="card-body">
                        <p class="card-text">Retirer de l'argent simplement et rapidement.<br>Disponible partout au
                            <span class="text-warning">Sénégal</span></p>
                        <a href="retrait.html" class="btn btn-success ">Faire un retrait</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card">
                    <img src="img/depot.png" class="card-img-top" alt="depot-image">
                    <div class="card-body">
                        <p class="card-text">Recharger votre compte rapidement et sans frais.<br>Disponible partout au
                            <span class="text-warning">Sénégal</span></p>
                        <a href="depot.html" class="btn btn-success btn">Faire un dépot</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card">
                    <img src="img/historique.png" class="card-img-top" alt="historique-image">
                    <div class="card-body">
                        <p class="card-text"><br>Historique de vos transactions<br><br></p>
                        <a href="historiqueGestionnaire.html" class="btn btn-success btn">Historique</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                    <div class="card">
                        <img src="img/password.jpg" class="card-img-top" alt="parametre-image">
                        <div class="card-body">
                            <p class="card-text">Gérer vos paramètres de confidentialité</p>
                            <a href="secret.html" class="btn btn-success btn">Modifier code secret</a>
                        </div>
                    </div>
                </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>