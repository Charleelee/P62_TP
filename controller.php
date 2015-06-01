<?php function redirect_gamedetails($url){ header("Location:$url".'?'.$_SERVER['QUERY_STRING']);}
function redirect($url){ header("Location:$url");}
//Redirection de la page si le $_GET existe et si la clé $_GET['action'] existe.
//En fonction de la valeur de $_GET['action'] l'utilisateur changera de page
//(En résumé, redirection de la page si l'utilisateur a cliqué sur le menu)

$does_queryString_exist = isset($_GET);

$is_page_clicked = (($does_queryString_exist) && (isset($_GET['page'])));

if($is_page_clicked){
    switch($_GET['page']){
        case 'game':
            redirect('games.php');
            break;
        case'index':
            redirect('index.php');
            break;
    }
}

$is_videogame_clicked = (($does_queryString_exist) && (isset($_GET['game'])));
$is_videogame_clicked ? redirect_gamedetails('game_details.php') : '';