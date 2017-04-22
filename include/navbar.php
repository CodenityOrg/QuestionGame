<?php 
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";

 ?>

 <header class="header-encabezado">
	<nav class="header-quiz">
		<?php if (!$email) { ?>
			<div class="">
				<img class="quiz" src="img/quiz.png">
			</div>
			<button>LOGIN</button>
		<?php } else { ?>
			<div>
				<p style="color:white;" class="fullname"> <?= $_SESSION['name'] ?>  <?= $_SESSION['lastname'] ?> </p>
			</div>
			<div>
				<p style="color:white;">Mi Score : <?= $_SESSION['current_score'] ?> </p>
			</div>
			<div>
				<p><a href="ranking.php">Ranking</a></p>
			</div>
			<div>
				<p><a style="" href="logout.php">Logout</a></p>
			</div>
		<?php } ?>
	</nav>
</header>