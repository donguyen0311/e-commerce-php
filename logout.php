<?php
@session_start();  
if (isset($_SESSION['ten_khach_hang'])) {
	unset($_SESSION['ten_khach_hang']);
	unset($_SESSION['ma_khach_hang']);
	header("location: trang-chu");
}
?>