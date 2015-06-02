<?php
#Init 
include('assets/data/database_link.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles (template)
//En prennant les clé / value du tableau comme paramètre
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
	<div id="content_wrapper">
	<nav>
		<ul>
			<li><img src="assets/img/icon/search7.png" alt="icon" width="35px" height="30px">Search</li>
			<li><a href="?">ALL</a></li>
			<li><a href="?genre=fps">FPS</a></li>
			<li><a href="?genre=strategy">Strategy</a></li>
			<li><a href="?genre=rpg">RPG</a></li>
			<li><a href="?genre=adventure">Adventure</a></li>
		</ul>
	</nav>
	<section>
	<?php 
	if (isset($_GET['genre'])) {
		$games = getGamesByGenre($_GET['genre']);
	} else {
		$games = getGames();
	}
	foreach ($games as $key => $v): ?>
		<a class="<?php echo $v['genre'] ?>" href="game_details.php?url=<?php echo $v['url'] ?>">
			<article class="game_product" id="<?php echo $v['id'] ?>">
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

