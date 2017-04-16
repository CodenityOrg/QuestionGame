<?php 

	include 'config/db.php';
	require 'vendor/autoload.php';

	$name 		= isset($_POST['name']) ? $_POST['name'] : '';
	$lastname 	= isset($_POST['lastname'])? $_POST['lastname']:'';
	$email 		= isset($_POST['email'])? $_POST['email']:'';
	$password 	= isset($_POST['password'])? $_POST['password'] : '';
	$password = PHPassLib\Hash\BCrypt::hash($password);

	$data = array(
		"name"=>$name,
		"lastname"=>$lastname,
		"email"=>$email,
		"password"=>$password
	);

	$v = new Valitron\Validator($data);
	$v->rule('required', ['name','email','password']);
	$v->rule('email','email');

	if($v->validate()) {
		try{
			$sql = "INSERT INTO users (name,lastname,email,password) VALUES ('".$name."','".$lastname."','".$email."','".$password."')";
			$result = $con->prepare($sql); 
			if(!$result->execute()) echo $result->errorCode();
			
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	} else {
		http_response_code(503);
    	print_r($v->errors());
	}



 ?>