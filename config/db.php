<?php

	define("DB", "quiz");
	define("HOST","localhost");
	define("USERNAME", "root");
	define("PASSWORD","root");

	try{

		$con = new PDO("mysql:host=".HOST.";port=8889;charset=UTF8;dbname=".DB,USERNAME,PASSWORD);

	} catch(PDOException $e) {
        echo '<p>'.$e->getMessage().'</p>';
	    exit;
	}

 ?>
