<?php

    include 'config/db.php';

    $ranking =  "SELECT name, score FROM users ORDER BY score DESC LIMIT 10";

    $consult = $con->prepare($ranking);
    $consult->execute();

    $ranking = $consult->fetchAll();

    foreach ($ranking as $rank) {
      echo $rank["name"];
      echo "----";
      echo $rank["score"];
      echo "<br>";
    }

 ?>
