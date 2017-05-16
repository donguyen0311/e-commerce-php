<?php
@session_start();  
include_once("models/m_loainguoidung.php");
/**
* 
*/
class C_loainguoidung
{
	public function Hien_thi_loai_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_loainguoidung = new M_loainguoidung();
			$so_luong_loai_nguoi_dung = $m_loainguoidung->Dem_loai_nguoi_dung();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_loai_nguoi_dung, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung("", $vi_tri, $limit);

			$ten_loai_nguoi_dung = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_loai_nguoi_dung'])) {
					$ten_loai_nguoi_dung = $_GET['ten_loai_nguoi_dung'];
					$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung($ten_loai_nguoi_dung);
					$paging = "";
				}		
			}

			$title = "Loại người dùng";
			$views = ['views/loainguoidung/v_loainguoidung.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_loai_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$m_loainguoidung = new M_loainguoidung();
			$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung();
			$mang_ten_loai_nguoi_dung = array();
			foreach ($loainguoidungs as $loainguoidung) {
				array_push($mang_ten_loai_nguoi_dung, $loainguoidung->ten_loai_nguoi_dung); 
			}
			 
			$ten_loai_nguoi_dung = (!empty($_POST['ten_loai_nguoi_dung'])) ? $_POST['ten_loai_nguoi_dung'] : "";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_nguoi_dung'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_nguoi_dung'], $mang_ten_loai_nguoi_dung)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Tên loại người dùng đã tồn tại!')</script>";
				}
				else {
					$ten_loai_nguoi_dung = $_POST['ten_loai_nguoi_dung'];
					$ket_qua = $m_loainguoidung->Them_loai_nguoi_dung($ten_loai_nguoi_dung);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=loainguoidung.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm loại người dùng";
			$views = ['views/loainguoidung/v_themloainguoidung.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_loai_nguoi_dung() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			if (!empty($_GET['ma_loai_nguoi_dung'])) {
				$ma_loai_nguoi_dung = $_GET['ma_loai_nguoi_dung'];
			}
			else  {
				header("location: loainguoidung.php");
			}
			$m_loainguoidung = new M_loainguoidung();
			$loainguoidung = $m_loainguoidung->Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung);

			$loainguoidungs = $m_loainguoidung->Doc_loai_nguoi_dung();
			$mang_ten_loai_nguoi_dung = array();
			foreach ($loainguoidungs as $_loainguoidung) { 
				if ($_loainguoidung->ten_loai_nguoi_dung != $loainguoidung->ten_loai_nguoi_dung) { // đổ vào mảng tên loại bài viết nhưng chừa tên cần cập nhật ra
					array_push($mang_ten_loai_nguoi_dung, $_loainguoidung->ten_loai_nguoi_dung);
				}	 
			}

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_nguoi_dung']) || empty($_POST['ma_loai_nguoi_dung'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_nguoi_dung'], $mang_ten_loai_nguoi_dung)) { // kiểm tra xem tên loại người dùng đã có chưa
					echo "<script>window.alert('Tên loại người dùng đã tồn tại!')</script>";
				}
				else {
					$ma_loai_nguoi_dung = $_POST['ma_loai_nguoi_dung'];
					$ten_loai_nguoi_dung = $_POST['ten_loai_nguoi_dung'];
					$ket_qua = $m_loainguoidung->Sua_loai_nguoi_dung($ten_loai_nguoi_dung, $ma_loai_nguoi_dung);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=loainguoidung.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa loại người dùng";
			$views = ['views/loainguoidung/v_sualoainguoidung.php']; 
			include("include/layout.php");
		}
		
	}
}
?>