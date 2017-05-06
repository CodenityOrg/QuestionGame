<?php

	define("DB", "quiz");
	define("HOST","127.0.0.1");
	define("USERNAME", "root");
<<<<<<< HEAD
<<<<<<< HEAD
	define("PASSWORD","casita");

	try{
		$query ="mysql:host=".HOST.";port=3306;dbname=".DB;
		$con = new PDO("mysql:host=".HOST.";port=3306;dbname=".DB,USERNAME,PASSWORD);
=======
	define("PASSWORD","");

	try{
		$query ="mysql:host=".HOST.";port=3306;dbname=".DB;

		$con = new PDO("mysql:host=".HOST.";port=3306;charset=UTF8;dbname=".DB,USERNAME,PASSWORD);

>>>>>>> 9874e84e49897c429a0386d2afd57e84c4080566
=======
	define("PASSWORD","");

	try{
		$query ="mysql:host=".HOST.";port=3306;dbname=".DB;

		$con = new PDO("mysql:host=".HOST.";port=3306;charset=UTF8;dbname=".DB,USERNAME,PASSWORD);

>>>>>>> 9874e84e49897c429a0386d2afd57e84c4080566
	} catch(PDOException $e) {
        echo '<p>'.$e->getMessage().'</p>';
	    exit;
	}

 ?>
