<?php  
require_once('database.php');
/**
* 
*/
class M_loainguoidung extends database
{
	public function Doc_loai_nguoi_dung($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE ten_loai_nguoi_dung LIKE '% $tim%' OR ten_loai_nguoi_dung LIKE '%$tim %' OR ten_loai_nguoi_dung LIKE '% $tim %' OR ten_loai_nguoi_dung LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT * FROM loai_nguoi_dung" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung) {

		$sql = "SELECT * FROM loai_nguoi_dung WHERE ma_loai_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_nguoi_dung));	
	}
	public function Them_loai_nguoi_dung($ten_loai_nguoi_dung) {

		$sql = "INSERT INTO loai_nguoi_dung VALUES(?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ten_loai_nguoi_dung));		
	}
	public function Sua_loai_nguoi_dung($ten_loai_nguoi_dung, $ma_loai_nguoi_dung) {

		$sql = "UPDATE loai_nguoi_dung SET ten_loai_nguoi_dung=? WHERE ma_loai_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai_nguoi_dung, $ma_loai_nguoi_dung));		
	}
	public function Dem_loai_nguoi_dung() {
		$sql = "SELECT * FROM loai_nguoi_dung";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>