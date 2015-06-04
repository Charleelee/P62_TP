<?php
#init 
include('assets/data/database_link.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètre
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php');

//init cart
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) $_SESSION['cart'] = array();

//check action
if(!isset($_SESSION['login-status'])){
	header('location:inscription.php?error=01');
}else if (isset($_GET['action'])) {
	switch($_GET['action']) {
		case 'add':
			//on check si on passe un jeu
			if (!isset($_GET['game'])) break;
			//on fetch le jeu
			$game = getOneGame($_GET['game']);
			//on sassure que le jeu a ete trouve
			if ($game == null) break;

			//on ajoute le jeu au cart
			if (!isset($_SESSION['cart'][$_GET['game']])) $_SESSION['cart'][$_GET['game']] = 0;

			$_SESSION['cart'][$_GET['game']]++;

			break;
		case 'addmore':
			//on check si on passe un jeu
			if (!isset($_GET['game'])) break;
			//on fetch le jeu
			$game = getOneGame($_GET['game']);
			//on sassure que le jeu a ete trouve
			if ($game == null) break;

			//on ajoute le jeu au cart
			if (!isset($_SESSION['cart'][$_GET['game']])) $_SESSION['cart'][$_GET['game']] = 0;

			$_SESSION['cart'][$_GET['game']]++;

			break;	
			
		case 'remove':
			//on check si on passe un jeu
			if (!isset($_GET['game'])) break;
			//on fetch le jeu
			$game = getOneGame($_GET['game']);
			//on sassure que le jeu a ete trouve
			if ($game == null) break;

			//on enleve un exemplaire du jeu au cart
			if (isset($_SESSION['cart'][$_GET['game']])) {
				if ($_SESSION['cart'][$_GET['game']] > 0) $_SESSION['cart'][$_GET['game']]--;

				if ($_SESSION['cart'][$_GET['game']] == 0) unset($_SESSION['cart'][$_GET['game']]);
			}
			break;
		case 'checkout':
			if (isset($_SESSION['cart'])) {
				unset($_SESSION['cart']);
				header('location: index.php');
			}
			break;
	}
}

?>
<div id="game_wrapper">
    <?php 
    $subTotal = 0;
    if (sizeof($_SESSION['cart']) > 0): ?>
    <section class="cart-page-section">
    <a id="promo-link" href="games.php"></a>
    <img class="promo" src="assets/img/cart_promo.jpg" alt="img">
    <table>
 	
    	<?php foreach($_SESSION['cart'] as $game=>$qty) { 
    		//get game data
    		$gameData = getOneGame($game);
    		$subTotal += $gameData['price'] * $qty;
    	?>
    	<tr><td><?php echo $gameData['title'] ?> ( <?php echo $gameData['price'] ?> $) x <?php echo $qty?></td>
    	<td class="remove-button"> &nbsp; <a href="cart.php?action=addmore&game=<?php echo $game ?>">ADD</a></td>
    	<td class="remove-button"> &nbsp; <a href="cart.php?action=remove&game=<?php echo $game ?>">Remove</a></td></tr>
		<?php } ?>
    	<tr><td>Subtotal: <?php echo $subTotal.'$' ?></td><td><a href="cart.php?action=checkout">CHECKOUT NOW</a></td></tr>
    </table>
    <p>We never save your payment details and the order is protected by secure connection. Your order is also covered by our 30 Day Money Back Guarantee. This purchase will be subject to consumer withdrawal rights, which will end once the digital content is downloaded. </p>
	<?php else: ?>
		<section class="cart-page-section">
			<img class="promo" src="assets/img/cart_promo.jpg" alt="img">
			<p>Le panier est vide</p>
		</section>
	<?php endif ?>
	</section>
</div>
<?php
include('footer.php');
?>
</body>
</html>