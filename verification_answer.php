<?php

    include 'config/db.php';
    session_start();
    $option_id = $_POST["option_id"];
    $question_id = $_POST["question_id"];

    $sql =  "SELECT answer FROM options WHERE id = " . $option_id . " and question_id = " . $question_id;
    $consult = $con->prepare($sql);
    $consult->execute();

    $question = $consult->fetch();

    unset($_SESSION["lastQuestion"]);


    if($question["answer"]){
        $_SESSION["current_score"]++;

        if ($_SESSION["current_score"]>$_SESSION["score"]) {
          $_SESSION["score"] = $_SESSION["current_score"];
          $sql = "UPDATE users SET score= " . $_SESSION["score"] . " WHERE email=" . "'". $_SESSION["email"] ."'";
          echo $sql;
          $consult = $con->prepare($sql);
          $consult->execute();
        }
        http_response_code(200);
    }else{

        $_SESSION["current_score"] = 0;
        http_response_code(503);
    }


 ?>
