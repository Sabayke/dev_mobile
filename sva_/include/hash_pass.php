<?php 
	if (!empty($motdepasse)){
	$option = ['cost'=> 12,];
	$hashpass = password_hash($motdepasse, PASSWORD_BCRYPT, $option); 
	if (password_verify($motdepasse, $hashpass)) {
		echo "Mot de passe correct";
	}else{
		echo "Le mot de passe n'est pas correct";
	}
}
?>
