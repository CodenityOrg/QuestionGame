<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
			//session_start();

			
			//$_SESSION["lastquestion"] = $question[0]["id"];
	 ?>
	<!-- <form method="post" action="verification_answer.php">
  Title: <input type="text" name="question_id" value=<?php $question[0]["id"] ?>> <?php echo $question[0]["title"]; ?>
  <br><br>
  Options:
	<?php
		foreach ($options as $option) {
			echo "<br> <input type='radio' name='option_id'  value=" . $option["id"] . ">" . $option["title"] . "";
		}
	 ?>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> -->


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
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '202934583530333',
	      xfbml      : true,
	      version    : 'v2.8'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>


</body>
</html>
