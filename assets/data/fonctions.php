<?php

function createGameArticle($productURL, $gameTitle, $productImg, $price) {
	echo "<a href='$productURL'>";
	echo '<article class="product">';
	echo "<img class='product_img' src='$productImg' alt='image'>";
	echo "<h3>$gameTitle</h3>";
	echo "<img class='product_platform' src='assets/image/platform.png' alt='image'>";
	echo "<span class='product_price'>$price</span>";
	echo '</article';
	echo '</a>';
}