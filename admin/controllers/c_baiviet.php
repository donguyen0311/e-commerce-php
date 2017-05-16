<?php
@session_start();  
include_once("models/m_baiviet.php");
/**
* 
*/
class C_baiviet
{
	public function Hien_thi_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_baiviet = new M_baiviet();
			$so_luong_bai_viet = $m_baiviet->Dem_bai_viet();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_bai_viet, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$baiviets = $m_baiviet->Doc_bai_viet("", $vi_tri, $limit);

			$tieu_de = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['tieu_de'])) {
					$tieu_de = $_GET['tieu_de'];
					$baiviets = $m_baiviet->Doc_bai_viet($tieu_de);
					$paging = "";
				}		
			}

			$title = "Bài viết";
			$views = ['views/baiviet/v_baiviet.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_chi_tiet_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			if (!empty($_GET['ma_bai_viet'])) {
				$ma_bai_viet = $_GET['ma_bai_viet'];
			}
			else  {
				header("location: baiviet.php");
			}
			$m_baiviet = new M_baiviet();
			$baiviet = $m_baiviet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);

			$title = "Chi tiết bài viết";
			$views = ['views/baiviet/v_chitietbaiviet.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			$m_baiviet = new M_baiviet();
			$baiviets = $m_baiviet->Doc_bai_viet();
			$mang_tieu_de = array();
			foreach ($baiviets as $baiviet) {
				array_push($mang_tieu_de, $baiviet->tieu_de); 
			}
			
			include("models/m_loaibaiviet.php");
			$m_loaibaiviet = new M_loaibaiviet();
			$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet();

			$ma_loai_bai_viet = (!empty($_POST['ma_loai_bai_viet'])) ? $_POST['ma_loai_bai_viet'] : "";
			$tieu_de = (!empty($_POST['tieu_de'])) ? $_POST['tieu_de'] : "";
			$noi_dung_tom_tat = (!empty($_POST['noi_dung_tom_tat'])) ? $_POST['noi_dung_tom_tat'] : "";
			$noi_dung_chi_tiet = (!empty($_POST['noi_dung_chi_tiet'])) ? $_POST['noi_dung_chi_tiet'] : "";
			$ngay_xuat_ban = (!empty($_POST['ngay_xuat_ban'])) ? $_POST['ngay_xuat_ban'] : "";
			$ngay_het_han = (!empty($_POST['ngay_het_han'])) ? $_POST['ngay_het_han'] : "";
			$xuat_ban = (!empty($_POST['xuat_ban'])) ? $_POST['xuat_ban'] : "";


			if (isset($_POST['submit'])) {
				if (empty($_POST['tieu_de']) || empty($_POST['noi_dung_tom_tat']) || empty($_POST['noi_dung_chi_tiet']) || empty($_POST['ngay_xuat_ban']) || empty($_POST['ngay_het_han']) || empty($_POST['xuat_ban'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['tieu_de'], $mang_tieu_de)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
					echo "<script>window.alert('Tên tiêu đề đã tồn tại!')</script>";
				}
				elseif (strtotime($_POST['ngay_xuat_ban']) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
					echo "<script>window.alert('Ngày xuất bản không được lớn hơn ngày hết bạn!')</script>";
				}
				elseif (strtotime(date("Y-m-d h:i:s")) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
					echo "<script>window.alert('Ngày hết bạn phải lớn hơn hôm nay!')</script>";
				}
				else {
					$ma_loai_bai_viet = $_POST['ma_loai_bai_viet'];
					$ma_nguoi_dung = $_SESSION['id'];
					$tieu_de = $_POST['tieu_de'];
					$noi_dung_tom_tat = $_POST['noi_dung_tom_tat'];
					$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
					$ngay_gui_bai = date("Y-m-d h:i:s");
					$ngay_xuat_ban = $_POST['ngay_xuat_ban'];
					$ngay_het_han = $_POST['ngay_het_han'];
					$xuat_ban = $_POST['xuat_ban'];

					$ket_qua = $m_baiviet->Them_bai_viet($ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $xuat_ban);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						header("Refresh: 1; url=baiviet.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm bài viết";
			$views = ['views/baiviet/v_thembaiviet.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_bai_viet() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			if (!empty($_GET['ma_bai_viet'])) {
				$ma_bai_viet = $_GET['ma_bai_viet'];
			}
			else  {
				header("location: baiviet.php");
			}
			$m_baiviet = new M_baiviet();
			$baiviet = $m_baiviet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);

			$baiviets = $m_baiviet->Doc_bai_viet();
			$mang_tieu_de = array();
			foreach ($baiviets as $_baiviet) { 
				if ($_baiviet->tieu_de != $baiviet->tieu_de) { // đổ vào mảng tiêu đề nhưng chừa tên cần cập nhật ra
					array_push($mang_tieu_de, $_baiviet->tieu_de);
				}	 
			}
			
			include("models/m_loaibaiviet.php");
			$m_loaibaiviet = new M_loaibaiviet();
			$loaibaiviets = $m_loaibaiviet->Doc_loai_bai_viet();

			if (isset($_POST['submit'])) {
				if (empty($_POST['tieu_de']) || empty($_POST['noi_dung_tom_tat']) || empty($_POST['noi_dung_chi_tiet']) || empty($_POST['ngay_xuat_ban']) || empty($_POST['ngay_het_han']) || empty($_POST['xuat_ban']) || empty($_POST['ma_bai_viet'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['tieu_de'], $mang_tieu_de)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
					echo "<script>window.alert('Tên tiêu đề đã tồn tại!')</script>";
				}
				elseif (strtotime($_POST['ngay_xuat_ban']) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
					echo "<script>window.alert('Ngày xuất bản không được lớn hơn ngày hết bạn!')</script>";
				}
				elseif (strtotime($baiviet->ngay_gui_bai) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
					echo "<script>window.alert('Ngày hết bạn phải lớn hơn hôm nay!')</script>";
				}
				else {
					$ma_bai_viet = $_POST['ma_bai_viet'];
					$ma_loai_bai_viet = $_POST['ma_loai_bai_viet'];
					$tieu_de = $_POST['tieu_de'];
					$noi_dung_tom_tat = $_POST['noi_dung_tom_tat'];
					$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
					$ngay_xuat_ban = $_POST['ngay_xuat_ban'];
					$ngay_het_han = $_POST['ngay_het_han'];
					$xuat_ban = $_POST['xuat_ban'];

					$ket_qua = $m_baiviet->Sua_bai_viet($ma_loai_bai_viet, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_bai_viet);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						header("Refresh: 0; url=baiviet.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa bài viết";
			$views = ['views/baiviet/v_suabaiviet.php']; 
			include("include/layout.php");
		}
		
	}
}
?>