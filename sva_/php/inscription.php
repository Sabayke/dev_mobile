<!DOCTYPE html>
<html>
  <title></title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<script type="text/javascript" src="js/verifchamp.js"></script> 
<body>
  <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <b>SMS Banking</b>
        </a>
      </div>
  </nav>
    <div class="text-center pt-0">
        <div class="container">
            <div class="row">
              <div class="mx-auto col-lg-6 col-10">
                <h1 class="mt-0 text-success">
                  Inscription
                </h1>
                <p class="mb-3">
                  Bienvenu sur notre plateforme de SMS-Banking, Veuillez vous incrire pour bénéficier de nos services.
                </p>
                <form class="text-left" method="post" action="control.php">
                  <div class="form-group">
                    <label for="prenom">Prénom:</label> 
                    <input type="text" required class="form-control" id="prenom" name="prenom" placeholder="Daouda" onblur="verifchamp(this)">
                    <span id="verifprenom"></span>
                  </div>
                  <div class="form-group">
                    <label for="nom">Nom:</label> 
                    <input type="text" required class="form-control" id="nom" placeholder="Diouf" name="nom" onblur="verifchamp(this)" ><span id="verifnom"></span>
                  </div>
                  
                  <div class="form-group">
                    <label for="telephone">Téléphone:</label>
                    <input type="tel" required class="form-control" id="tele" name="tele" placeholder="770001122" onblur="verifchamp(this)"><span id="veriftel"></span>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="password">Mot de passe</label>
                    <input type="password" required class="form-control" id="pass" name="pass" placeholder="••••••••" onblur="verifchamp(this)" ><span id="verifpass"></span>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password2">Confirmation mot de passe:</label>
                    <input type="password" required class="form-control" id="pass2" name="pass2" placeholder="••••••••" onblur="verifchamp(this)"><span id="verifconf"></span>
                  </div>
                  </div>
                  <div class="form-group">
  
                    <select class="form-control" id="profil" name="profil">
                      <option value="client">Client</option>
                      <option value="prestataire">Prestataire</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="login" hidden="true" id="log">Votre login:</label>
                    <input type="text" required class="form-control" id="login" name="login" hidden="true" placeholder="Votre login" onblur="verifchamp(this)"><span id="veriflogin"></span>
                  </div>
                  <p class="text-right">
                    Déjà inscrit: <a href="connexion.php">Connexion</a>
                  </p>
                  <input type="submit" class="btn btn-success" id="inscription" name="inscription" value="Inscription"><div id="erreur"></div>
                </form>
             </div>
           </div>
        </div>
    </div>
    <script type="text/javascript">
       var prof = document.getElementById('profil');
       var loglab = document.getElementById('log');
       var logger = document.getElementById('login');

       prof.addEventListener('change', function(){
          if (prof.value != "client") {
            loglab.hidden = false;
            logger.hidden = false;
            alert('Vous avez choisi comme type prestataire, veuillez remplir le champ login');
          }else{
            loglab.hidden = true;
            logger.hidden = true;
          }
       });

    </script>
    <script type="text/javascript">
      var validation = document.getElementById('inscription');
      var prenom = document.getElementById('prenom');
      var nom = document.getElementById('nom');
      var login = document.getElementById('login');
      var telephone = document.getElementById('tele');
      var password = document.getElementById('pass');
      var confpass = document.getElementById('pass2');
      var type = document.getElementById('profil');
      var prenom_m = document.getElementById('verifprenom');
      var nom_m = document.getElementById('verifnom');
      var login_m = document.getElementById('veriflogin');
      var password_m = document.getElementById('verifpass');
      var confpass_m = document.getElementById('verifconf');
      var tel_m = document.getElementById('veriftel');
      validation.addEventListener('click', f_valid);

      function f_valid(e){
        if (prenom.validity.valueMissing) {
          e.preventDefault();
          prenom_m.textContent = 'Prenom manquant';
          prenom_m.style.color = 'red';
        }
        else{
          prenom_m.textContent = '';
        }

        if (nom.validity.valueMissing) {
          e.preventDefault();
          nom_m.textContent = 'nom manquant';
          nom_m.style.color = 'red';
        }
        else{
          nom_m.textContent = '';
        }
        if (login.validity.valueMissing) {
          e.preventDefault();
          login_m.textContent = 'login manquant';
          login_m.style.color = 'red';
        }
        else{
          login_m.textContent = '';
        }
        if (tele.validity.valueMissing) {
          e.preventDefault();
          tel_m.textContent = 'tel manquant';
          tel_m.style.color = 'red';
        }
        else{
          tel_m.textContent = '';
        }
        if (password.validity.valueMissing) {
          e.preventDefault();
          password_m.textContent = 'password manquant';
          password_m.style.color = 'red';
        }
        else{
          password_m.textContent = '';
        }
         if (confpass.validity.valueMissing) {
          e.preventDefault();
          confpass_m.textContent = 'conf manquant';
          confpass_m.style.color = 'red';
        }
        else{
          confpass_m.textContent = '';
        }
        }
         confpass.addEventListener('input', function(){
            if (this.value != password.value) {
              confpass_m.textContent = 'Mot de passe non conforme';
              confpass_m.style.color = 'red';
            }
            else{
              confpass_m.textContent = '';
            }
          });
         confpass.addEventListener('change', function(){
            if (this.value != password.value) {
              confpass_m.textContent = 'Mot de passe non conforme';
              confpass_m.style.color = 'red';
            }
            else{
              confpass_m.textContent = '';
            }
          });
    </script>
</body>
</html>
