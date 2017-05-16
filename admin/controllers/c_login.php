<?php
@session_start();  
include_once("models/m_user.php");
/**
* 
*/
class C_login
{
	public function Hien_thi_dang_nhap() {

		$username = $password = "";
		$error = "";
		$check = true;
		if (isset($_POST['submit'])) {
			if (empty($_POST['username']) || empty($_POST['password'])) {
				$error = "<script>alert('Thông tin đăng nhập không hợp lệ !')</script>";
				$check = false;
			}
			if ($check) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$error = $this->Kiem_tra_dang_nhap($username, $password);
			}
		}
		if (isset($_SESSION['fullname'])) {
			header("location: bang-dieu-khien");
		}

		$title = "Đăng Nhập";
		include("views/login/v_login.php");
		
	}
	public function Thoat_dang_nhap() {
		
		session_destroy();
		header("location: dang-nhap");
	}
	public function Kiem_tra_dang_nhap($ten_dang_nhap, $mat_khau) {
		$m_user = new M_user();
		$user = $m_user->Doc_tai_khoan_theo_ten_dang_nhap_mat_khau($ten_dang_nhap, $mat_khau); // Cập nhật thời gian đăng nhập
		if (!empty($user)) {
			$thoi_gian = date("Y/m/d H:i:s");
			$m_user->Cap_nhat_lan_dang_nhap_cuoi($thoi_gian ,$user->ten_dang_nhap);
			$_SESSION['fullname'] = $user->ho_ten;
			$_SESSION['username'] = $user->ten_dang_nhap;
			$_SESSION['id'] = $user->ma_nguoi_dung;
			$_SESSION['loi_chao'] = 0;
			return "";
		}
		else {
			return "<script>alert('Tài khoản hoặc mật khẩu không đúng !')</script>";
		}
	}
}
?>
