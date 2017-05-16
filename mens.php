 <?php
	// $banner = "Men's Wear";
	// $title = "Men's Wear";   
	// $views = ["banner.php", "content_products.php"];
	// include("include/layout.php");
	include("controllers/c_mens.php");
	$c_mens = new C_mens();
	$c_mens->Hien_thi_san_pham_nam(); 
?>