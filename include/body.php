<body>
<?php 
	include("header.php");

	include("menu.php");

	include("content.php"); // sản phẩm, banner, slider...

	include("coupons.php");

	include("footer.php");

	if (!isset($_SESSION['ten_khach_hang'])) {
		include("authentication.php");
	}
	
?>
</body>
</html>