<?php
	// $title = "Trang Chủ";  
	// $views = ["banner_index.php", "content_index.php", "banner_discount.php"];
	// include("include/layout.php");
	include_once("controllers/c_index.php");
	$c_index = new C_index();
	$c_index->Hien_thi_san_pham();
?>