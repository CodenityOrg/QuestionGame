<?php

    include 'config/db.php';

    $question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";

    $consult = $con->prepare($question);
    $consult->execute();

    $question = $consult->fetchAll();

    $options = "SELECT * FROM options WHERE question_id = " . $question[0]["id"];

    $consult = $con->prepare($options);
    $consult->execute();

    $options = $consult->fetchAll();
 ?>
