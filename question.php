<?php

      include 'config/db.php';

      session_start();

      $lastQuestion = $_SESSION["lastQuestion"];

      if(isset($lastQuestion)) 	$question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
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
</head>
<body>

  <h1><?php echo $question["title"]; ?> </h1>
  <ul>
  	<?php foreach ($options as $key => $option): ?>
	    <li><?php echo $option["title"]; ?></li>
  	<?php endforeach ?>
  </ul>
  
  <script type="text/javascript">
		document.getElementById("register-form").addEventListener("submit",function() {
			var $this = this;
			var data = {
				name : this.name.value,
				lastname: this.lastname.value,
				email: this.email.value,
				password: this.password.value
			};

			var xHttp = new XMLHttpRequest();
			xHttp.onreadystatechange  = function() {
				if (this.readyState == 4 && this.status == 200) {
					location.reload();
			 	}
			}
			xHttp.setRequestHeader("Content-type", "application/json");
			xHttp.open("POST")
			xHttp.send(data);

		});
  </script>

</body>
</html>
