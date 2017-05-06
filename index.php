<?php include 'middleware/logged.php'; ?>

<!DOCTYPE html>
<html>
	<?php include 'include/head.php'; ?>
<body>
	<?php include 'include/navbar.php'; ?>
		<div class="conteiner">
			<div class="modal__login" id="modal__login">
       <div class="login__in">
            <h1>INICIA SESIÓN</h1>
           <div class="modal__close" id="modal__close">
               <p>X</p>
           </div>
           <button class="btn-face" ><img width="20" height="20" src="img/facebook.ico">
							<span>INICIAR CON FACEBOOK</span></button>
           <form action="">
               <input type="text" name="email" class="input" placeholder="EMAIL">
               <input type="password" name="password" class="input" placeholder="PASSWORD">
               <button class="start">INICIAR</button>
               <a href="">¿Olvidaste tu contraseña?</a>
           </form>
       		</div>
   		</div>
			<div class="learn__1">
        <p>APRENDE Y DIVIERTETE CON INTERESANTES PREGUNTAS !</p>
        <button class="inicia" id="start__login">INICIA</button>
        <div class="materias">
            <div class="opt__img">
                <h2>CIENCIA</h2>
                <div class="img0"></div>
            </div>
            <div class="opt__img">
                <h2>HISTORIA</h2>
                <div class="img0"></div>
            </div>
            <div class="opt__img">
                <h2>MATEMATICA</h2>
                <div class="img0"></div>
            </div>
        </div>
        <p>Y MUCHO MAS !</p>
    	</div>
			<div class="login">
			<form method="POST" action="login.php">
				<div class="checkName">
				    <h1>INICIA SESIÓN</h1>
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
						<input class="input" type="password" name="password" placeholder="Contraseña">
					</div>
					<div class="form-submit">
						<button class="btn btn-medium">INICIAR SESION</button>
					</div>
					<div id="finestra-modal-obrir1" class="form-submit ">
						<button class="btn btn-medium">REGISTRARTE</button>
				    </div>
				    <a href="">¿ Olvidaste tu contraseña ?</a>
				</div>
			</form>
        </div>

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
	<script src="js/modallogin.js"></script>
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
