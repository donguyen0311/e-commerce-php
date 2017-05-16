<?php  
require_once('database.php');
/**
* 
*/
class M_loaisanpham extends database
{
	public function Doc_loai_san_pham($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE l.ten_loai_san_pham LIKE '% $tim%' OR l.ten_loai_san_pham LIKE '%$tim %' OR l.ten_loai_san_pham LIKE '% $tim %' OR l.ten_loai_san_pham LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT l.*,m.ten_loai_san_pham AS ten_loai_cha FROM loai_san_pham l LEFT JOIN loai_san_pham m ON l.ma_loai_cha = m.ma_loai_san_pham" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_loai_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham) {

		$sql = "SELECT * FROM loai_san_pham WHERE ma_loai_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_san_pham));	
	}
	public function Them_loai_san_pham($ten_loai_san_pham, $mo_ta, $ma_loai_cha) {

		$sql = "INSERT INTO loai_san_pham VALUES(?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ten_loai_san_pham, $mo_ta, $ma_loai_cha));		
	}
	public function Sua_loai_san_pham($ten_loai_san_pham, $mo_ta, $ma_loai_cha, $ma_loai_san_pham) {

		$sql = "UPDATE loai_san_pham SET ten_loai_san_pham=?, mo_ta=?, ma_loai_cha=? WHERE ma_loai_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai_san_pham, $mo_ta, $ma_loai_cha, $ma_loai_san_pham));		
	}
	public function Dem_loai_san_pham() {
		$sql = "SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>