<?php
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";
 ?>
 <header class="header__main">
    <nav class="nav-options" id="myTopnav">
        <a href="/"><img   class="" src="https://media.freepik.com/accounts/img/badges/favorites_gold.svg"></a>

        <?php if (!$email): ?>
            <a href=""><button class="btn btn-medium btn-register open-register-modal">REGISTRATE</button></a>
        <?php else:?>

            <a style="" href="logout.php"><b>Cerrar sesión</b></a></p></li>
            <a href="ranking.php"><p>Ranking</p></a>
            <a href="#"> <p>Mi Score : <b><?= $_SESSION['current_score'] ?> pts</b>  </p></a>
            <a href=""><p> <b><?= $_SESSION['name'] ?> </b>  </p></a> 
            <a class="icon" onclick="navResponsive()" href="javascript:void(0);"  >&#9776;</a>

        <?php endif; ?>
    </nav>
</header>



