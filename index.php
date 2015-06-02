<?php
#init
include('assets/data/arrays.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètre
?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
    <div id="game_wrapper">
        <?php foreach ($index_gamesArticles as $key => $v): ?>
            <a class="<?php echo $v['genre'],' ',$v['size'] ?>" href="<?php echo $v['url'] ?>">
                <article class="product" id="<?php echo $key ?>">
                    <img class="product_img" src="<?php echo $v['img'] ?>" alt="image">
                    <h3><?php echo $v['title'] ?></h3>
                </article>
            </a>
        <?php endforeach ?>
    </div>
<?php
include('footer.php');
?>
</body>
</html>
