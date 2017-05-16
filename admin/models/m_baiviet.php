<?php  
require_once('database.php');
/**
* 
*/
class M_baiviet extends database
{
	public function Doc_bai_viet($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE tieu_de LIKE '% $tim%' OR tieu_de LIKE '%$tim %' OR tieu_de LIKE '% $tim %' OR tieu_de LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT b.*, l.ten_loai_bai_viet, n.ho_ten AS tac_gia FROM bai_viet b LEFT JOIN loai_bai_viet l ON b.ma_loai_bai_viet = l.ma_loai_bai_viet LEFT JOIN nguoi_dung n ON b.ma_nguoi_dung = n.ma_nguoi_dung" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet) {

		$sql = "SELECT b.*, l.ten_loai_bai_viet, n.ho_ten AS tac_gia FROM bai_viet b LEFT JOIN loai_bai_viet l ON b.ma_loai_bai_viet = l.ma_loai_bai_viet LEFT JOIN nguoi_dung n ON b.ma_nguoi_dung = n.ma_nguoi_dung WHERE b.ma_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_bai_viet));	
	}
	public function Them_bai_viet($ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $xuat_ban) {

		$sql = "INSERT INTO bai_viet VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, 0, $xuat_ban));	
	}
	public function Sua_bai_viet($ma_loai_bai_viet, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_bai_viet) {

		$sql = "UPDATE bai_viet SET ma_loai_bai_viet=?, tieu_de=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?, ngay_xuat_ban=?, ngay_het_han=?, xuat_ban=? WHERE ma_bai_viet=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_bai_viet, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_bai_viet));		
	}
	public function Dem_bai_viet() {
		$sql = "SELECT * FROM bai_viet";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>