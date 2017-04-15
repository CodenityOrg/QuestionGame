<?php 
	
	include 'config/db.php';

	$email = isset($_REQUEST['email']) ? $_REQUEST['email']:'';
	$password = isset($_REQUEST['password']) ? $_REQUEST['password']:'';

	if($email&&$password){

		$sql = "SELECT * FROM users WHERE email= ".$email. " AND password=".$password;



	}


 ?>