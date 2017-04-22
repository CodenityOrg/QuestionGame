<?php
    include 'config/db.php';
    session_start();
    $option_id = $_POST["option_id"];
    $question_id = $_POST["question_id"];
    if ($_POST)){
      echo $option_id;
      echo $question_id;
    }

    $sql =  "SELECT answer FROM options WHERE id = " . $option_id . " and question_id = " . $question_id;
    $consult = $con->prepare($sql);
    $consult->execute();

    $question = $consult->fetch();

    unset($_SESSION["lastQuestion"]);

    if($question["answer"]){
        $_SESSION["current_score"]++;
        http_response_code(200);
        //echo "CORRECTO";
        //header('Location: question.php');
    }else{
        //echo "INCORRECTO";
        if ($_SESSION["current_score"]>$_SESSION["score"]) {
          $sql = "UPDATE users SET score= " . $_SESSION["current_score"] . " WHERE id=" . $_SESSION["id"];
          $consult = $con->prepare($sql);
          $consult->execute();
          $_SESSION["score"] = $_SESSION["current_score"];
          //header('Location: question.php');
        }
        $_SESSION["current_score"] = 0;

        http_response_code(503);
    }

    //echo $result[0]["answer"];
    // if ($result[0]["answer"]==0) {
    //   echo "INCORRECTO";
    // }
    // elseif ($result[0]["answer"]==1) {
    //   echo "CORRECTO";
    //   //header('Location: index.php');
    // }
    // var_dump($result);
    //print_r($result);


 ?>
