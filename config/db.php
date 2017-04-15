<?php 
	
	define("DB", "quiz");
	define("HOST","locahost");
	define("USERNAME", "root");
	define("PASSWORD","root");

	$mbd = new PDO("mysql:host=".HOST.";dbname=".DB,USERNAME,PASSWORD);

 ?>