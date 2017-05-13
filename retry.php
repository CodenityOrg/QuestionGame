<?php 
	session_start();
	$_SESSION["current_questions"] = [];
    header('location:index.php');
 ?>