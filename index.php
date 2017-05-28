<?php include 'middleware/logged.php'; ?>

<!DOCTYPE html>
<html>
	<?php include 'include/head.php'; ?>
	<style type="text/css">
		.nav-options{
		  background-color: transparent;
		  overflow: hidden;
		  line-height: 3.5;
		}

		.nav-options img{
			width: 80px;
			height: 80px;
		}

		.nav-options .btn-register{
			background: transparent;
			font-size: 25px;
		}

		.nav-options{
			margin-left: 50px;
			margin-right: 50px;
		}
	</style>
<body style="background-image: url(img/rect4359.png); background-size:100vw 100vh">
   
<!------MODAL REGISTER--INICIO-------------------------->		
		
    <div class="conteiner__modalregister" >
        <div class="modal__register" id="bgregister">
              <div class="info__register">
			      <div id="registerclose" class="register__close">×</div>

			     <h1>REGISTRATE</h1> 	
					<form id="register__form">
						<div class="form-register">
							<input type="text" name="name" placeholder="Nombre">
						</div>
						<div class="form-register">
							<input type="text" name="lastname" placeholder="Apellido">
						</div>
						<div class="form-register">
							<input type="text" name="email" placeholder="Correo ELectronico">
						</div>
						<div class="form-register">
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
            
           <div class="modal__close" id="modal__close">X</div>
           <h1>INICIA SESION</h1>
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
 <?php include 'include/navbar.php'; ?>
<!------------MATERIAS------------------------------------->
    
<div class="conteiner__index">
    <div class="container-principal">
		<!--INFO del CUERPO-->
			
   		<!--INFO del CUERPO-->
        <div class="learn__1">
        <h4 class="titledurazno">APRENDE Y DIVIERTETE CON</h4>
        <h4 class="titledurazno">INTERESANTES PREGUNTAS !</h4>
        <button class="inicia" id="start__login">INICIA</button>
        <button class="inicia open-register-modal">REGISTRATE</button>
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
						<button class="btn btn-medium open-register-modal" id="btn__down">REGISTRARTE</button>
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
	<script type="text/javascript"> registerForm();</script>
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
