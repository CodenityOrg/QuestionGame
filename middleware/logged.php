<?php 
	session_start();

	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";
	if($email) {
		header('location:question.php');
		die();
	}

 ?>