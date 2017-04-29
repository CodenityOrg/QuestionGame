<?php 

      session_start();

      $email = isset($_SESSION["email"])? $_SESSION["email"]:"";
      if(!$email) {
        header('location:index.php');
        die();
      }

      include 'config/db.php';

      //session_start();

      $lastQuestion = isset($_SESSION["lastQuestion"])? $_SESSION["lastQuestion"]:"";

      if(!$lastQuestion)  $question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
      else $question = "SELECT * FROM questions WHERE id=".$lastQuestion;

      $consult = $con->prepare($question);
      $consult->execute();

      $question = $consult->fetch();

      $options = "SELECT * FROM options WHERE question_id = " . $question["id"];

      $consult = $con->prepare($options);
      $consult->execute();

      $options = $consult->fetchAll();

      $_SESSION["lastQuestion"] = $question["id"];

 ?>