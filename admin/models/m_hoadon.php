<?php  
require_once('database.php');
/**
* 
*/
class M_hoadon extends database
{
	public function Doc_hoa_don($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE trang_thai LIKE '% $tim%' OR trang_thai LIKE '%$tim %' OR trang_thai LIKE '% $tim %' OR trang_thai LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT h.*,k.ten_khach_hang FROM hoa_don h INNER JOIN khach_hang k ON h.ma_khach_hang = k.ma_khach_hang" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don) {

		$sql = "SELECT c.*,s.ten_san_pham,s.hinh FROM ct_hoa_don c LEFT JOIN san_pham s ON c.ma_san_pham = s.ma_san_pham WHERE c.ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_hoa_don));	
	}
	public function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don) {

		$sql = "SELECT h.*,k.ten_khach_hang,k.phai,k.ngay_sinh,k.dia_chi,k.dien_thoai,k.email FROM hoa_don h INNER JOIN khach_hang k ON h.ma_khach_hang = k.ma_khach_hang WHERE h.ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_hoa_don));	
	}
	// public function Them_hoa_don($ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai) {

	// 	$sql = "INSERT INTO hoa_don VALUES(?, ?, ?, ?, ?)";
	// 	$this->setQuery($sql);
	// 	return $this->execute(array(NULL, $ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai));	
	// }
	// public function Sua_hoa_don($ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai, $ma_hoa_don) {

	// 	$sql = "UPDATE hoa_don SET ngay_hd=?, ma_khach_hang=?, tri_gia=?, trang_thai=? WHERE ma_hoa_don=?";
	// 	$this->setQuery($sql);
	// 	return $this->execute(array($ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai, $ma_hoa_don));		
	// }
	public function Thay_doi_trang_thai_hoa_don($trang_thai, $ma_hoa_don) {

		$sql = "UPDATE hoa_don SET trang_thai=? WHERE ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->execute(array($trang_thai, $ma_hoa_don));
	}
	public function Dem_hoa_don() {
		$sql = "SELECT * FROM hoa_don";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}
	public function Thong_ke_hoa_don() {
		$sql = "SELECT concat(Month(ngay_hd), '-', Year(ngay_hd)) as thang_nam, sum(tri_gia) as tong_tien FROM hoa_don WHERE trang_thai IN (1,2) GROUP BY Month(ngay_hd),Year(ngay_hd) ORDER BY Month(ngay_hd),Year(ngay_hd)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_hoa_don_chua_thanh_toan() {
		$sql = "SELECT h.*,k.ten_khach_hang FROM hoa_don h INNER JOIN khach_hang k ON h.ma_khach_hang = k.ma_khach_hang WHERE trang_thai = 1 ORDER BY ngay_hd DESC LIMIT 0,4";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>