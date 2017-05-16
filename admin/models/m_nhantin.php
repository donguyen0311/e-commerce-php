<?php  
require_once('database.php');
/**
* 
*/
class M_nhantin extends database
{
	public function Doc_nhan_tin($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE email LIKE '% $tim%' OR email LIKE '%$tim %' OR email LIKE '% $tim %' OR email LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT * FROM dang_ky_nhan_tin" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	// public function Doc_nhan_tin_theo_email($email) {

	// 	$sql = "SELECT * FROM dang_ky_nhan_tin WHERE email=?";
	// 	$this->setQuery($sql);
	// 	return $this->loadAllRows(array($email));	
	// }
	// public function Them_nhan_tin($ma_loai_nhan_tin, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $xuat_ban) {

	// 	$sql = "INSERT INTO nhan_tin VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	// 	$this->setQuery($sql);
	// 	return $this->execute(array(NULL, $ma_loai_nhan_tin, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, 0, $xuat_ban));	
	// }
	// public function Sua_nhan_tin($ma_loai_nhan_tin, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_nhan_tin) {

	// 	$sql = "UPDATE nhan_tin SET ma_loai_nhan_tin=?, tieu_de=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?, ngay_xuat_ban=?, ngay_het_han=?, xuat_ban=? WHERE ma_nhan_tin=?";
	// 	$this->setQuery($sql);
	// 	return $this->execute(array($ma_loai_nhan_tin, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_nhan_tin));		
	// }
	public function Dem_nhan_tin() {
		$sql = "SELECT * FROM dang_ky_nhan_tin";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>