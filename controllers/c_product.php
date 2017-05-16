<?php  
include_once("models/m_product.php");
/**
* 
*/
class C_product
{
	public function Hien_thi_san_pham_theo_ma_san_pham() {
		$ma_san_pham = $_GET['id'];
		$m_san_pham = new M_product();
		$san_pham = $m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
		$banner = $san_pham->ten_san_pham;
		$title = $san_pham->ten_san_pham;    
		$views = ["banner.php", "views/product/v_product.php"];
		include("include/layout.php");
	}
}
?>