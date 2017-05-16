<?php
@session_start();  
include_once("models/m_lienhe.php");
/**
* 
*/
class C_lienhe
{
	public function Hien_thi_lien_he() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {

			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_lienhe = new M_lienhe();
			$so_luong_lien_he = $m_lienhe->Dem_lien_he();

			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_lien_he, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$lienhes = $m_lienhe->Doc_lien_he("", $vi_tri, $limit);

			$trang_thai = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['trang_thai'])) {
					$trang_thai = $_GET['trang_thai'];
					$lienhes = $m_lienhe->Doc_lien_he($trang_thai);
					$paging = "";
				}		
			}

			$title = "Liên hệ";
			$views = ['views/lienhe/v_lienhe.php']; 
			include("include/layout.php");
		}
		
	}
	public function Hien_thi_chi_tiet_lien_he() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			if (!empty($_GET['ma_lien_he'])) {
				$ma_lien_he = $_GET['ma_lien_he'];
			}
			else  {
				header("location: lienhe.php");
			}
			$m_lienhe = new M_lienhe();
			$lienhe = $m_lienhe->Doc_lien_he_theo_ma_lien_he($ma_lien_he);

			$title = "Chi tiết bài viết";
			$views = ['views/lienhe/v_chitietlienhe.php']; 
			include("include/layout.php");
		}	
	}
}
?>