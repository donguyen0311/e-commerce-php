<?php
@session_start();  
include_once("models/m_sanpham.php");
/**
* 
*/
class C_sanpham
{
	public function Hien_thi_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_sanpham = new M_sanpham();
			$so_luong_san_pham = $m_sanpham->Dem_san_pham();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_san_pham, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$sanphams = $m_sanpham->Doc_san_pham("", $vi_tri, $limit);

			$ten_san_pham = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_san_pham'])) {
					$ten_san_pham = $_GET['ten_san_pham'];
					$sanphams = $m_sanpham->Doc_san_pham($ten_san_pham);
					$paging = "";
				}		
			}

			$title = "Sản phẩm";
			$views = ['views/sanpham/v_sanpham.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_san_pham_khuyen_mai() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_sanpham = new M_sanpham();
			$so_luong_san_pham = $m_sanpham->Dem_san_pham_khuyen_mai();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_san_pham, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$sanphams = $m_sanpham->Doc_san_pham_khuyen_mai("", $vi_tri, $limit);

			$ten_san_pham = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['ten_san_pham'])) {
					$ten_san_pham = $_GET['ten_san_pham'];
					$sanphams = $m_sanpham->Doc_san_pham_khuyen_mai($ten_san_pham);
					$paging = "";
				}		
			}

			$title = "Sản phẩm khuyến mãi";
			$views = ['views/sanpham/v_sanphamkhuyenmai.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_chi_tiet_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			if (!empty($_GET['ma_san_pham'])) {
				$ma_san_pham = $_GET['ma_san_pham'];
			}
			else  {
				header("location: sanpham.php");
			}
			$m_sanpham = new M_sanpham();
			$sanpham = $m_sanpham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);

			$title = "Chi tiết sản phẩm";
			$views = ['views/sanpham/v_chitietsanpham.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_them_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$m_sanpham = new M_sanpham();
			$sanphams = $m_sanpham->Doc_san_pham();
			$mang_ten_san_pham = array();
			$id_san_pham_se_them = 0;

			foreach ($sanphams as $sanpham) {
				array_push($mang_ten_san_pham, $sanpham->ten_san_pham);
			}

			// tìm id cuối
			$dems = $m_sanpham->Dem_ma_san_pham_cuoi_cung();

			foreach ($dems as $dem) {
				$id_san_pham_se_them = $dem->ma_san_pham; 
			} 

			include("models/m_loaisanpham.php");
			$m_loaisanpham = new M_loaisanpham();
			$loaisanphams = $m_loaisanpham->Doc_loai_san_pham();

			$ten_san_pham = (!empty($_POST['ten_san_pham'])) ? $_POST['ten_san_pham'] : "";
			$ma_loai_cha = (!empty($_POST['ma_loai_cha'])) ? $_POST['ma_loai_cha'] : "";
			$ma_loai = (!empty($_POST['ma_loai'])) ? $_POST['ma_loai'] : "";
			$mo_ta_tom_tat = (!empty($_POST['mo_ta_tom_tat'])) ? $_POST['mo_ta_tom_tat'] : "";
			$mo_ta_chi_tiet = (!empty($_POST['mo_ta_chi_tiet'])) ? $_POST['mo_ta_chi_tiet'] : "";
			$don_gia = (!empty($_POST['don_gia'])) ? $_POST['don_gia'] : "";
			$san_pham_moi = (isset($_POST['san_pham_moi'])) ? 1 : 0;


			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_san_pham']) || empty($_POST['ma_loai_cha']) || empty($_POST['ma_loai']) || empty($_POST['mo_ta_tom_tat']) || empty($_POST['mo_ta_chi_tiet']) || empty($_POST['don_gia'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_san_pham'], $mang_ten_san_pham)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
					echo "<script>window.alert('Tên sản phẩm đã tồn tại!')</script>";
				}
				else {
					$ten_san_pham = $_POST['ten_san_pham'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ma_loai = $_POST['ma_loai'];
					$mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
					$mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
					$don_gia = $_POST['don_gia'];
					$hinh = ($_FILES['hinh']['error'] == 0) ? $_FILES['hinh']['name'] : "no-image.jpg";
					$san_pham_moi = (isset($_POST['san_pham_moi'])) ? 1 : 0;
					$ngay_tao = date("Y-m-d h:i:s");

					$ket_qua = $m_sanpham->Them_san_pham($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $ngay_tao);
					if ($ket_qua) {
						echo "<script>window.alert('Thêm thành công!')</script>";
						if ($_FILES['hinh']['error'] == 0) {
							if (move_uploaded_file($_FILES['hinh']['tmp_name'], "../images/hinh_san_pham/" . $hinh)) {
								echo "<script>window.alert('Tải hình lên thành công!')</script>";
							}
							else {
								echo "<script>window.alert('Tải hình lên không thành công!')</script>";
							}
						}
						header("Refresh: 1; url=sanpham.php");
					}
					else {
						echo "<script>window.alert('Thêm không thành công!')</script>";
					}
				}
			}

			$title = "Thêm sản phẩm";
			$views = ['views/sanpham/v_themsanpham.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_sua_san_pham() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			if (!empty($_GET['ma_san_pham'])) {
				$ma_san_pham = $_GET['ma_san_pham'];
			}
			else  {
				header("location: sanpham.php");
			}
			$m_sanpham = new M_sanpham();
			$sanpham = $m_sanpham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);

			$sanphams = $m_sanpham->Doc_san_pham();
			$mang_ten_san_pham = array();
			foreach ($sanphams as $_sanpham) { 
				if ($_sanpham->ten_san_pham != $sanpham->ten_san_pham) { // đổ vào mảng tiêu đề nhưng chừa tên cần cập nhật ra
					array_push($mang_ten_san_pham, $_sanpham->ten_san_pham);
				}	 
			}
			
			include("models/m_loaisanpham.php");
			$m_loaisanpham = new M_loaisanpham();
			$loaisanphams = $m_loaisanpham->Doc_loai_san_pham();

			if (isset($_POST['submit'])) {
				if (empty($_POST['ten_san_pham']) || empty($_POST['ma_loai_cha']) || empty($_POST['ma_loai']) || empty($_POST['mo_ta_tom_tat']) || empty($_POST['mo_ta_chi_tiet']) || empty($_POST['don_gia'])) {
					echo "<script>window.alert('Vui lòng nhập đầy đủ các trường!')</script>";	
				}
				elseif (in_array($_POST['ten_san_pham'], $mang_ten_san_pham)) { // kiểm tra xem tên tiêu đề dùng đã có chưa
					echo "<script>window.alert('Tên sản phẩm đã tồn tại!')</script>";
				}
				else {
					$ma_san_pham = $_POST['ma_san_pham'];
					$ten_san_pham = $_POST['ten_san_pham'];
					$ma_loai_cha = $_POST['ma_loai_cha'];
					$ma_loai = $_POST['ma_loai'];
					$mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
					$mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
					$don_gia = $_POST['don_gia'];
					$hinh = ($_FILES['hinh']['error'] == 0 && !empty($_FILES['hinh'])) ? $_FILES['hinh']['name'] : $sanpham->hinh;
					$san_pham_moi = (isset($_POST['san_pham_moi'])) ? 1 : 0;

					$ket_qua = $m_sanpham->Sua_san_pham($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $ma_san_pham);
					if ($ket_qua) {
						echo "<script>window.alert('Cập nhật thành công!')</script>";
						if ($_FILES['hinh']['error'] == 0) {
							if (move_uploaded_file($_FILES['hinh']['tmp_name'], "../images/hinh_san_pham/" . $hinh)) {
								echo "<script>window.alert('Tải hình lên thành công!')</script>";
							}
							else {
								echo "<script>window.alert('Tải hình lên không thành công!')</script>";
							}
						}
						header("Refresh: 1; url=sanpham.php");
					}
					else {
						echo "<script>window.alert('Cập nhật không thành công!')</script>";
					}
				}
			}

			$title = "Sửa sản phẩm";
			$views = ['views/sanpham/v_suasanpham.php']; 
			include("include/layout.php");
		}
		
	}
}
?>