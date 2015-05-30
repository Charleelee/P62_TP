<?php
include ('html_head.php');
include('assets/data/array_article.php');
include('assets/data/fonctions.php');

//Boucle de recupération de donnée stocker dans l'array
foreach($article2 as $videogames => $type){
	foreach($type as $type_vg => $price){
		foreach($price as $price_vg => $ref_id ){
				foreach($ref_id as $ref_id_vg => $url_bg){
					foreach($url_bg as $url => $bg){
						createGameArticle($videogames, $type_vg, $price_vg, $ref_id_vg, $url, $bg);
					}
				}
			}
		}
	echo'</ul>';
	}
//		createGameArticle($videogames,
//	}
//
//}