<?php  
require_once('database.php');
/**
* Model Đồ Nữ
*/
class M_womens extends database
{
	protected $dieu_kien_loc = array('sort' => 0,
								     'limit' => 9,
								     'min_price' => 0,
								     'max_price' => 1500000
								    );
	public function Doc_san_pham_nu($min_price, $max_price, $sort, $limit, $vi_tri = -1) {
		if (!empty($sort)) {
			$this->dieu_kien_loc['sort'] = $sort;
		}
		if (!empty($limit)) {
			$this->dieu_kien_loc['limit'] = $limit;
		}
		if (!empty($min_price)) {
			$this->dieu_kien_loc['min_price'] = $min_price;
		}
		if (!empty($max_price)) {
			$this->dieu_kien_loc['max_price'] = $max_price;
		}

		switch ($this->dieu_kien_loc['sort']) {
			case 1:
				$sap_xep = " ORDER BY ten_san_pham ";
				break;
			case 2:
				$sap_xep = " ORDER BY ten_san_pham DESC";;
				break;
			case 3:
				$sap_xep = " ORDER BY don_gia DESC ";;
				break;
			case 4:
				$sap_xep = " ORDER BY don_gia ";;
				break;
			default:
				$sap_xep = "";
				break;
		}
		if ($vi_tri >= 0) {
			$gioi_han = " LIMIT $vi_tri,".$this->dieu_kien_loc['limit'];
		} else {
			$gioi_han = " ";
		}
		$sql = "SELECT s.*,l.noi_dung_khuyen_mai FROM san_pham s LEFT JOIN san_pham_khuyen_mai l ON s.ma_san_pham=l.ma_san_pham WHERE ma_loai_cha=15 AND (don_gia BETWEEN ? AND ?)" . $sap_xep . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows(array($this->dieu_kien_loc['min_price'], $this->dieu_kien_loc['max_price']));
	}
}
?>      