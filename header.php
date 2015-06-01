<?php
$nb_item = 1;
?>

<header>
	<nav id="navibarre">
		<ul>
			<li id="logo"><img class="logo" src="assets/img/logo.png"/></li>
			<li><a href="?page=index">Acceuil</a></li>
			<li><a href="?page=game">Jeux</a></li>
			<li id="cart"><a href="?page=cart">Mon panier</a>
			<div id="cart_icon"	>
				<i class="fa fa-shopping-cart
			fa-2x"></i>
			<span id="cart_items"><?php echo $nb_item ?></span></li>
			</div>
			<li id="fb"><a href="http://www.facebook.com"><img src="assets/img/social/social21.png" alt="logo" width="35px"></a></li>
			<li id="twitter"><a href="http://www.twitter.com"><img src="assets/img/social/social38.png" alt="logo" width="35px"></a></li>
			<li id="insta" ><a href="http://www.instagram.com"><img src="assets/img/social/social77.png" alt="logo" width="35px"></a></li>
		</ul>
	</nav>
</header>