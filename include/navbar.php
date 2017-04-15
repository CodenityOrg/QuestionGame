<?php 
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";

 ?>

 <header class="header-encabezado">
	<nav class="header-quiz">
		<?php 
			if (!$email) {
		?>
			<div class="">
				<img class="quiz" src="img/quiz.png">
			</div>
			<button>LOGIN</button>
		<?php
			}else{

			}
		?>
	</nav>
</header>