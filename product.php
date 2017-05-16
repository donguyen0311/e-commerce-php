<?php
	// $banner = "Single";
	// $title = "Single";    
	// $views = ["banner.php", "content_product.php"];
	// include("include/layout.php");
	include_once("controllers/c_product.php");
	$c_san_pham = new C_product();
	$c_san_pham->Hien_thi_san_pham_theo_ma_san_pham();
?>