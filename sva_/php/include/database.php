<?php
	define('HOST','localhost');
	define('DB_NAME', 'my_db');
	define('USER', 'root');
	define('PASS', '');


	try {
		$db = new PDO ("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
		$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "connection etablie";  
	} catch (PDOException $e) {
		echo $e;
	}

	