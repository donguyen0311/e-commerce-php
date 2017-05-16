<?php  
require_once('database.php');
/**
* 
*/
class M_nguoidung extends database
{
	public function Doc_nguoi_dung($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE ho_ten LIKE '% $tim%' OR ho_ten LIKE '%$tim %' OR ho_ten LIKE '% $tim %' OR ho_ten LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT n.*,l.ten_loai_nguoi_dung FROM nguoi_dung n INNER JOIN loai_nguoi_dung l ON n.ma_loai_nguoi_dung = l.ma_loai_nguoi_dung" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung) {

		$sql = "SELECT n.*,l.ten_loai_nguoi_dung FROM nguoi_dung n INNER JOIN loai_nguoi_dung l ON n.ma_loai_nguoi_dung = l.ma_loai_nguoi_dung WHERE ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));	
	}
	public function Them_nguoi_dung($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, $active) {

		$sql = "INSERT INTO nguoi_dung VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, md5($mat_khau), $email, $ngay_dang_ky, NULL, $active));		
	}
	public function Sua_nguoi_dung($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $active, $ma_nguoi_dung) {

		$sql = "UPDATE nguoi_dung SET ma_loai_nguoi_dung=?, ho_ten=?, ten_dang_nhap=?, mat_khau=?, email=?, active=? WHERE ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, md5($mat_khau), $email, $active, $ma_nguoi_dung));		
	}
	public function Dem_nguoi_dung() {
		$sql = "SELECT * FROM nguoi_dung";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>