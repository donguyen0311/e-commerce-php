<?php
@session_start();  
include_once("models/m_hoadon.php");
/**
* 
*/
class C_hoadon
{
	public function Hien_thi_hoa_don() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_hoadon = new M_hoadon();
			$so_luong_hoa_don = $m_hoadon->Dem_hoa_don();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_hoa_don, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$hoadons = $m_hoadon->Doc_hoa_don("", $vi_tri, $limit);

			$trang_thai = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['trang_thai'])) {
					$trang_thai = $_GET['trang_thai'];
					$hoadons = $m_hoadon->Doc_hoa_don($trang_thai);
					$paging = "";
				}		
			}

			$title = "Hóa đơn";
			$views = ['views/hoadon/v_hoadon.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_chi_tiet_hoa_don() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			if (!empty($_GET['ma_hoa_don'])) {
				$ma_hoa_don = $_GET['ma_hoa_don'];
			}
			else  {
				header("location: hoadon.php");
			}
			$m_hoadon = new M_hoadon();
			$hoadon = $m_hoadon->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
			$chitiet = $m_hoadon->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);

			$title = "Chi tiết hóa đơn";
			$views = ['views/hoadon/v_chitiethoadon.php']; 
			include("include/layout.php");
		}
		
	}
	// public function Hien_thi_them_hoa_don() {

	// 	if (!isset($_SESSION['fullname'])) {
	// 		header("location: login.php");
	// 	} 
	// 	else {

	// 		$m_hoadon = new M_hoadon();
	// 		$hoadons = $m_hoadon->Doc_hoa_don();
	// 		$mang_trang_thai = array();
	// 		foreach ($hoadons as $hoadon) {
	// 			array_push($mang_trang_thai, $hoadon->trang_thai); 
	// 		}
			
	// 		include("models/m_loaihoadon.php");
	// 		$m_loaihoadon = new M_loaihoadon();
	// 		$loaihoadons = $m_loaihoadon->Doc_loai_hoa_don();

	// 		$ma_loai_hoa_don = (!empty($_POST['ma_loai_hoa_don'])) ? $_POST['ma_loai_hoa_don'] : "";
	// 		$trang_thai = (!empty($_POST['trang_thai'])) ? $_POST['trang_thai'] : "";
	// 		$noi_dung_tom_tat = (!empty($_POST['noi_dung_tom_tat'])) ? $_POST['noi_dung_tom_tat'] : "";
	// 		$noi_dung_chi_tiet = (!empty($_POST['noi_dung_chi_tiet'])) ? $_POST['noi_dung_chi_tiet'] : "";
	// 		$ngay_xuat_ban = (!empty($_POST['ngay_xuat_ban'])) ? $_POST['ngay_xuat_ban'] : "";
	// 		$ngay_het_han = (!empty($_POST['ngay_het_han'])) ? $_POST['ngay_het_han'] : "";
	// 		$xuat_ban = (!empty($_POST['xuat_ban'])) ? $_POST['xuat_ban'] : "";


	// 		if (isset($_POST['submit'])) {
	// 			if (empty($_POST['trang_thai']) || empty($_POST['noi_dung_tom_tat']) || empty($_POST['noi_dung_chi_tiet']) || empty($_POST['ngay_xuat_ban']) || empty($_POST['ngay_het_han']) || empty($_POST['xuat_ban'])) {
	// 				echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
	// 			}
	// 			elseif (in_array($_POST['trang_thai'], $mang_trang_thai)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
	// 				echo "<script>window.alert('Tên tiêu đề đã tồn tại!')</script>";
	// 			}
	// 			elseif (strtotime($_POST['ngay_xuat_ban']) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
	// 				echo "<script>window.alert('Ngày xuất bản không được lớn hơn ngày hết bạn!')</script>";
	// 			}
	// 			elseif (strtotime(date("Y-m-d h:i:s")) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
	// 				echo "<script>window.alert('Ngày hết bạn phải lớn hơn hôm nay!')</script>";
	// 			}
	// 			else {
	// 				$ma_loai_hoa_don = $_POST['ma_loai_hoa_don'];
	// 				$ma_nguoi_dung = $_SESSION['id'];
	// 				$trang_thai = $_POST['trang_thai'];
	// 				$noi_dung_tom_tat = $_POST['noi_dung_tom_tat'];
	// 				$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
	// 				$ngay_gui_bai = date("Y-m-d h:i:s");
	// 				$ngay_xuat_ban = $_POST['ngay_xuat_ban'];
	// 				$ngay_het_han = $_POST['ngay_het_han'];
	// 				$xuat_ban = $_POST['xuat_ban'];

	// 				$ket_qua = $m_hoadon->Them_hoa_don($ma_loai_hoa_don, $ma_nguoi_dung, $trang_thai, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $xuat_ban);
	// 				if ($ket_qua) {
	// 					echo "<script>window.alert('Thêm thành công!')</script>";
	// 					header("Refresh: 1; url=hoadon.php");
	// 				}
	// 				else {
	// 					echo "<script>window.alert('Thêm không thành công!')</script>";
	// 				}
	// 			}
	// 		}

	// 		$title = "Thêm bài viết";
	// 		$views = ['views/hoadon/v_themhoadon.php']; 
	// 		include("include/layout.php");
	// 	}
		
	// }
	// public function Hien_thi_sua_hoa_don() {

	// 	if (!isset($_SESSION['fullname'])) {
	// 		header("location: login.php");
	// 	} 
	// 	else {

	// 		if (!empty($_GET['ma_hoa_don'])) {
	// 			$ma_hoa_don = $_GET['ma_hoa_don'];
	// 		}
	// 		else  {
	// 			header("location: hoadon.php");
	// 		}
	// 		$m_hoadon = new M_hoadon();
	// 		$hoadon = $m_hoadon->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);

	// 		$hoadons = $m_hoadon->Doc_hoa_don();
	// 		$mang_trang_thai = array();
	// 		foreach ($hoadons as $_hoadon) { 
	// 			if ($_hoadon->trang_thai != $hoadon->trang_thai) { // đổ vào mảng tiêu đề nhưng chừa tên cần cập nhật ra
	// 				array_push($mang_trang_thai, $_hoadon->trang_thai);
	// 			}	 
	// 		}
			
	// 		include("models/m_loaihoadon.php");
	// 		$m_loaihoadon = new M_loaihoadon();
	// 		$loaihoadons = $m_loaihoadon->Doc_loai_hoa_don();

	// 		if (isset($_POST['submit'])) {
	// 			if (empty($_POST['trang_thai']) || empty($_POST['noi_dung_tom_tat']) || empty($_POST['noi_dung_chi_tiet']) || empty($_POST['ngay_xuat_ban']) || empty($_POST['ngay_het_han']) || empty($_POST['xuat_ban']) || empty($_POST['ma_hoa_don'])) {
	// 				echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
	// 			}
	// 			elseif (in_array($_POST['trang_thai'], $mang_trang_thai)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
	// 				echo "<script>window.alert('Tên tiêu đề đã tồn tại!')</script>";
	// 			}
	// 			elseif (strtotime($_POST['ngay_xuat_ban']) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
	// 				echo "<script>window.alert('Ngày xuất bản không được lớn hơn ngày hết bạn!')</script>";
	// 			}
	// 			elseif (strtotime($hoadon->ngay_gui_bai) > strtotime($_POST['ngay_het_han'])) { // kiểm tra thời gian
	// 				echo "<script>window.alert('Ngày hết bạn phải lớn hơn hôm nay!')</script>";
	// 			}
	// 			else {
	// 				$ma_hoa_don = $_POST['ma_hoa_don'];
	// 				$ma_loai_hoa_don = $_POST['ma_loai_hoa_don'];
	// 				$trang_thai = $_POST['trang_thai'];
	// 				$noi_dung_tom_tat = $_POST['noi_dung_tom_tat'];
	// 				$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
	// 				$ngay_xuat_ban = $_POST['ngay_xuat_ban'];
	// 				$ngay_het_han = $_POST['ngay_het_han'];
	// 				$xuat_ban = $_POST['xuat_ban'];

	// 				$ket_qua = $m_hoadon->Sua_hoa_don($ma_loai_hoa_don, $trang_thai, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_hoa_don);
	// 				if ($ket_qua) {
	// 					echo "<script>window.alert('Cập nhật thành công!')</script>";
	// 					header("Refresh: 0; url=hoadon.php");
	// 				}
	// 				else {
	// 					echo "<script>window.alert('Cập nhật không thành công!')</script>";
	// 				}
	// 			}
	// 		}

	// 		$title = "Sửa bài viết";
	// 		$views = ['views/hoadon/v_suahoadon.php']; 
	// 		include("include/layout.php");
	// 	}
		
	// }
}
?>