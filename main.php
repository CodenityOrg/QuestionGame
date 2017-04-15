<?php 

	session_start();

	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";
	if($email) {
		header('location:question.php');
		die();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>quizApp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	
	
	<?php include 'include/navbar.php'; ?>



	<div class="conteiner">
		<div class="content">
			<h1 class="title-quiz">quizApp</h1>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
		</div>	
		<div class="login">			
			<form action="login.php" method="POST">
				<div class="checkName">
					<div class="form-submit">
						<button>FACEBOOK</button>
					</div>
					<div class="form-style">
						<input type="email" name="email" placeholder="Email">
					</div>
					<div class="form-style">
						<input type="password" name="password" placeholder="Contrasena">
					</div>
					<div class="form-submit">
						<button type="submit">INICIAR SESIÓN</button>
					</div>
					<div id="finestra-modal1" class="form-submit">
						<button>REGISTRARSE</button>
					</div>			
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>