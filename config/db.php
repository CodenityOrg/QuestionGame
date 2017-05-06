<?php

	define("DB", "quiz");
	define("HOST","127.0.0.1");
	define("USERNAME", "root");
	define("PASSWORD","casita");

	try{
		$query ="mysql:host=".HOST.";port=3306;dbname=".DB;
		$con = new PDO("mysql:host=".HOST.";port=3306;dbname=".DB,USERNAME,PASSWORD);
	} catch(PDOException $e) {
        echo '<p>'.$e->getMessage().'</p>';
	    exit;
	}

 ?>
