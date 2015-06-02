<?php
#init 
include('controller.php');
include('assets/data/arrays.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètre
?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php');

$game_name = isset($_GET['game']) ? $_GET['game'] : null;

foreach($games_gamesArticles as $key => $value){
    if($key == $game_name){
        $_SESSION['CART'][$key] = $value;
    }
}
?>
<div id="game_wrapper">
    <ul>
        <li><?php
            foreach($_SESSION['CART'] as $game => $info){
                echo"<span>Nom:",$info['title'],"Prix:",$info['price'],"</span>";
            }
            ?></li>
    </ul>
</div>
<?php
include('footer.php');
?>
</body>
</html>