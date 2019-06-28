<?php
session_start();

 include 'include/database.php';
if(isset($_POST['connexion'])) 
{
   $login = htmlspecialchars($_POST['login']);
   $mot_de_passe = htmlspecialchars($_POST['pass']);
   
   if(!empty($login) AND !empty($pass)) 
   {
     $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE Login = ? AND Mot_de_Passe= ? AND Mot_de_Passe= ?");
     $requser->execute(array($login, $mot_de_passe));
      
	 $userexist = $requser->rowCount();
     if($userexist == 1) 
		{
			$_SESSION['login']=$login;
		  $userinfo = $requser->fetch();
		  header("location: accueilClient.php");
		}else {
			$erreur= "Veuillez verifier vous informations";
		}
	}else {
		$erreur= "Tous les champs doivent être complétés !";
}
}
?>	