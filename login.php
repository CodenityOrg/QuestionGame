<?php

	include 'config/db.php';

	require 'vendor/autoload.php';

	session_start();

	$email = isset($_REQUEST['email']) ? $_REQUEST['email']:'';
	$password = isset($_REQUEST['password']) ? $_REQUEST['password']:'';
	$facebook_id = isset($_REQUEST['facebookId'])? $_REQUEST['facebookId'] : '';

	print_r($_REQUEST);


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
			$_SESSION["score"] = $row["score"];
			$_SESSION["current_score"] = 0;
			header('Location: question.php');
		}

	}else if($email&&$facebook_id){

		$name 		= isset($_POST['name']) ? $_POST['name'] : '';
		$lastname 	= isset($_POST['lastname'])? $_POST['lastname']:'';


		$sql = "SELECT * FROM users WHERE email = '".$email."' LIMIT 1";
		echo $sql;
		$result = $con->prepare($sql);
		$result->execute();	

		$row = $result->fetch();

		if(!$row){
			$sql = "INSERT INTO users (name,lastname,email,facebook_id) VALUES ('".$name."','".$lastname."','".$email."','".$facebook_id."')";
			$result = $con->prepare($sql); 
			$result->execute();
		}else{
			$sql = "UPDATE users SET facebook_id = '".$facebook_id."' WHERE email='".$email."' "; 
			$result = $con->prepare($sql); 

		}


		$_SESSION["name"] = $name." ".$lastname;
		$_SESSION["id"] = $row["id"];
		$_SESSION["email"] = $email;
		$_SESSION["score"] = 0;
		$_SESSION["current_score"] = 0;

		header('Location: index.php');
	}else{
		http_response_code(503);
	}

 ?>
