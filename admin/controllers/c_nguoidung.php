<?php
@session_start();  
include_once("models/m_nguoidung.php");
/**
* 
*/
class C_nguoidung
{
	public function Hien_thi_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_nguoidung = new M_nguoidung();
			$so_luong_nguoi_dung = $m_nguoidung->Dem_nguoi_dung();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_nguoi_dung, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$nguoidungs = $m_nguoidung->Doc_nguoi_dung("", $vi_tri, $limit);

			$ho_ten = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ho_ten'])) {
					$ho_ten = $_GET['ho_ten'];
					$nguoidungs = $m_nguoidung->Doc_nguoi_dung($ho_ten);
					$paging = "";
				}		
			}

			$title = "Người dùng";
			$views = ['views/nguoidung/v_nguoidung.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$m_nguoidung = new M_nguoidung();
			$nguoidungs = $m_nguoidung->Doc_nguoi_dung();
			$mang_ten_dang_nhap = array();
			foreach ($nguoidungs as $nguoidung) {
				array_push($mang_ten_dang_nhap, $nguoidung->ten_dang_nhap); 
			}

			include_once("models/m_loainguoidung.php");
			$m_loainguoidung = new M_loainguoidung();
			$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung();

			$ma_loai_nguoi_dung = (!empty($_POST['ma_loai_nguoi_dung'])) ? $_POST['ma_loai_nguoi_dung'] : "";
			$ho_ten = (!empty($_POST['ho_ten'])) ? $_POST['ho_ten'] : "";
			$ten_dang_nhap = (!empty($_POST['ten_dang_nhap'])) ? $_POST['ten_dang_nhap'] : "";
			$mat_khau = (!empty($_POST['mat_khau'])) ? $_POST['mat_khau'] : "";
			$email = (!empty($_POST['email'])) ? $_POST['email'] : "";
			$active = (!empty($_POST['active'])) ? $_POST['active'] : "";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ma_loai_nguoi_dung']) || empty($_POST['ho_ten']) || empty($_POST['ten_dang_nhap']) || empty($_POST['mat_khau']) || empty($_POST['email'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_dang_nhap'], $mang_ten_dang_nhap)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Tên đăng nhập đã tồn tại!')</script>";
				}
				elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
					echo "<script>window.alert('Email không hợp lệ!')</script>";
				}
				else {
					$ma_loai_nguoi_dung = $_POST['ma_loai_nguoi_dung'];
					$ho_ten = $_POST['ho_ten'];
					$ten_dang_nhap = $_POST['ten_dang_nhap'];
					$mat_khau = $_POST['mat_khau'];
					$email = $_POST['email'];
					$ngay_dang_ky = date("Y-m-d h:i:s");
					$active = $_POST['active'];
					
					$ket_qua = $m_nguoidung->Them_nguoi_dung($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, $active);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=nguoidung.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm người dùng";
			$views = ['views/nguoidung/v_themnguoidung.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			if (!empty($_GET['ma_nguoi_dung'])) {
				$ma_nguoi_dung = $_GET['ma_nguoi_dung'];
			}
			else  {
				header("location: nguoidung.php");
			}
			$m_nguoidung = new M_nguoidung();
			$nguoidung = $m_nguoidung->Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung);

			$nguoidungs = $m_nguoidung->Doc_nguoi_dung();
			$mang_ten_dang_nhap = array();
			foreach ($nguoidungs as $_nguoidung) { 
				if ($_nguoidung->ten_dang_nhap != $nguoidung->ten_dang_nhap) { // đổ vào mảng tên đăng nhập nhưng chừa tên cần cập nhật ra
					array_push($mang_ten_dang_nhap, $_nguoidung->ten_dang_nhap);
				}	 
			}

			include_once("models/m_loainguoidung.php");
			$m_loainguoidung = new M_loainguoidung();
			$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung();

			if (isset($_POST['submit'])) {
				if (empty($_POST['ma_loai_nguoi_dung']) || empty($_POST['ho_ten']) || empty($_POST['ten_dang_nhap']) || empty($_POST['mat_khau']) || empty($_POST['email'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_dang_nhap'], $mang_ten_dang_nhap)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Tên đăng nhập đã tồn tại!')</script>";
				}
				elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
					echo "<script>window.alert('Email không hợp lệ!')</script>";
				}
				else {
					$ma_nguoi_dung = $_POST['ma_nguoi_dung'];
					$ma_loai_nguoi_dung = $_POST['ma_loai_nguoi_dung'];
					$ho_ten = $_POST['ho_ten'];
					$ten_dang_nhap = $_POST['ten_dang_nhap'];
					$mat_khau = $_POST['mat_khau'];
					$email = $_POST['email'];
					$active = $_POST['active'];

					$ket_qua = $m_nguoidung->Sua_nguoi_dung($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $active, $ma_nguoi_dung);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=nguoidung.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa người dùng";
			$views = ['views/nguoidung/v_suanguoidung.php']; 
			include("include/layout.php");
		}
		
	}
}
?>