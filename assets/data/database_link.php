<?php 

function getGames(){
	$connexion = new mysqli('localhost','root','','game_database');
	if ($connexion->connect_errno) {
		echo 'Erreur de connexion';
	}
	$requete = 'SELECT * FROM games ORDER BY title ASC';
	$res = $connexion->query($requete);
	$games = array();
	if ($res && ($res->num_rows > 0)) {
		while ($game = $res->fetch_assoc()) {
			array_push($games, $game);
		}
	}
	 return $games;


}

function getGamesByRand(){
	$connexion = new mysqli('localhost','root','','game_database');
	if ($connexion->connect_errno) {
		echo 'Erreur de connexion';
	}
	$requete = 'SELECT * FROM games ORDER BY RAND()';
	$res = $connexion->query($requete);
	$games = array();
	if ($res && ($res->num_rows > 0)) {
		while ($game = $res->fetch_assoc()) {
			array_push($games, $game);
		}
	}
	 return $games;


}

function getGamesByGenre($genre){
	$connexion = new mysqli('localhost','root','','game_database');
	if ($connexion->connect_errno) {
		echo 'Erreur de connexion';
	}
	$requete = "SELECT * FROM games WHERE genre = '$genre'";
	$res = $connexion->query($requete);
	$games = array();
	if ($res && ($res->num_rows > 0)) {
		while ($game = $res->fetch_assoc()) {
			array_push($games, $game);
		}
	}
	 return $games;


}

function getOneGame($url) {
	$connexion = new mysqli('localhost','root','','game_database');
	if ($connexion->connect_errno) {
		echo 'Erreur de connexion';
	}
	$requete = "SELECT * FROM games WHERE url = '$url' LIMIT 0, 1";
	$game = $connexion->query($requete)->fetch_assoc();

	if ($game) return $game;
	else return null;

}
	