<?php  
require_once('database.php');
/**
* Model Trang Chủ
*/
class M_product extends database
{
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham) {
		$sql = "SELECT * FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}

}
?>             