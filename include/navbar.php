<?php 
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";

 ?>
 <style type="text/css">
 	
 	.header-quiz p{
 		color: white;
 	}

 	.nav-options > ul > li{
 		display: inline-block;
 		padding: 10px;
 	}

 	.nav-options{
 		line-height: 50px;
 	}

 	nav .btn{
 		margin-top: 10px;
 		background: #0f5561;
 	}

 </style>

 <header class="header-encabezado">
	<nav class="header-quiz">
		<div class="">
			<img  width="50" height="50" style="margin:5px;" class="" src="https://media.freepik.com/accounts/img/badges/favorites_gold.svg">
		</div>
		<?php if (!$email): ?>
			<button class="btn btn-medium ">LOGIN</button>
		<?php else:?>
			<div class="nav nav-options">
				<ul>
					<li><p> <b><?= $_SESSION['name'] ?>  <?= $_SESSION['lastname'] ?></b>  </p></li>
					<li><p>Mi Score : <b><?= $_SESSION['current_score'] ?></b>  </p></li>
					<li><p>Actual Score: <b><?= $_SESSION['score'] ?></b>  </p></li>
					<li><p><a href="ranking.php">Ranking</a></p></li>
					<li><p><b><a style="" href="logout.php">Cerrar sesión</a></b></p></li>
				</ul>
			</div>
		<?php endif; ?>
	</nav>
</header>