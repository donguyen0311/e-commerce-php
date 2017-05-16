<?php
@session_start();  
include_once("models/m_loaisanpham.php");
/**
* 
*/
class C_loaisanpham
{
	public function Hien_thi_loai_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_loaisanpham = new M_loaisanpham();
			$so_luong_loai_san_pham = $m_loaisanpham->Dem_loai_san_pham();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_loai_san_pham, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$loaisanphams = $m_loaisanpham->Doc_loai_san_pham("", $vi_tri, $limit);

			$ten_loai_san_pham = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_loai_san_pham'])) {
					$ten_loai_san_pham = $_GET['ten_loai_san_pham'];
					$loaisanphams = $m_loaisanpham->Doc_loai_san_pham($ten_loai_san_pham);
					$paging = "";
				}		
			}

			$title = "Loại sản phẩm";
			$views = ['views/loaisanpham/v_loaisanpham.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_loai_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$m_loaisanpham = new M_loaisanpham();
			$loaisanphams = $m_loaisanpham->Doc_loai_san_pham();
			$mang_ten_loai_san_pham = array();
			foreach ($loaisanphams as $loaisanpham) {
				array_push($mang_ten_loai_san_pham, $loaisanpham->ten_loai_san_pham); 
			}
			 
			$ten_loai_san_pham = (!empty($_POST['ten_loai_san_pham'])) ? $_POST['ten_loai_san_pham'] : "";
			$mo_ta = (!empty($_POST['mo_ta'])) ? $_POST['mo_ta'] : "";
			$ma_loai_cha = (!empty($_POST['ma_loai_cha'])) ? $_POST['ma_loai_cha'] : "";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_san_pham']) || empty($_POST['mo_ta'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_san_pham'], $mang_ten_loai_san_pham)) { // kiểm tra xem tên loại bài viết đã có chưa
					echo "<script>window.alert('Tên loại sản phẩm đã tồn tại!')</script>";
				}
				else {
					$ten_loai_san_pham = $_POST['ten_loai_san_pham'];
					$mo_ta = $_POST['mo_ta'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ket_qua = $m_loaisanpham->Them_loai_san_pham($ten_loai_san_pham, $mo_ta, $ma_loai_cha);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=loaisanpham.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm loại bài viết";
			$views = ['views/loaisanpham/v_themloaisanpham.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_loai_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			if (!empty($_GET['ma_loai_san_pham'])) {
				$ma_loai_san_pham = $_GET['ma_loai_san_pham'];
			}
			else  {
				header("location: loaisanpham.php");
			}
			$m_loaisanpham = new M_loaisanpham();
			$loaisanpham = $m_loaisanpham->Doc_loai_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham);

			$loaisanphams = $m_loaisanpham->Doc_loai_san_pham();
			$mang_ten_loai_san_pham = array();
			foreach ($loaisanphams as $_loaisanpham) { 
				if ($_loaisanpham->ten_loai_san_pham != $loaisanpham->ten_loai_san_pham) { // đổ vào mảng tên loại bài viết nhưng chừa tên cần cập nhật ra
					array_push($mang_ten_loai_san_pham, $_loaisanpham->ten_loai_san_pham);
				}	 
			}

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_san_pham']) || empty($_POST['mo_ta']) || empty($_POST['ma_loai_san_pham'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_san_pham'], $mang_ten_loai_san_pham)) { // kiểm tra xem tên loại bài viết đã có chưa
					echo "<script>window.alert('Tên loại sản phẩm đã tồn tại!')</script>";
				}
				else {
					$ma_loai_san_pham = $_POST['ma_loai_san_pham'];
					$ten_loai_san_pham = $_POST['ten_loai_san_pham'];
					$mo_ta = $_POST['mo_ta'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ket_qua = $m_loaisanpham->Sua_loai_san_pham($ten_loai_san_pham, $mo_ta, $ma_loai_cha, $ma_loai_san_pham);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=loaisanpham.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa loại sản phẩm";
			$views = ['views/loaisanpham/v_sualoaisanpham.php']; 
			include("include/layout.php");
		}
		
	}
}
?>