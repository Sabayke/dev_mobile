<?php session_start(); ?>
<?php  
	include 'include/database.php';
	global $db;

		if (isset($_POST['inscription'])) {
			
			extract($_POST);

			if ( null!=(trim($prenom)) AND null!=(trim($nom)) AND null!=(trim($tele)) AND null!=(trim($login)) AND null!=(trim($pass)) AND null!=(trim($pass2)) AND null!=(trim($profil)) ) {
				
				if ($pass == $pass2) {
					
					// $option = ['cost'=> 12,];
					// $hashpass = password_hash($motdepasse, PASSWORD_DEFAULT, $option); 
					// if ($profil == 'Prestataire') {

						$requete = $db -> prepare("INSERT INTO utilisateur(Prenom, Nom, Login, Num_tel,  Mot_de_passe, Type) VALUES (:prenom, :nom, :login, :tele, :pass, :profil)");
						$requete -> execute([
						'prenom' => $prenom,
						'nom' => $nom,
						'login' => $login,
						'tele' => $tele,
						'pass' => $pass,
						'profil' => $profil
						]);
        			header('location: connexion.php');
       				exit;
       				}else{
       				header('lcation:inscription.php');
					}
				}else{
					header('lcation:inscription.php');
				}

			}
	 		$requete -> closeCursor();
?>