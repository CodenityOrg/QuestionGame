<?php


      session_start();

      $email = isset($_SESSION["email"])? $_SESSION["email"]:"";
      if(!$email) {
        header('location:main.php');
        die();
      }

      include 'config/db.php';

      session_start();

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
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

  <form id = "question-form" method="post" action="verification_answer.php">
      Title: <input type="hidden" id = "question_id" name="question_id" value=<?php echo $question["id"]; ?>> <?php echo $question["title"]; ?>
<?php echo  "Score actual:  " . $_SESSION["current_score"] . "<br>";  ?>
<?php echo  "Score: -------" . $_SESSION["score"]; ?>

  <form method="post" action="verification_answer.php">
      Title: <input type="text" name="question_id" value=<?php echo $question["id"]; ?>> <?php echo $question["title"]; ?>
      <?php include 'include/navbar.php'; ?>
      <br><br>
      Options:

    	<?php
    		foreach ($options as $option) {
    			echo "<br> <input type='radio' id='option_id' name='option_id'  value=" . $option["id"] . ">" . $option["title"] . "";
    		}
    	 ?>
      <br><br>
      <input type="submit" name="submit" value="Submit"> -->
    </form>
  <script type="text/javascript">

  		// var options = document.getElementsByClassName('options');
  		// for(var i = 0; i < options.length; i++) {
      //       var option = options[i];
      //       option.onclick = function() {
      //       	debugger;
      //       	var option_id = Number(this.getAttribute("data-id"));
      //       	var question_id = Number(document.getElementById("question_id").value);
      //
      //       	var data = {
      //       		question_id : question_id,
      //       		option_id : option_id
      //       	};
      //
			// 	var xHttp = new XMLHttpRequest();
			// 	xHttp.onreadystatechange  = function() {
			// 		if (this.readyState == 4 && this.status == 200) {
			// 			location.reload();
			// 	 	}
			// 	}
			// 	xHttp.open("POST","verification_answer.php");
			// 	xHttp.setRequestHeader("Content-type", "application/json");
			// 	xHttp.send(data);
      //
      //       }
      //   }
//--------------------------------------------------------------------------------------------------
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
      var data = {
            		question_id : question_id,
            		option_id : option_id
      };

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
			xHttp.setRequestHeader("Content-type", "application/json");
			xHttp.send(data);

		});
  </script>

</body>
</html>
