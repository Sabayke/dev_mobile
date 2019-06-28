<?php
	define('HOST','localhost');
	define('DB_NAME', 'sms_banking');
	define('USER', 'root');
	define('PASS', '');


	try {
		$bdd = new PDO ("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
		$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "connect == ok";  
	} catch (PDOException $e) {
		echo $e;
	}