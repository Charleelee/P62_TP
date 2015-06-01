<?php
#Init
include('assets/data/arrays.php');
$gameId = array_key_exists('game', $_GET) ? $_GET['game'] : null;

?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
	<div id="content_wrapper">
		<?php foreach ($games_gamesArticles as $key => $v): ?>
			<?php if ($gameId == $key): ?>
				<article>
					<h1><?php echo $v['title'] ?></h1>
					<img src="<?php echo $v['img'] ?>" alt="image">
					<h3>Description</h3>
					<p><?php echo $v['description'] ?></p>
				</article>
				<aside>
					<span><?php echo $v['price'] ?></span>
					<button>ADD TO CART</button>
				</aside>
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php
include('footer.php');
?>
</body>
</html>


		
