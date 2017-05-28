<?php
	$name = isset($_SESSION["name"])? $_SESSION["name"]:"";
	$email = isset($_SESSION["email"])? $_SESSION["email"]:"";
 ?>
 <header class="header__main">
        <div class="head__logo">
            <a href="/">
                <img src="https://media.freepik.com/accounts/img/badges/favorites_gold.svg">
            </a>
        </div>
        <div class="opt__register">
            <a href="#" class="open-register-modal">REGISTRATE</a>
        </div>
</header>

