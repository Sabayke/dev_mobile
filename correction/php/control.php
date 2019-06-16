<?php  
	include 'my_db.php';
			$Prenom = htmlspecialchars($_POST['Prenom']);
			$Login = htmlspecialchars($_POST['Login']);
			$Nom = htmlspecialchars($_POST['Nom']);
			$Num_Tel = htmlspecialchars($_POST['Num_Tel']);
			$Mot_de_Passe = htmlspecialchars($_POST['Mot_de_Passe']);
			$Mot_de_Passe2 =htmlspecialchars($_POST['Mot_de_Passe2']);
			$Etat_Type ="desactive"; // le compte par defaut est desactive
			$profil =htmlspecialchars($_POST['profil']);
			
			if(!empty($Prenom) AND !empty($Login) AND !empty($Nom) AND !empty($Num_Tel) AND !empty($Mot_de_Passe) AND !empty($Mot_de_Passe2) AND !empty($profil)){
				if ($Mot_de_Passe == $Mot_de_Passe2) {

				$requete= $bdd-> prepare("INSERT INTO `utilisateur` (`Prenom`, `Login`, `Nom`, `Num_Tel`, `Etat_Type`, `Mot_de_Passe`, `Type`) VALUES ('".$Prenom."', '".$Login."', '".$Nom."', '".$Num_Tel."', '".$Etat_Type."', '".$Mot_de_Passe."', '".$profil."')");
				$requete -> execute(array($Prenom,$Login,$Nom,$Num_Tel,$Etat_Type,$Mot_de_Passe,$profil));
        			echo "Votre compte à été crée avec succés";
					//header("location: connexion.php");
					}else{
       				echo "Le deux mot de passe ne sont pas identique ";
					}
				}else{
					echo " Veuillez remplir tout les champs";
				}
			
//	 		$requete -> closeCursor();
?>
