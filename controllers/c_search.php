<?php 
@session_start();
include_once('models/m_search.php');
/**
* 
*/
class C_search
{
	public function Hien_thi_tim_kiem() {

		if (isset($_GET['submit'])) {
			$noi_dung_tim_kiem = $_GET['noi_dung_tim_kiem'];
			$loai_tim_kiem = $_GET['loai_tim_kiem'];
			$m_search = new M_search();
			$ket_qua_tim_kiem = $m_search->Tim_kiem_san_pham($noi_dung_tim_kiem, $loai_tim_kiem);
			$banner = "Tìm Kiếm";
			$title = "Tìm Kiếm";    
			$views = ["banner.php", "views/search/v_search.php"];
			include("include/layout.php");
		}
		else {
			header("location: trang-chu");
		}
	}
}

?>