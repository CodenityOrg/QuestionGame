<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>quizApp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>	
<body>
	
	<?php include 'include/navbar.php'; ?>
		
	<header class="header-encabezado">
		<nav class="header-quiz">
			<div class="">
				<img class="quiz" src="img/quiz.png">
			</div>
			<button>LOGIN</button>
		</nav>
	</header>
	<div class="conteiner">
		<div class="content">
			<h1 class="title-quiz">quizApp</h1>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
		</div>	
		<div class="login">			
			<form class="login-sesion">
				<div class="checkName">
					<div class="form-submit">
						<button>FACEBOOK</button>
					</div>
					<div class="form-style">
						<input type="text" placeholder="Email">
					</div>
					<div class="form-style">
						<input type="password" placeholder="Contrasena">
					</div>
					<div class="form-submit">
						<button>INICIAR</button>
					</div>
					<div id="finestra-modal-obrir1" class="finestra-modal-obrir1 boto1">
						<a id="finestra-modal-obrir1" class="finestra-modal-obrir1 boto1">REGISTRARTE</a>
					</div>			
					
				</div>
			</form>
		</div>
		<div id=""> 
			<div id="finestra-modal1" class="finestra-modal1 js-mostrar1">
			  <div class="finestra-modal__contingut1">        
			      <div id="finestra-modal-tancar1" class="finestra-modal-tancar1 boto1">×</div>    
			      	<div>Registrate</div>
					<form id="">
						<div class="form-register">
							<p>Ingrese el Nombre</p>
							<input type="text" placeholder="Nombre">
						</div>
						<div class="form-register">
							<p>Ingrese el Apellido</p>
							<input type="text" placeholder="Apellido">
						</div>
						<div class="form-register">
							<p>Ingrese el Correo Electronico</p>
							<input type="text" placeholder="Correo ELectronico">
						</div>
						<div class="form-register">
							<p>Ingrese la Contrasena</p>
							<input type="password" placeholder="Contrasena">
						</div>
						<div>
							<input type="submit" name="Enviar" placeholder="Enviar">
						</div>
					</form>			      		
			       </div>   
			  </div>
			</div>			
		</div>
	
	<script src="js/index.js"></script>

</body>
</html>