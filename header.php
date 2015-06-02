<?php
//init session
session_start();
if (isset($_SESSION['cart'])) {
	foreach($_SESSION['cart'] as $game=>$qty) {
		var_dump($qty);
	}
}
?>
<header>
	<nav id="navibarre">
		<ul>
			<li id="logo"><img class="logo" src="assets/img/logo.png" alt="logo"/></li>
			<li><a href="index.php">Acceuil</a></li>
			<li><a href="games.php">Jeux</a></li>
			<li id="cart"><a href="cart.php">Mon panier</a>
				<span id="cart_icon">
					<i class="fa fa-shopping-cart fa-2x"></i>
					<span id="cart_items"><?php echo $qty ?></span>
				</span>
			</li>
			<li><a href="inscription.php">Inscrivez-vous</a></li>
			<li id="login_li"><?php include_once('_loginform.php') ?></li>
		</ul>
	</nav>
</header>