<?php
function createGameArticle($gameTitle,$category,$price,$ref_id,$productImg,$productURL) {
	echo "<a class=",$category," href=",$productURL,">";
	echo "<article class='product' id=",$ref_id,">";
	echo "<img class='product_img' src=",$productImg," alt='image'>";
	echo "<h3>$gameTitle</h3>";
	echo "<img class='product_platform' src='assets/imge/platform.png' alt='image'>";
	echo "<span class='product_price'>$price</span>";
	echo '</article>';
	echo '</a>';
}