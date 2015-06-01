<?php
#Init
include('controller.php');
include('assets/data/arrays.php');
?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
	<div id="content_wrapper">
		<?php if (!$_GET['game'] || !array_key_exists($_GET['game'], $games_gamesArticles)): ?> 
		   <h1>Cet article n'existe pas</h1>
		<?php else: ?>
		<?php $article = $games_gamesArticles[$_GET['game']] ?>
			<article>
				<h1><?php echo $article['title'] ?></h1>
				<img src="<?php echo $article['img'] ?>" alt="image">
				<h3>Description</h3>
				<p><?php echo $article['description'] ?></p>
			</article>
			<aside>
				<span><?php echo $article['price'] ?></span>
				<form method="get" action="cart.php">
					<button>ADD TO CART</button>
					<input type="hidden" name="game" value="<?php echo $_GET['game']?>" />
				</form>
			</aside>
		<?php endif ?>
	</div>
<?php
include('footer.php');
?>
</body>
</html>


		
