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
						<input type="password" placeholder="Contrasena">
					</div>
					<div class="form-submit">
						<button type="submit">INICIAR SESIÓN</button>
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
					<form id="register-form">
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