<?php
#Init 
include('controller.php');
include('assets/data/arrays.php');
#Boucle de recupération de données stocké dans l'array qui va generer des articles (template)
#En prennant les clé / value du tableau comme paramètre


?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
	<div id="content_wrapper">
	<nav>
		<ul>
			<li><img src="assets/img/icon/search7.png" alt="icon" width="35px">Search</li>
			<li><a href="">FPS</a></li>
			<li><a href="">Strategy</a></li>
			<li><a href="">RPG</a></li>
		</ul>
	</nav>
	<section>
		<?php foreach ($games_gamesArticles as $key => $v): ?>
			<a class="<?php echo $v['genre'] ?>" href="<?php echo $v['genre'] ?>">
				<article class="game_product" id="<?php echo $key ?>">
					<img class="product_img" src="<?php echo $v['img'] ?>" alt='image'>
					<h3><?php echo $v['title'] ?></h3>
					<span class="product_price"><?php echo $v['price'] ?></span>
				</article>
			</a>
		<?php endforeach ?>
	</section>
	</div>
<?php
include('footer.php');
?>
</body>
</html>

