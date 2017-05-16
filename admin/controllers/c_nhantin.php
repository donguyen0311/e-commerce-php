<?php
@session_start();  
include_once("models/m_nhantin.php");
/**
* 
*/
class C_nhantin
{
	public function Hien_thi_nhan_tin() {

		if (!isset($_SESSION['fullname'])) {
			header("location: login.php");
		} 
		else {
			$limit = 10;
			$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 0;

			$m_nhantin = new M_nhantin();
			$so_luong_nhan_tin = $m_nhantin->Dem_nhan_tin();
			include_once("models/pagination.php");
			$config = array(
							'current_page'  => $current_page, // Trang hiện tại
							'total_record'  => $so_luong_nhan_tin, // Tổng số record
							'limit'         => $limit,// limit
							'link_full'     => $_SERVER['PHP_SELF']."?page={page}",// Link full có dạng như sau: domain/com/page/{page}
							'link_first'    => $_SERVER['PHP_SELF'],// Link trang đầu tiên
							'range'         => 5, // Số button trang bạn muốn hiển thị
							); 
			$pager = new Pagination();
			$pager->init($config);
			$paging = $pager->show_paging();

			$vi_tri = $pager->_config['start'];

			$nhantins = $m_nhantin->Doc_nhan_tin("", $vi_tri, $limit);

			$email = "";
			if (isset($_GET['submit'])) {
				if (!empty($_GET['email'])) {
					$email = $_GET['email'];
					$nhantins = $m_nhantin->Doc_nhan_tin($email);
					$paging = "";
				}		
			}

			$title = "Email đăng ký nhận tin";
			$views = ['views/lienhe/v_nhantin.php']; 
			include("include/layout.php");
		}
		
	}
}