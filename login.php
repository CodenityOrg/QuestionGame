<?php

	include 'config/db.php';

	require 'vendor/autoload.php';

	session_start();

	$email = isset($_REQUEST['email']) ? $_REQUEST['email']:'';
	$password = isset($_REQUEST['password']) ? $_REQUEST['password']:'';
	$type = isset($_REQUEST['type'])? $_REQUEST['type']:'';

	if($email&&$password){

		try {
			$sql = "SELECT * FROM users WHERE email= '".$email."' LIMIT 1";

			$result = $con->prepare($sql);
			$result->execute();

			$row = $result->fetch();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		if(!$row){
			header('Location: index.php');
		}


		if (PHPassLib\Hash\BCrypt::verify($password, $row["password"])) {

			$_SESSION["name"] = $row["name"]." ".$row["lastname"];
			$_SESSION["id"] = $row["id"];
			$_SESSION["email"] = $row["email"];
			header('Location: question.php');
		}

	}else{
		header('Location: index.php');
	}

 ?>
