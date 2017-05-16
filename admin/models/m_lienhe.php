<?php  
require_once('database.php');
/**
* 
*/
class M_lienhe extends database
{
	public function Doc_lien_he($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE trang_thai LIKE '% $tim%' OR trang_thai LIKE '%$tim %' OR trang_thai LIKE '% $tim %' OR trang_thai LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT * FROM lien_he" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_lien_he_theo_ma_lien_he($ma_lien_he) {

		$sql = "SELECT b.*, l.ten_loai_lien_he, n.ho_ten AS tac_gia FROM lien_he b LEFT JOIN loai_lien_he l ON b.ma_loai_lien_he = l.ma_loai_lien_he LEFT JOIN nguoi_dung n ON b.ma_nguoi_dung = n.ma_nguoi_dung WHERE b.ma_lien_he=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_lien_he));	
	}
	public function Them_lien_he($ma_loai_lien_he, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $xuat_ban) {

		$sql = "INSERT INTO lien_he VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ma_loai_lien_he, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, 0, $xuat_ban));	
	}
	public function Sua_lien_he($ma_loai_lien_he, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_lien_he) {

		$sql = "UPDATE lien_he SET ma_loai_lien_he=?, tieu_de=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?, ngay_xuat_ban=?, ngay_het_han=?, xuat_ban=? WHERE ma_lien_he=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_lien_he, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_xuat_ban, $ngay_het_han, $xuat_ban, $ma_lien_he));		
	}
	public function Dem_lien_he() {
		$sql = "SELECT * FROM lien_he";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}
	public function Thay_doi_trang_thai_lien_he($trang_thai, $ma_lien_he) {

		$sql = "UPDATE lien_he SET trang_thai=? WHERE ma_lien_he=?";
		$this->setQuery($sql);
		return $this->execute(array($trang_thai, $ma_lien_he));
	}
	public function Doc_lien_he_chua_xem() {
		$sql = "SELECT * FROM lien_he WHERE trang_thai=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>