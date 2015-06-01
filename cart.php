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
<?php include ('header.php'); ?>
    <div id="game_wrapper">
        <?php foreach ($games_gamesArticles as $key => $v): ?>
            <ul>
            	<li><?php echo $v['title'],' ',$v['price'] ?></li>
            </ul>
        <?php endforeach ?>
    </div>
<?php
include('footer.php');
?>
</body>
</html>