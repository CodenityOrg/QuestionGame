<?php
      header('Content-Type: text/html; charset=utf-8');
      session_start();

      $questions = $_SESSION["current_questions"];
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

      $question_count = $con->prepare('SELECT * FROM questions');
      $question_count->execute();

      /* Devolver el número de filas que fueron eliminadas */
      $counts = $question_count->rowCount();

      $question = $consult->fetch();
      if(sizeof($questions)!=$counts){
            while (in_array($question["id"], $questions)) {

                  $question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
                  $consult = $con->prepare($question);
                  $consult->execute();

                  $question = $consult->fetch();
            }            
      }else{
            include 'finish.php';
            die();
      }

      $options = "SELECT * FROM options WHERE question_id = " . $question["id"];

      $consult = $con->prepare($options);
      $consult->execute();

      $options = $consult->fetchAll();
      
      $_SESSION["lastQuestion"] = $question["id"];

 ?>
