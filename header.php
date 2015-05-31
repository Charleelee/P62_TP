<?php
$nb_item = 1;
?>

<header>
	<nav>
		<ul>
			<li><a href="?page=index"><img id="logo" src="assets/img/logo.png"/></a></li>
			<li><a href="?action=game">Jeux</a></li>
			<li><a href="?action=cart">Mon panier</a>
			<span id="cart_items"><?php echo $nb_item ?></span></li>
			<li><a href="http://www.facebook.com"><img src="assets/img/fb_icon.jpg"></a></li>
			<li><a href="http://www.twitter.com"><img src="assets/img/twitter-icon.png"></a></li>
			<li><a href="http://www.instagram.com"><img src="assets/img/insta_icon.png"></a></li>
		</ul>
	</nav>
</header>