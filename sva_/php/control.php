<?php  
	include 'include/database.php';
			$Prenom = htmlspecialchars($_POST['Prenom']);
			$Login = htmlspecialchars($_POST['Login']);
			$Nom = htmlspecialchars($_POST['Nom']);
			$Num_Tel = htmlspecialchars($_POST['Num_Tel']);
			$Mot_de_Passe = htmlspecialchars($_POST['Mot_de_Passe']);
			$Mot_de_Passe2 =htmlspecialchars($_POST['Mot_de_Passe2']);
			$Etat_Type ="Active"; // le compte par defaut est desactive
			$profil =htmlspecialchars($_POST['profil']);
			
			if(!empty($Prenom) AND !empty($Nom) AND !empty($Num_Tel) AND !empty($Mot_de_Passe) AND !empty($Mot_de_Passe2) AND !empty($profil)){
				if ($Mot_de_Passe == $Mot_de_Passe2) {
					
					if ($profil == 'prestataire') {
						
						$requetes = $bdd-> prepare("INSERT INTO `utilisateur` (`Prenom`, `Login`, `Nom`, `Num_Tel`, `Etat_Type`, `Mot_de_Passe`, `Type`) VALUES ('".$Prenom."', '".$Login."', '".$Nom."', '".$Num_Tel."', '".$Etat_Type."', '".$Mot_de_Passe."', '".$profil."')");
				
							$requetes -> execute(array($Prenom,$Login,$Nom,$Num_Tel,$Etat_Type,$Mot_de_Passe,$profil));

        						echo "Votre compte ".$profil." à été crée avec succés";

					}
					elseif ($profil == 'client') {
							
							$requete= $bdd-> prepare("INSERT INTO `utilisateur` (`Prenom`, `Login`, `Nom`, `Num_Tel`, `Etat_Type`, `Mot_de_Passe`, `Type`) VALUES ('".$Prenom."', '".$Login."', '".$Nom."', '".$Num_Tel."', '".$Etat_Type."', '".$Mot_de_Passe."', '".$profil."')");
				
								$requete -> execute(array($Prenom,$Num_Tel,$Nom,$Num_Tel,$Etat_Type,$Mot_de_Passe,$profil));
				        			
				        			echo "Votre compte ".$profil." à été crée avec succés";
					
					}
				// $requete= $bdd-> prepare("INSERT INTO `utilisateur` (`Prenom`, `Login`, `Nom`, `Num_Tel`, `Etat_Type`, `Mot_de_Passe`, `Type`) VALUES ('".$Prenom."', '".$Login."', '".$Nom."', '".$Num_Tel."', '".$Etat_Type."', '".$Mot_de_Passe."', '".$profil."')");
				
				// $requete -> execute(array($Prenom,$Login,$Nom,$Num_Tel,$Etat_Type,$Mot_de_Passe,$profil));
    //     			echo "Votre compte à été crée avec succés";
				// 	//header("location: connexion.php");
					else{
						echo " Veuillez choisir un type de profil";       				
					}
				}else{
					echo "Le deux mot de passe ne sont pas identique ";
				}
			
//	 		$requete -> closeCursor();
			}else{
				echo " Veuillez remplir tout les champs";
			}
?>