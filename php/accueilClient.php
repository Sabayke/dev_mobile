<?php session_start(); ?>

<?php  
    $login=  $_SESSION['login'];
?>

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
                <b> SMS Banking |</b> Espace Client/Prestataire
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

        <p> BONJOUR <?php echo $login; ?>, bienvenus sur votre page. </p>

        <div class="row px-3">
                <div class="col-md-3 text-center">
                        <div class="card">
                            <img src="img/solde.jpg" class="card-img-top" alt="solde-image">
                            <div class="card-body">
                                <p class="card-text">Consulter votre solde</p>
                                <a href="solde.html" class="btn btn-success btn">Consulter solde</a>
                            </div>
                        </div>
                    </div>
            <div class="col-md-3 ">
                <div class="card text-center">
                    <img src="img/transfert.jpg" class="card-img-top" alt="transfert-image">
                    <div class="card-body">
                        <p class="card-text">Transfèrer de l'argent simplement et rapidement partout dans le monde.<br><br></p>
                        <a href="transfert.html" class="btn btn-success ">Transfert d'argent</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card text-center">
                    <img src="img/achat.jpg" class="card-img-top" alt="paiement-image"> 
                    <div class="card-body">
                        <p class="card-text">Acheter et payer en ligne avec sécurité.<br><br></p>
                        <a href="paiement.html" class="btn btn-success ">Payer en ligne</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 text-center">
                <div class="card">
                    <img src="img/historique.png" class="card-img-top" alt="historique-image">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <a href="historiqueClient.html" class="btn btn-success btn">Historique</a>
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
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img src="img/supprimer.jpg" class="card-img-top" alt="parametre-image">
                        <div class="card-body">
                            <p class="card-text">Gérer vos paramètres de compte</p>
                            <a href="supprimerCompte.html" class="btn btn-success btn">Supprimer votre compte</a>
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