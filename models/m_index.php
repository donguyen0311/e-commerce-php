<?php  
require_once('database.php');
/**
* Model Trang Chủ
*/
class M_index extends database
{
	public function Doc_san_pham_theo_luot_xem_lon() {
		$sql = "SELECT s.*,l.noi_dung_khuyen_mai FROM san_pham s LEFT JOIN san_pham_khuyen_mai l ON s.ma_san_pham = l.ma_san_pham ORDER BY so_lan_xem DESC LIMIT 0,12";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_san_pham_moi() {
		$sql = "SELECT * FROM san_pham WHERE san_pham_moi = 1 LIMIT 0,12";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_san_pham_khuyen_mai() {
		$sql = "SELECT s.*,l.noi_dung_khuyen_mai FROM san_pham s INNER JOIN san_pham_khuyen_mai l ON s.ma_san_pham = l.ma_san_pham LIMIT 0,12";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
}
?>             