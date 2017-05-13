<?php include 'middleware/logged.php'; ?>

<!DOCTYPE html>
<html>
	<?php include 'include/head.php'; ?>
<body style="background-image: url(img/rect4359.png); background-size:100vw 100vh">
<?php include 'include/navbar.php'; ?>
<!----------MODAL REGISTER--INICIO-------------------------->		
		
    <div class="conteiner__modalregister" id="bg__register">
        <div class="modal__register">
              <div class="info__register">
			      <div id="register__close" class="register__close">×</div>

			     <h1>REGISTRATE</h1> 	
					<form class="register__form">
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
						<div class="btns__register">
							<button type="submit" class="register__enviar" >ENVIAR</button>
						</div>
					</form>
                 </div>
        </div>
    </div>
<!----------REGISTER--FIN------------------------------------->
  
   <!--IMODAL DE LOGIN--------------------------->
    <div class="conteiner__modallogin">
      <div class="modal__login" id="modal__login">
       <div class="login__in">
            <h1>INICIA SESION</h1>
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
   	</div>
<!-------fin --del modal-----------FIN------------------------------>
	
<!------------MATERIAS------------------------------------->
    
		<div class="conteiner__index">
		<div class="frugos">
		<!--INFO del CUERPO-->
			
   		<!--INFO del CUERPO-->
			<div class="learn__1">
        <h2>APRENDE Y DIVIERTETE CON INTERESANTES PREGUNTAS !</h2>
        <button class="inicia" id="start__login">INICIA</button>
        <button id="open__register">regitrarte</button>
        <div class="materias">
            <div class="opt__img">
                <h2>CIENCIA</h2>
                <div class="">
                	<img width="100" height="100" src="img/flasks.svg">
                </div>
            </div>
            <div class="opt__img">
                <h2>HISTORIA</h2>
                <div class="">
                	<img width="100" height="100" src="img/history.svg">
                </div>
            </div>
            <div class="opt__img">
                <h2>MATEMATICA</h2>
                <div class="">
                	<img width="100" height="100" src="img/calculator.svg">
                </div>
            </div>
        </div>
        <h2>Y MUCHO MAS !</h2>
    	</div>
<!----------LOGIN--------------------------------------->
        <div class="login__main">
			<form method="POST" action="login.php">
				<div class="checkName">
				    <h1>INICIA SESION</h1>
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
						<button class="btn btn-medium" id="btn__down">INICIAR SESION</button>
					</div>
					<div id="finestra-modal-obrir1" class="form-submit ">
						<button class="btn btn-medium" id="btn__down">REGISTRARTE</button>
				    </div>
				    <a href="">¿ Olvidaste tu contraseña ?</a>
				</div>
			</form>
        </div>
		</div>
<!----------LOGIN--FIN------------------------------------->
    
		</div>
		

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
