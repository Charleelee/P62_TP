<?php
#init 
include('assets/data/database_link.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètre
?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php');

$game_name = getOneGame($_GET['game']);
$_SESSION['CART'][$game_name]=0;

$_SESSION['CART']=$game_name;

?>
<div id="game_wrapper">
    <ul>
        <li><?php
            foreach($_SESSION['CART'][1] as $game => $info){
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