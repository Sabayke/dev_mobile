<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Session control</title>
    <meta charset="utf-8">

</head>
<body>
    <h1>SMS Banking : Page intermédiare</h1>
<?php
    include 'include/database.php';
    global $bdd;

        if (isset($_POST['connexion'])) {


            $Login = htmlspecialchars($_POST['login']);
            $Mot_de_passe = htmlspecialchars($_POST['pass']);
            $profil = htmlspecialchars($_POST['profil']);
            
                $requete = $bdd -> query('SELECT * FROM utilisateur');

                if(!empty($Login) AND !empty($Mot_de_Passe) AND !empty($profil)){
                    while ($data = $requete -> fetch()) {
                        if ($Login == $data['Login'] AND $Mot_de_passe == $data['Mot_de_passe'] AND $profil == $data['Type'] ) {

                            $_SESSION['cpt']=0;
                            $_SESSION['Login'] = $Login;

                            if ($profil == 'prestataire') {
                                header('location: php/accueilGestionnaire.php');    
                            }else{
                                echo "Veuillez verifier vos informations";
                                echo "<a href='connexion.php'>cliquez ici pour terminer.</a>";
                            }

                            if ($profil == 'client') {
                                header('location: php/accueilClient.php');
                            }else{
                                echo "Veuillez verifier vos informations";
                                echo "<a href='connexion.php'>cliquez ici pour terminer.</a>";
                            }

                            if ($profil == 'gestionnaire') {
                                header('location: php/accueilGestionnaire.php');         
                            }else{
                                echo "Veuillez verifier vos informations";
                                echo "<a href='connexion.php'>cliquez ici pour terminer.</a>";
                            }
                        }else{
                        echo "Votre login ou votre mot de passe est incorrect";
                        echo "<a href='connexion.php'>cliquez ici pour terminer.</a>";
                        }
                    }
                }
            $requete -> closeCursor();
        }                
            
?>     
</body>
</html> 