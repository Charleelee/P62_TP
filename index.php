<?php
//Redirection de la page si le $_GET existe et si la clé $_GET['action'] existe.
//En fonction de la valeur de $_GET['action'] l'utilisateur changera de page
//(En résumé, redirection de la page si l'utilisateur a cliqué sur le menu)

$does_queryString_exist=isset($_GET);
$is_menu_clicked = $does_queryString_exist ? isset($_GET['action']): '';
if($is_menu_clicked) {
    switch ($_GET['action']) {
        case'game':
            header('Location : games_detail.php');
            break;
        case'cart':
            header('Location : cart.php');
            break;
    }
}
?>
<!DOCTYPE html>
<?php include ('html_head.php'); ?>
<body>
<?php include('header.php'); ?>
<?php
include('assets/data/arrays.php');
include('assets/data/fonctions.php');
echo'<div id=game_wrapper>';
foreach($index_gamesArticles as $videogames => $type) {
    foreach ($type as $type_vg => $price) {
        foreach ($price as $price_vg => $ref_id) {
            foreach ($ref_id as $ref_id_vg => $url_bg) {
                foreach ($url_bg as $url_bg_vg => $bg) {
                    foreach ($bg as $bg_vg => $size) {
                        generate_indexArticle
                        ($videogames, $type_vg, $ref_id_vg, $url_bg_vg,$bg_vg, $size);
                    }
                }
            }
        }
    }
}
echo'</div>';

include('footer.php');
?>
</body>
</html>