<?php 
	
	include 'config/db.php';

	$email = isset($_REQUEST['email']) ? $_REQUEST['email']:'';
	$password = isset($_REQUEST['password']) ? $_REQUEST['password']:'';
	$type = isset($_REQUEST['type'])? $_REQUEST['type']:'';

	if($email&&$password){

		$sql = "SELECT * FROM users WHERE email= ".$email. " AND password=".$password;

		$result = $con->prepare($sql); 
		$result->execute(); 
		$numRows = $result->fetchColumn(); 

		if($numRows>0){

		}
	}else{
		header('Location: index.php');
	}


 ?>