<?php
require_once('database.php');
class M_dathang extends database
{
	function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don) {
		$sql = "SELECT * FROM hoa_don WHERE ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_hoa_don));
	}
	function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don) {
		$sql = "SELECT * FROM ct_hoa_don c INNER JOIN san_pham s ON c.ma_san_pham = s.ma_san_pham WHERE c.ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_hoa_don));
	}
	//ma_hoa_don, ma_khach_hang, ngay_dat, tong_tien, tien_dat_coc, con_lai, hinh_thuc_thanh_toan, ghi_chu, tinh_trang
	function Them_hoa_don($ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai)
	{
		$sql="insert into hoa_don values(?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$ngay_hd, $ma_khach_hang, $tri_gia, $trang_thai);
		$this->execute($param);
		return  $this->getLastId();
	}
	// ma_hoa_don, ma_mon, so_luong, don_gia, mon_thuc_don
	function Them_chi_tiet_hoa_don($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia)
	{
		$sql="insert into ct_hoa_don values(?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia, NULL);
		return $this->execute($param);
	}

}