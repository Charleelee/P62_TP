<?php
/**
 * @param $gameTitle
 * @param $category
 * @param $price
 * @param $ref_id
 * @param $productImg
 * @param $productURL
 */
function generate_gameArticle($gameTitle,$category,$price,$ref_id,$productImg,$productURL) {
	echo "<a class=",$category," href=",$productURL,">";
	echo "<article class='game_product' id=",$ref_id,">";
	echo "<img class='product_img' src=",$productImg," alt='image'>";
	echo "<h3>$gameTitle</h3>";
	echo "<span class='product_price'>$price</span>";
	echo '</article>';
	echo '</a>';
}

function generate_indexArticle($gameTitle,$category,$ref_id,$productImg,$productURL,$size) {
	echo "<a class='$category $size' href=",$productURL,">";
	echo "<article class='product' id=",$ref_id,">";
	echo "<img class='product_img' src=",$productImg," alt='image'>";
	echo "<h3>$gameTitle</h3>";
	echo '</article>';
	echo '</a>';
}