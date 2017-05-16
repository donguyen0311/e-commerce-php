<?php
@session_start();  
include_once("models/m_khachhang.php");
/**
* 
*/
class C_khachhang
{
	public function Hien_thi_khach_hang() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_khachhang = new M_khachhang();
			$so_luong_khach_hang = $m_khachhang->Dem_khach_hang();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_khach_hang, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$khachhangs = $m_khachhang->Doc_khach_hang("", $vi_tri, $limit);

			$ten_khach_hang = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_khach_hang'])) {
					$ten_khach_hang = $_GET['ten_khach_hang'];
					$khachhangs = $m_khachhang->Doc_khach_hang($ten_khach_hang);
					$paging = "";
				}		
			}

			$title = "Khách hàng";
			$views = ['views/khachhang/v_khachhang.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_khach_hang() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			$m_khachhang = new M_khachhang();
			$khachhangs = $m_khachhang->Doc_khach_hang();
			$mang_email = array();
			foreach ($khachhangs as $khachhang) {
				array_push($mang_email, $khachhang->email); 
			}
			
			$mat_khau = (!empty($_POST['mat_khau'])) ? $_POST['mat_khau'] : "";
			$ten_khach_hang = (!empty($_POST['ten_khach_hang'])) ? $_POST['ten_khach_hang'] : "";
			$phai = (!empty($_POST['phai'])) ? $_POST['phai'] : "";
			$ngay_sinh = (!empty($_POST['ngay_sinh'])) ? $_POST['ngay_sinh'] : "";
			$dia_chi = (!empty($_POST['dia_chi'])) ? $_POST['dia_chi'] : "";
			$dien_thoai = (!empty($_POST['dien_thoai'])) ? $_POST['dien_thoai'] : "";
			$email = (!empty($_POST['email'])) ? $_POST['email'] : "";

			$test_phone = "/^[0]{1}[0-9]{9,11}$/";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_khach_hang']) || empty($_POST['mat_khau']) || empty($_POST['ngay_sinh']) || empty($_POST['dia_chi']) || empty($_POST['dien_thoai']) || empty($_POST['email'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['email'], $mang_email)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Email đã tồn tại!')</script>";
				}
				elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
					echo "<script>window.alert('Email không hợp lệ!')</script>";
				}
				elseif (!preg_match($test_phone, $_POST['dien_thoai'])) {
					echo "<script>window.alert('Số điện thoại không hợp lệ!')</script>";
				}
				else {
					$mat_khau = $_POST['mat_khau'];
					$ten_khach_hang = $_POST['ten_khach_hang'];
					$phai = $_POST['phai'];
					$ngay_sinh = $_POST['ngay_sinh'];
					$dia_chi = $_POST['dia_chi'];
					$dien_thoai = $_POST['dien_thoai'];
					$email = $_POST['email'];
					$ket_qua = $m_khachhang->Them_khach_hang($mat_khau, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=khachhang.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm khách hàng";
			$views = ['views/khachhang/v_themkhachhang.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_khach_hang() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			if (!empty($_GET['ma_khach_hang'])) {
				$ma_khach_hang = $_GET['ma_khach_hang'];
			}
			else  {
				header("location: khachhang.php");
			}
			$m_khachhang = new M_khachhang();
			$khachhang = $m_khachhang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);

			$khachhangs = $m_khachhang->Doc_khach_hang();
			$mang_email = array();
			foreach ($khachhangs as $_khachhang) { 
				if ($_khachhang->email != $khachhang->email) { // đổ vào mảng email nhưng chừa tên cần cập nhật ra
					array_push($mang_email, $_khachhang->email);
				}	 
			}

			$test_phone = "/^[0]{1}[0-9]{9,11}$/";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_khach_hang']) || empty($_POST['mat_khau']) || empty($_POST['ngay_sinh']) || empty($_POST['dia_chi']) || empty($_POST['dien_thoai']) || empty($_POST['email']) || empty($_POST['ma_khach_hang'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['email'], $mang_email)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Email đã tồn tại!')</script>";
				}
				elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
					echo "<script>window.alert('Email không hợp lệ!')</script>";
				}
				elseif (!preg_match($test_phone, $_POST['dien_thoai'])) {
					echo "<script>window.alert('Số điện thoại không hợp lệ!')</script>";
				}
				else {
					$ma_khach_hang = $_POST['ma_khach_hang'];
					$mat_khau = $_POST['mat_khau'];
					$ten_khach_hang = $_POST['ten_khach_hang'];
					$phai = $_POST['phai'];
					$ngay_sinh = $_POST['ngay_sinh'];
					$dia_chi = $_POST['dia_chi'];
					$dien_thoai = $_POST['dien_thoai'];
					$email = $_POST['email'];
					$ket_qua = $m_khachhang->Sua_khach_hang($mat_khau, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ma_khach_hang);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=khachhang.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa khách hàng";
			$views = ['views/khachhang/v_suakhachhang.php']; 
			include("include/layout.php");
		}
		
	}
}
?>