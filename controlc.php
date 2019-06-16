<?php session_start(); ?>


<?php
	include 'include/database.php';
	global $db; 
	

		if (isset($_POST['connexion'])) {
			
			extract($_POST);

		
			$q = $db -> query('SELECT * FROM utilisateur');
    			if(null!=(trim($login)) AND null!=(trim($pass)) AND null!=(trim($profil)) ){
    				while ($d = $q -> fetch()) {
    					if ($login == $d['Login'] AND $pass == $d['Mot_de_passe'] AND $profil == $d['Type'] ) {

    				        $_SESSION['cpt']=0;
                            $_SESSION['login'] = $login;
                            if ($profil == 'Prestataire') {
                                header('Location: accueilGestionnaire.php');    
                            }elseif ($profil == 'Client') {
                                header('Location: accueilClient.php');
                            }         
    				    }else{
                            $erreur= "Veuillez verifier vos informations";
                        }
                    }
                }else{
                    $erreur= "Veuillez verifier vos informations";
                }                
    		$q -> closeCursor();
    	}			
?>