<?php
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";

 ?>

 <header class="header-encabezado">
 
	<nav class="nav-options" id="myTopnav">
		<a href="/"><img  width="40" height="40" style="margin:0px 20px;padding: 0;" class="" src="https://media.freepik.com/accounts/img/badges/favorites_gold.svg"></a>

		
		<?php if (!$email): ?>
			<a href=""><button class="btn btn-medium ">LOGIN</button></a>
		<?php else:?>

			<a style="" href="logout.php"><b>Cerrar sesión</b></a></p></li>
			<a href="ranking.php"><p>Ranking</p></a>
			<a href="#"> <p>Mi Score : <b><?= $_SESSION['current_score'] ?> pts</b>  </p></a>
			<a href=""><p> <b><?= $_SESSION['name'] ?> </b>  </p></a> 
		    <a class="icon" onclick="navResponsive()" href="javascript:void(0);"  >&#9776;</a>

		<?php endif; ?>
	</nav>
</header>
