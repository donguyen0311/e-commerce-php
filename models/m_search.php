<?php  
require_once('database.php');
/**
* Model Tìm Kiếm
*/
class M_search extends database
{
	public function Tim_kiem_san_pham($noi_dung_tim_kiem, $loai_tim_kiem) {
		switch ($loai_tim_kiem) {
				case 'tat_ca':
					$sql = "SELECT * FROM san_pham WHERE ten_san_pham LIKE '%". $noi_dung_tim_kiem ." %' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ."%' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ." %'";
					break;
				case 'do_nam':
					$sql = "SELECT * FROM san_pham WHERE (ten_san_pham LIKE '%". $noi_dung_tim_kiem ." %' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ."%' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ." %') AND (ma_loai_cha = 9)";
					break;
				case 'do_nu':
					$sql = "SELECT * FROM san_pham WHERE (ten_san_pham LIKE '%". $noi_dung_tim_kiem ." %' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ."%' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ." %') AND (ma_loai_cha = 15)";
					break;
				case 'phu_kien': // chưa edit lại trong database là 20
					$sql = "SELECT * FROM san_pham WHERE (ten_san_pham LIKE '%". $noi_dung_tim_kiem ." %' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ."%' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ." %') AND (ma_loai_cha = 20)";
					break;
				default:
					$sql = "SELECT * FROM san_pham WHERE ten_san_pham LIKE '%". $noi_dung_tim_kiem ." %' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ."%' OR ten_san_pham LIKE '% ". $noi_dung_tim_kiem ." %'";
					break;
			}
		
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?> 