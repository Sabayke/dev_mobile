<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>
    CONNEXION
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/verifchampc.js"></script>

</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b> SMS Banking</b>
      </a> </div>
  </nav>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h2 class="mb-4 text-success">Connexion</h2>
          <form method="POST" action="controlc.php">
            
            <div class="form-group mb-3">
              <input type="text" class="form-control"   placeholder="Entrer votre  login" id="login" name="login" id="login" required onblur="verifchamp(this)"><span id="veriflog"></span>
            </div>

            <div class="form-group mb-3">
              <input type="password" name="pass" id="pass" class="form-control" placeholder="Mot de passe" id="form10" required onblur="verifchamp(this)"><span id="verifpasss"></span>
            </div>
            <div class="form-group">
              <select class="form-control" id="profil" name="profil">
                <option value="gestionnaire">Gestionnaire</option>
                <option value="client">Client</option>
                <option value="prestataire">Prestataire</option>
              </select>
            </div>
            <div class="top-margin">
              <?php
                echo "<p style='color:red'></p>";
                    if(isset($erreur)) {
                    echo '<font color="red">'.$erreur."</font>";
                      }?>
              </div>
            <div class="top-margin">
            <input type="submit" name="connexion" id="connexion" class="btn btn-success" value="Connexion">
            <p class="text-right form-text"> Vous etes nouveau, <a href="inscription.html"> Inscrivez vous!</a>
            </p>
          </form>
          <script type="text/javascript">
            var valid = document.getElementById('connexion');
            var login = document.getElementById('login');
            var pass = document.getElementById('pass');
            var type = document.getElementById('profil');
            var log_m = document.getElementById('veriflog');
            var passs_m = document.getElementById('verifpasss');
            valid.addEventListener('click', f_connect);

            function f_connect(e){
              if (login.value.length < 4 ) {
                e.preventDefault();
                log_m.textContent = "Champ login trop court";
                log_m.style.color = "red";
              }
              else{
                log_m.textContent = "";
              }
              if (pass.validity.valueMissing) {
                e.preventDefault();
                passs_m.textContent = "Champ mot de passe vide";
                passs_m.style.color = "red";
              }
              else{
                passs_m.textContent = "";
              }       
            }           
          </script>
        </div>
      </div>
    </div>
  </div>
<!--   <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->

</body>