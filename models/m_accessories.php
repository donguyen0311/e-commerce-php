<?php  
require_once('database.php');
/**
* Model Phụ Kiện
*/
class M_accessories extends database
{
	protected $dieu_kien_loc = array('sort' => 0,
								     'limit' => 9,
								     'min_price' => 0,
								     'max_price' => 500000
								    );
	public function Doc_san_pham_phu_kien($sort, $limit, $min_price, $max_price, $vi_tri) {
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
		
		if ($vi_tri >= 0) {
			# code...
		}

		$sql = "SELECT * FROM san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>  