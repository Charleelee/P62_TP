<?php function redirect($url){ header("Location:$url");}
//Redirection de la page si le $_GET existe et si la clé $_GET['action'] existe.
//En fonction de la valeur de $_GET['action'] l'utilisateur changera de page
//(En résumé, redirection de la page si l'utilisateur a cliqué sur le menu)

$does_queryString_exist = isset($_GET);

$is_menu_clicked = (($does_queryString_exist) && (isset($_GET['action'])));

if($is_menu_clicked) {
    switch ($_GET['action']) {
        case'game':
            redirect('games.php');
            break;
        case'cart':
            header('Location : cart.php');
            break;
    }
}

$is_game_clicked = (($does_queryString_exist) && (isset($_GET['game'])));
if($is_game_clicked){
    redirect('game_details.php');
}