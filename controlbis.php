<?php
session_start();

	include 'include/database.php';


			$Id_Compte = htmlspecialchars($_POST['Id_Compte']);
			$Id_User = htmlspecialchars($_POST['Id_User']);
			$Solde = 0;
			$Type_Compte = htmlspecialchars($_POST['Type_Compte']); // le compte par defaut est desactive
			$code = htmlspecialchars($_POST['code']); 
			

			if(!empty($Type_Compte) AND !empty($Id_User) AND !empty($Id_Compte) AND !empty($code)){
						
						$requetes = $bdd-> prepare("INSERT INTO `compte` (`Id_Compte`, `Id_User`, `Solde`, `Type_Compte`, `code`) VALUES ('".$Id_Compte."', '".$Id_User."', '".$Solde."', '".$Type_Compte."', '".$code."')");
				
							$requetes -> execute(array($Id_Compte,$Id_User,$Solde,$Type_Compte,$code));

							echo "votre compte est crée avec comme id ".$Id_Compte.' et comme code'.$code;
					
					}
				// $requete= $bdd-> prepare("INSERT INTO `utilisateur` (`Prenom`, `Login`, `Nom`, `Num_Tel`, `Etat_Type`, `Mot_de_Passe`, `Type`) VALUES ('".$Prenom."', '".$Login."', '".$Nom."', '".$Num_Tel."', '".$Etat_Type."', '".$Mot_de_Passe."', '".$profil."')");
				
				// $requete -> execute(array($Prenom,$Login,$Nom,$Num_Tel,$Etat_Type,$Mot_de_Passe,$profil));
    //     			echo "Votre compte à été crée avec succés";
				// 	//header("location: connexion.php"); 				
				else{
					echo " Veuillez remplir tout les champs";
				}
			
//	 		$requete -> closeCursor();
?>