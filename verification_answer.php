<?php
    include 'config/db.php';

    $option_id = $_POST["option_id"];
    $question_id = $_POST["question_id"];

    $sql =  "SELECT answer FROM options WHERE id = " . $option_id . " and question_id = " . $question_id;
    $consult = $con->prepare($sql);
    $consult->execute();
    
    $question = $consult->fetch();

    unset($_SESSION["lastQuestion"]);

    if($question["answer"]){
        http_response_code(200);
    }else{
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
