<?php
	// $banner = "Phụ Kiện";
	// $title = "Phụ Kiện";    
	// $views = ["banner.php", "content_accessories.php"];
	// include("include/layout.php");
	include("controllers/c_accessories.php");
	$c_accessories = new C_accessories();
	$c_accessories->Hien_thi_san_pham_phu_kien();
?>