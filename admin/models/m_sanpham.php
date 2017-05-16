<?php  
require_once('database.php');
/**
* 
*/
class M_sanpham extends database
{
	public function Doc_san_pham($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE s.ten_san_pham LIKE '% $tim%' OR s.ten_san_pham LIKE '%$tim %' OR s.ten_san_pham LIKE '% $tim %' OR s.ten_san_pham LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT s.*,l.ten_loai_san_pham,k.ten_loai_san_pham as ten_loai_cha,b.ma_khuyen_mai, b.ngay_khuyen_mai,b.ngay_het_han,b.noi_dung_khuyen_mai FROM san_pham s LEFT JOIN loai_san_pham l ON s.ma_loai = l.ma_loai_san_pham LEFT JOIN loai_san_pham k ON s.ma_loai_cha = k.ma_loai_san_pham LEFT JOIN san_pham_khuyen_mai b ON s.ma_san_pham = b.ma_san_pham" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_san_pham_khuyen_mai($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE s.ten_san_pham LIKE '% $tim%' OR s.ten_san_pham LIKE '%$tim %' OR s.ten_san_pham LIKE '% $tim %' OR s.ten_san_pham LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT k.*,s.ten_san_pham FROM san_pham_khuyen_mai k INNER JOIN san_pham s ON k.ma_san_pham = s.ma_san_pham" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham) {

		$sql = "SELECT s.*,l.ten_loai_san_pham,k.ten_loai_san_pham as ten_loai_cha,b.ma_khuyen_mai, b.ngay_khuyen_mai,b.ngay_het_han,b.noi_dung_khuyen_mai FROM san_pham s LEFT JOIN loai_san_pham l ON s.ma_loai = l.ma_loai_san_pham LEFT JOIN loai_san_pham k ON s.ma_loai_cha = k.ma_loai_san_pham LEFT JOIN san_pham_khuyen_mai b ON s.ma_san_pham = b.ma_san_pham WHERE s.ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));	
	}
	public function Them_san_pham($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $ngay_tao) {

		$sql = "INSERT INTO san_pham VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, 0, $ngay_tao));	
	}
	public function Them_san_pham_khuyen_mai($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai) {

		$sql = "INSERT INTO san_pham_khuyen_mai VALUES(?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, $ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai));	
	}

	public function Sua_san_pham($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $ma_san_pham) {

		$sql = "UPDATE san_pham SET ten_san_pham=?, ma_loai_cha=?, ma_loai=?, mo_ta_tom_tat=?, mo_ta_chi_tiet=?, don_gia=?, hinh=?, san_pham_moi=? WHERE ma_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $ma_san_pham));		
	}
	public function Sua_san_pham_khuyen_mai($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai, $ma_khuyen_mai) {

		$sql = "UPDATE san_pham_khuyen_mai SET ma_san_pham=?, ngay_khuyen_mai=?, ngay_het_han=?, noi_dung_khuyen_mai=? WHERE ma_khuyen_mai=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai, $ma_khuyen_mai));		
	}
	public function Dem_san_pham() {
		$sql = "SELECT * FROM san_pham";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}
	public function Dem_san_pham_khuyen_mai() {
		$sql = "SELECT * FROM san_pham_khuyen_mai";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}
	public function Dem_ma_san_pham_cuoi_cung() {
		$sql = "SELECT * FROM san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

}
?>