<?php
include('assets/data/array_article.php');
include('assets/data/fonctions.php');

foreach($article as $videogames => $details){
	echo '<ul><li>',$videogames,'</li>';
	foreach($details as $info => $value ){
		echo '<li>',$info,':';
		echo $value,'</li>';
		createGameArticle($videogames,
	}
	echo'</ul>';
}