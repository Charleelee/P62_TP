<?php
#Init
include('assets/data/database_link.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
	<div id="content_wrapper">

		<?php if (!isset($_GET['url'])): ?> 
		   <h1>Cet article n'existe pas</h1>
		<?php else: ?>
		<?php 	$game = getOneGame($_GET['url']);
				if ($game == null): ?>
					<h1>Cet article n'existe pas</h1>
		<?php 	else: ?>
			<article>
				<h1><?php echo $game['title'] ?></h1>
				<img src="<?php echo $game['img'] ?>" alt="image">
				<h3>Description</h3>
				<p><?php echo $game['description'] ?></p>
			</article>
			<aside>
				<span><?php echo $game['price'] ?></span>
				<form method="get" action="cart.php">
					<button>ADD TO CART</button>
					<input type="hidden" name="game" value="<?php echo $_GET['url']?>" />
				</form>
			</aside>
		<?php endif ?>
		<?php endif ?>
		<?php var_dump($game) ?>
	</div>
<?php
include('footer.php');
?>
</body>
</html>


		
