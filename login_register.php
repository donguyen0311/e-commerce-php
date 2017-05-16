<?php
@session_start(); 
include_once("models/m_khachhang.php"); 
include_once("models/m_dangkynhantin.php");
if (isset($_POST['dn_email']) && isset($_POST['dn_password'])) {
	$email = $_POST['dn_email'];
	$password = $_POST['dn_password'];
	$m_khachhang = new M_khachhang();
	$khach_hang = $m_khachhang->Kiem_tra_khach_hang($email, $password);
	if ($khach_hang) {
		$_SESSION['ten_khach_hang'] = $khach_hang->ten_khach_hang;
		$_SESSION['ma_khach_hang'] = $khach_hang->ma_khach_hang;
		die(json_encode(array('ten_khach_hang' => $khach_hang->ten_khach_hang)));
	}
	else {
		die(json_encode(array('error' => 'Email hoặc mật khẩu không chính xác')));
	}
}
if (isset($_POST['dk_email']) && isset($_POST['dk_password']) && isset($_POST['dk_re-password'])) {
	$email = $_POST['dk_email'];
	$password = $_POST['dk_password'];
	$re_password = $_POST['dk_re-password'];
	$m_khachhang = new M_khachhang();
	$arr_emails = $m_khachhang->Doc_email_khach_hang();
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die(json_encode(array('error' => 'Email không hợp lệ')));
	}
	if ($password != $re_password) {
		die(json_encode(array('error' => 'Password và Re-type Password không trùng khớp')));
	}
	foreach ($arr_emails as $arr_email) {
		if ($email == $arr_email->email) {
			die(json_encode(array('error' => 'Email đã tồn tại')));
		}
	}
	$khach_hang = $m_khachhang->Them_khach_hang($password, $email, 1, date("Y-m-d"), "None", "None", $email);
	if ($khach_hang) {
		die(json_encode(array('error' => 'Đăng ký thành công')));
	}
	else {
		die(json_encode(array('error' => 'Lỗi khi lưu trữ dữ liệu')));
	}
}
if (isset($_POST['email_nhan_tin'])) {
	$email = $_POST['email_nhan_tin'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die(json_encode(array('alert' => 'Email không hợp lệ !')));
	} else {
		$m_dangkynhantin = new M_dangkynhantin();
		$check = $m_dangkynhantin->Them_email_dang_ky_nhan_tin($email);
		if ($check) {
			die(json_encode(array('alert' => 'Đăng ký thành công !')));
		} else {
			die(json_encode(array('alert' => 'Đăng ký thất bại !')));
		}
		
	}
}
?>