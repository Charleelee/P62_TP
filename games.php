<?php
$does_queryString_exist=isset($_GET);
$is_game_clicked = $does_queryString_exist ? isset($_GET['game']): '';
$is_game_clicked ? header('Location : games_detail.php'):'';

include('assets/data/arrays.php');
include('assets/data/fonctions.php');
include ('html_head.php');
include ('header.php');


//Boucle de recupération de données stocké dans l'array qui va éxecuter une fonction
//En prennant les clé du tableau comme paramètre

foreach($games_gamesArticles as $videogames => $type){
	foreach($type as $type_vg => $price){
		foreach($price as $price_vg => $ref_id ){
				foreach($ref_id as $ref_id_vg => $url_bg){
					foreach($url_bg as $url => $bg){
						generate_gameArticle($videogames, $type_vg, $price_vg, $ref_id_vg, $url, $bg);
					}
				}
			}
		}
	}

include('footer.php');