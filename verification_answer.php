<?php
    include 'config/db.php';

    $option_id = $_POST["option_id"];
    $question_id = $_POST["question_id"];

    $sql =  "SELECT answer FROM options WHERE id = " . $option_id . " and question_id = " . $question_id;
    $consult = $con->prepare($sql);
    $consult->execute();

    $result = $consult->fetchAll();
    //echo $result[0]["answer"];
    if ($result[0]["answer"]==0) {
      echo "INCORRECTO";
    }
    elseif ($result[0]["answer"]==1) {
      header('Location: index.php');
    }
    //print_r($result);


 ?>
