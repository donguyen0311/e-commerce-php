<?php
@session_start();
if(isset($_SESSION["ma_khach_hang"])) // Đăng ký hay đăng nhập
{
	include("controllers/c_dathang.php");
	$c_dat_hang=new C_dathang();
	$c_dat_hang->Xu_ly_thong_tin();
}
else // Xem giỏ hàng
{
	include("controllers/c_checkout.php");
	echo "<script>alert('Vui lòng đăng nhập')</script>";
	$c_checkout=new C_checkout();
	$c_checkout->Hien_thi_gio_hang();
}  

?>