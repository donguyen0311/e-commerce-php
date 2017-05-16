<?php  
require_once('database.php');
/**
* 
*/
class M_loaibaiviet extends database
{
	public function Doc_loai_bai_viet($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE l.ten_loai_bai_viet LIKE '% $tim%' OR l.ten_loai_bai_viet LIKE '%$tim %' OR l.ten_loai_bai_viet LIKE '% $tim %' OR l.ten_loai_bai_viet LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT l.*,m.ten_loai_bai_viet AS ten_loai_cha FROM loai_bai_viet l LEFT JOIN loai_bai_viet m ON l.ma_loai_cha = m.ma_loai_bai_viet" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet) {

		$sql = "SELECT * FROM loai_bai_viet WHERE ma_loai_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_bai_viet));	
	}
	public function Them_loai_bai_viet($ten_loai_bai_viet, $mo_ta, $ma_loai_cha) {

		$sql = "INSERT INTO loai_bai_viet VALUES(?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ten_loai_bai_viet, $mo_ta, $ma_loai_cha));		
	}
	public function Sua_loai_bai_viet($ten_loai_bai_viet, $mo_ta, $ma_loai_cha, $ma_loai_bai_viet) {

		$sql = "UPDATE loai_bai_viet SET ten_loai_bai_viet=?, mo_ta=?, ma_loai_cha=? WHERE ma_loai_bai_viet=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai_bai_viet, $mo_ta, $ma_loai_cha, $ma_loai_bai_viet));		
	}
	public function Dem_loai_bai_viet() {
		$sql = "SELECT * FROM loai_bai_viet";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>