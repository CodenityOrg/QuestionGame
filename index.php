<?php include 'middleware/logged.php'; ?>

<!DOCTYPE html>
<html>
	<?php include 'include/head.php'; ?>
<body>
	<?php include 'include/navbar.php'; ?>
<h1>GBYHNHU</h1>
		<div class="conteiner">
		<div class="content">
			<h1 class="title-quiz">quizApp</h1>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
			<p class="parrafo-quiz">Esta aplicacion mejora tu capacidad de responder preguntas rapidamente y con esta aplicacion web aprenderas cosas nuevas sobre cultura general</p>
		</div>
		<div class="login">
			<form method="POST" action="login.php">
				<div class="checkName">
					<div class="form-submit">
						<button class="btn" id="fb-login">
							<img width="20" height="20" src="img/facebook.ico">
							<span>INICIAR SESION CON FACEBOOK</span>
						</button>
					</div>
					<div class="form-style">
						<input class="input" type="email" name="email" placeholder="Email">
					</div>
					<div class="form-style">
						<input class="input" type="password" name="password" placeholder="Contrasena">
					</div>
					<div class="form-submit">
						<button class="btn btn-medium">INICIAR SESION</button>
					</div>
					<difv id="finestra-modal-obrir1" class="form-submit ">
						<button class="btn btn-medium">REGISTRARTE</button>
					</div>

					<span><a id="finestra-modal-obrir1" class="finestra-modal-obrir1 boto1">ABRIR</a></span>
				</div>
			</form>
		</div>
		<!-- <div id="">
			<div id="finestra-modal1" class="finestra-modal1 js-mostrar1">
			  <div class="finestra-modal__contingut1">
			      <div id="finestra-modal-tancar1" class="finestra-modal-tancar1 boto1">×</div>

			      	<div>Registrate</div>
					<form id="register-form">
						<div class="form-register">
							<p>Ingrese el Nombre</p>
							<input type="text" name="name" placeholder="Nombre">
						</div>
						<div class="form-register">
							<p>Ingrese el Apellido</p>
							<input type="text" name="lastname" placeholder="Apellido">
						</div>
						<div class="form-register">
							<p>Ingrese el Correo Electronico</p>
							<input type="text" name="email" placeholder="Correo ELectronico">
						</div>
						<div class="form-register">
							<p>Ingrese la Contrasena</p>
							<input type="password" name="password" placeholder="Contrasena">
						</div>
						<div>
							<button type="submit" class="register-enviar" >ENVIAR</button>
						</div>
					</form>
			       </div>
			  </div>
			</div>
		</div> -->
	<?php include 'include/scripts.php'; ?>
	<script type="text/javascript">

		// document.getElementById("register-form").addEventListener("submit",function(e) {
		// 	e.preventDefault();
		// 	e.stopPropagation();
		// 	debugger;
		// 	var $this = this;

		// 	var data = new FormData(this);

		// 	var xHttp = new XMLHttpRequest();

		// 	xHttp.open("POST","register.php");

		// 	xHttp.onreadystatechange  = function() {
		// 		if (this.readyState == 4 && this.status == 200) {
		// 			location.reload();
		// 	 	}
		// 	}

		// 	xHttp.send(data);

		// });
	</script>
	<script type="text/javascript">

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

	  fblogin();
	</script>

</body>
</html>
