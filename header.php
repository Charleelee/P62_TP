<?php
$nb_item = 1;
?>

<header>
	<nav>
		<ul>
			<li><img id="logo" src="assets/img/logo.png"/></li>
			<li><a href="?page=index">Acceuil</a></li>
			<li><a href="?page=game">Jeux</a></li>
			<li><a href="?page=cart">Mon panier</a>
			<div id="cart_icon"	>
				<i class="fa fa-shopping-cart
			fa-2x"></i>
			<span id="cart_items"><?php echo $nb_item ?></span></li>
			</div>
			<li id="fb"><a href="http://www.facebook.com"><i class="fa fa-facebook-official
			fa-2x"></i></a></li>
			<li id="twitter"><a href="http://www.twitter.com"><i class="fa fa-twitter
			fa-2x"></i></a></li>
			<li id="insta" ><a href="http://www.instagram.com"><i class="fa fa-instagram
			fa-2x"></i></a></li>
		</ul>
	</nav>
</header>