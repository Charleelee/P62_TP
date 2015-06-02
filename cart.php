<?php
#init 
//init session
session_start();

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
if (isset($_GET['action'])) {
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
	}
}

?>
<div id="game_wrapper">
    <?php 
    $subTotal = 0;
    if (sizeof($_SESSION['cart']) > 0): ?>
    <ul>
    	<?php foreach($_SESSION['cart'] as $game=>$qty) { 
    		//get game data
    		$gameData = getOneGame($game);
    		$subTotal += $gameData['price'] * $qty;
    	?>
    	<li><?php echo $gameData['title'] ?> ( <?php echo $gameData['price'] ?> $) x <?php echo $qty?> &nbsp; <a href="cart.php?action=remove&game=<?php echo $game ?>">Moins un</a></li>
		<?php } ?>
    </ul>
	

	<p>Subtotal: <?php echo $subTotal ?></p>
	<?php else: ?>
		<p>Le panier est vide</p>
	<?php endif ?>
</div>
<?php
include('footer.php');
?>
</body>
</html>