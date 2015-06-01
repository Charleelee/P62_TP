<?php include('controller.php');
include('assets/data/arrays.php');
include ('html_head.php');
include ('header.php');

//Boucle de recupération de données stocké dans l'array qui va generer des articles (template)
//En prennant les clé / value du tableau comme paramètre
?>
<div id="content_wrapper">
<?php foreach ($games_gamesArticles as $key => $v): ?>
	<a class="<?php echo $v['genre'] ?>" href="<?php echo $v['url'] ?>">
		<article class="game_product" id="<?php echo $key ?>">
			<img class="product_img" src="<?php echo $v['img'] ?>" alt='image'>
			<h3><?php echo $v['title'] ?></h3>
			<span class="product_price"><?php echo $v['price'] ?></span>
		</article>
	</a>
<?php endforeach ?>
</div>
<?php
include('footer.php');
?>
