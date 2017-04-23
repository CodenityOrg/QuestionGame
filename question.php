<?php


      session_start();

      $email = isset($_SESSION["email"])? $_SESSION["email"]:"";
      if(!$email) {
        header('location:main.php');
        die();
      }

      include 'config/db.php';

      //session_start();

      $lastQuestion = isset($_SESSION["lastQuestion"])? $_SESSION["lastQuestion"]:"";

      if(!$lastQuestion) 	$question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/latest/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    .container{
      height: 100%;
    }
    .questionary{
      padding: 0px 150px;
    }

    .questionary .title{
      font-size: 65px;
    }

    .questionary .option{
      background: #168863;
      cursor: pointer;
      padding: 20px;
      font-size: 25px;
      margin: 15px;
      color: white;
      border-radius: 10px;
    }

    .questionary .label{
      font-size: 30px;
    }

    .response{
      width: 100%;
    }
    .response *{
      font-size: 20px;
    }

  </style>
</head>
<body>

  <div class="container">
  <?php   include 'include/navbar.php';   ?>

  <div class="questionary">
    <form id="question-form" method="post" action="verification_answer.php">
      <input type="hidden" id = "question_id" name="question_id" value=<?= $question["id"]; ?>>
      <h1 class="title" align="center"> <?= $question["title"]; ?></h1>
      <p class="label">Options:</p>
      <br>

    	<?php foreach ($options as $option): ?>
          <div class="option">
            <input type='radio' id='option_id' name='option_id'  value=" <?= $option["id"] ?>"> <?= $option["title"]; ?>
          </div>
    	<?php endforeach; ?>

      <br><br>
      <div class="response">
          <input class="btn btn-large" type="submit" name="submit" value="Verificar">

      </div>
    </form>
  </div>
  </div>
  <script type="text/javascript">


		document.getElementById("question-form").addEventListener("submit",function(e) {
      e.preventDefault();
      e.stopPropagation();
			var $this = this;
      var option_id;
      var question_id = Number(document.getElementById("question_id").value);
      var options = document.getElementsByName("option_id");
      for(var i=0;i<options.length;i++)
      {
            if(options[i].checked){
                option_id=Number(options[i].value);
            }

      }
      debugger;
      var data = new FormData();
      data.append('question_id', question_id);
      data.append('option_id', option_id);

			var xHttp = new XMLHttpRequest();
			xHttp.onreadystatechange  = function() {
				if (this.readyState == 4 && this.status == 200) {
            alert("CORRECTO");
            //console.log("CORRECTO");
            //debugger;
            location.reload();
			 	}
        else if (this.readyState == 4 && this.status == 503) {
            alert("INCORRECTO");
            //console.log("INCORRECTO");
        }
			}
      xHttp.open("POST","verification_answer.php");
			//xHttp.setRequestHeader("Content-type", "application/json");
			xHttp.send(data);

		});
  </script>

</body>
</html>
