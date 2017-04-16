<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (isset($result)) {
			$lastquestion = $question[0]["id"];
			include 'question.php';
		}
	 ?>
	<form method="post" action="verification_answer.php">
  Title: <input type="hidden" name="question_id" value=<?php $question[0]["id"] ?>> <?php echo $question[0]["title"]; ?>
  <br><br>
  Options:
	<?php
		foreach ($options as $option) {
			echo "<br> <input type='radio' name='option_id'  value=" . $option["id"] . ">" . $option["title"] . "";
		}
	 ?>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
