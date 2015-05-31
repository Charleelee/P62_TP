<?php include ('controller.php');
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