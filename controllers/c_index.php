<?php 
@session_start();
include_once('models/m_index.php'); 
/**
* 
*/
class C_index
{
	public function Hien_thi_san_pham() {
		$title = "Trang Chủ";  
		$views = ["banner_index.php", "views/index/v_index.php"];
		$m_trang_chu = new M_index();
		$san_pham_mois = $m_trang_chu->Doc_san_pham_moi();
		$san_pham_nhieu_luot_xems = $m_trang_chu->Doc_san_pham_theo_luot_xem_lon();
		$san_pham_khuyen_mais = $m_trang_chu->Doc_san_pham_khuyen_mai(); 
		include("include/layout.php");
	}
}

?>