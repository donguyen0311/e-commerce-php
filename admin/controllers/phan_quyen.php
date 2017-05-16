<?php  
@session_start();
include_once("models/m_user.php");
function check_quyen_truy_cap() {
	$m_user = new M_user();
	$user = $m_user->Doc_tai_khoan_theo_ma_nguoi_dung($_SESSION['id']);
	if ($user->ma_loai_nguoi_dung == 1 || $user->ma_loai_nguoi_dung == 8 || $user->ma_loai_nguoi_dung == 9) {
		return true;
	}
	return false;
}
function phan_quyen() {
	if(!check_quyen_truy_cap()) {
		echo "<script>alert('Bạn không có quyền truy cập chức năng này !')</script>";
		header("refresh:0;url= index.php");
	}
}
?>