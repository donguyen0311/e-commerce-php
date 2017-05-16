<?php 
	// $banner = "Women's Wear";
	// $title = "Women's Wear";   
	// $views = ["banner.php", "content_womens.php"];
	// include("include/layout.php");
	include("controllers/c_womens.php");
	$c_womens = new C_womens();
	$c_womens->Hien_thi_san_pham_nu();
?>