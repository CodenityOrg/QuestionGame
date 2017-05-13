<?php

	session_start();
	unset($_SESSION['email']);
	$_SESSION["current_questions"] = [];

	header('location:index.php');

 ?>
