<?php
#init
include('assets/data/database_link.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètres
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php'); ?>
    <div id="game_wrapper">
        <?php $games = getGames();
            foreach ($games as $key => $v): ?>
            <?php if (!empty($v['img_size'])): ?>  
            <a class="<?php echo $v['genre'],' ',$v['img_size'] ?>" href="game_details.php?url=<?php echo $v['url'] ?>">
                <article class="product" id="<?php echo $v['id'] ?>">
                    <img class="product_img" src="<?php echo $v['img'] ?>" alt="image">
                    <h3><?php echo $v['title'] ?></h3>
                </article>
            </a>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php
include('footer.php');
?>
</body>
</html>
