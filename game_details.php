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
			<article class="game-detail-article">
				<h1><?php echo $game['title'] ?></h1>
				<img class="game-detail-img" src="<?php echo $game['img'] ?>" alt="image">
				<h3>Description</h3>
				<p><?php echo $game['description'] ?></p>
				<div class="add-cart">
					<span><?php echo $game['price'].'$' ?></span>
					<a href="cart.php?action=add&game=<?php echo $_GET['url']?>">ADD TO CART</a>
				</div>
				<?php 
					$i = 0;
					$games = getGamesByRand(); 
				?>
				<h4>More games to choose from...</h4>
				<?php foreach ($games as $key => $v): ?>
					<?php $i++; ?>
					<a class="<?php echo $v['genre'] ?>" href="game_details.php?url=<?php echo $v['url'] ?>">
						<article class="game_product" id="<?php echo $v['id'] ?>">
							<img class="product_img" src="<?php echo $v['img'] ?>" alt='image'>
							<h3><?php echo $v['title'] ?></h3>
							<span class="product_price"><?php echo $v['price'].'$' ?></span>
						</article>
					</a>
					<?php if ($i == 4) {
						break;
					} ?>
				<?php endforeach ?>
			</article>
		<?php 	endif ?>
		<?php endif ?>
	</div>
<?php
include('footer.php');
?>
</body>
</html>


		
