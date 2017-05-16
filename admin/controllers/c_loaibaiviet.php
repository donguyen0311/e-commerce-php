<?php
@session_start();  
include_once("models/m_loaibaiviet.php");
/**
* 
*/
class C_loaibaiviet
{
	public function Hien_thi_loai_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_loaibaiviet = new M_loaibaiviet();
			$so_luong_loai_bai_viet = $m_loaibaiviet->Dem_loai_bai_viet();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_loai_bai_viet, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet("", $vi_tri, $limit);

			$ten_loai_bai_viet = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_loai_bai_viet'])) {
					$ten_loai_bai_viet = $_GET['ten_loai_bai_viet'];
					$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet($ten_loai_bai_viet);
					$paging = "";
				}		
			}

			$title = "Loại bài viết";
			$views = ['views/loaibaiviet/v_loaibaiviet.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_loai_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			$m_loaibaiviet = new M_loaibaiviet();
			$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet();
			$mang_ten_loai_bai_viet = array();
			foreach ($loaibaiviets as $loaibaiviet) {
				array_push($mang_ten_loai_bai_viet, $loaibaiviet->ten_loai_bai_viet); 
			}
			 
			$ten_loai_bai_viet = (!empty($_POST['ten_loai_bai_viet'])) ? $_POST['ten_loai_bai_viet'] : "";
			$mo_ta = (!empty($_POST['mo_ta'])) ? $_POST['mo_ta'] : "";
			$ma_loai_cha = (!empty($_POST['ma_loai_cha'])) ? $_POST['ma_loai_cha'] : "";

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_bai_viet']) || empty($_POST['mo_ta'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_bai_viet'], $mang_ten_loai_bai_viet)) { // kiểm tra xem tên loại bài viết đã có chưa
					echo "<script>window.alert('Tên loại bài viết đã tồn tại!')</script>";
				}
				else {
					$ten_loai_bai_viet = $_POST['ten_loai_bai_viet'];
					$mo_ta = $_POST['mo_ta'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ket_qua = $m_loaibaiviet->Them_loai_bai_viet($ten_loai_bai_viet, $mo_ta, $ma_loai_cha);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=loaibaiviet.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm loại bài viết";
			$views = ['views/loaibaiviet/v_themloaibaiviet.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_loai_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			include_once("phan_quyen.php");
			phan_quyen();
			if (!empty($_GET['ma_loai_bai_viet'])) {
				$ma_loai_bai_viet = $_GET['ma_loai_bai_viet'];
			}
			else  {
				header("location: loaibaiviet.php");
			}
			$m_loaibaiviet = new M_loaibaiviet();
			$loaibaiviet = $m_loaibaiviet->Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet);

			$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet();
			$mang_ten_loai_bai_viet = array();
			foreach ($loaibaiviets as $_loaibaiviet) { 
				if ($_loaibaiviet->ten_loai_bai_viet != $loaibaiviet->ten_loai_bai_viet) { // đổ vào mảng tên loại bài viết nhưng chừa tên cần cập nhật ra
					array_push($mang_ten_loai_bai_viet, $_loaibaiviet->ten_loai_bai_viet);
				}	 
			}

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_loai_bai_viet']) || empty($_POST['mo_ta']) || empty($_POST['ma_loai_bai_viet'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_loai_bai_viet'], $mang_ten_loai_bai_viet)) { // kiểm tra xem tên loại bài viết đã có chưa
					echo "<script>window.alert('Tên loại bài viết đã tồn tại!')</script>";
				}
				else {
					$ma_loai_bai_viet = $_POST['ma_loai_bai_viet'];
					$ten_loai_bai_viet = $_POST['ten_loai_bai_viet'];
					$mo_ta = $_POST['mo_ta'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ket_qua = $m_loaibaiviet->Sua_loai_bai_viet($ten_loai_bai_viet, $mo_ta, $ma_loai_cha, $ma_loai_bai_viet);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=loaibaiviet.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa loại bài viết";
			$views = ['views/loaibaiviet/v_sualoaibaiviet.php']; 
			include("include/layout.php");
		}
		
	}
}
?>