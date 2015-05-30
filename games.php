<?php
//Redirection de la page vers game_details.php si la $_GET existe et si la clé $_GET['game'] existe.
//(Redirection de la page si l'utilisateur a cliquer sur un jeu)
$does_queryString_exist=isset($_GET);
$is_game_clicked = $does_queryString_exist ? isset($_GET['game']): '';
$is_game_clicked ? ('Location : games_detail.php'):'';


include('assets/data/array_article.php');
include('assets/data/fonctions.php');
include ('html_head.php');
include ('header.php');


//Boucle de recupération de données stocké dans l'array qui va éxecuter une fonction
//En prennant les clé du tableau comme paramètre

foreach($article2 as $videogames => $type){
	foreach($type as $type_vg => $price){
		foreach($price as $price_vg => $ref_id ){
				foreach($ref_id as $ref_id_vg => $url_bg){
					foreach($url_bg as $url => $bg){
						generate_gameArticle($videogames, $type_vg, $price_vg, $ref_id_vg, $url, $bg);
					}
				}
			}
		}
	echo'</ul>';
	}

include('footer.php');