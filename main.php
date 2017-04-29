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
		<div class="content">
		    <div class="login">	
		    <button class="login-facebook">Login FACEBOOK</button>		
			<form action="login.php" method="POST" id="frm-intro">
			    <input type="email" name="email" placeholder="Email">
			 
			    <input type="password" placeholder="Contraseña">
			</form>
            <button type="submit" class="btn-sesion">INICIAR SESIÓN</button>
            <button id="register1" class="btn-sesion">REGISTRATE</button>
			
		    </div>
		</div>	
		
		
		<!--AQUI INICIA EL MODAL PARA REGISTRO000-->
		
        <div id="finestra-modal1" class="finestra-modal1 ">
          
            <div class="finestra-modal__contingut1">        
                <div  class="finestra-modal-tancar1 boto1">×</div> 
                <h1 class="modal-registrate">Registrate</h1>
                <form id="register-form">
                        <p>Ingrese el Nombre</p>
				        <input type="text" placeholder="Nombre">
				        <p>Ingrese el Apellido</p>
				        <input type="text" placeholder="Apellido">
                        <p>Ingrese el Correo Electronico</p>
				        <input type="text" placeholder="Correo ELectronico">
				        <p>Ingrese la Contrasena</p>
				        <input type="password" placeholder="Contrasena">
						<button class="register-enviar" >ENVIAR</button>
						<button class="" id="btn-cerrar">CERRAR</button>
				</form>	   
                
            </div>   
        </div>
        <!--Aqui TERMINA EL MODALLLLLLL ------->	
		</div>
	
	<script src="js/modalregister.js"></script>
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