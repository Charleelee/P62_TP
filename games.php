<?php include('controller.php');
include('assets/data/arrays.php');
include('assets/data/fonctions.php');
include ('html_head.php');
include ('header.php');


//Boucle de recupération de données stocké dans l'array qui va éxecuter une fonction
//En prennant les clé du tableau comme paramètre
echo "<div id=content_wrapper>";
foreach ($games_gamesArticles as $key => $v) {
	generate_gameArticle($v['title'],$v['genre'],$v['price'],$key,$v['img'],$v['url']);
}
echo "</div>";

include('footer.php');