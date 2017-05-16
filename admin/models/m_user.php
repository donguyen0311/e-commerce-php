<?php  
require_once('database.php');
/**
* 
*/
class M_user extends database
{
	public function Doc_tai_khoan()
	{
		$sql="SELECT * FROM nguoi_dung n INNER JOIN loai_nguoi_dung l ON n.ma_loai_nguoi_dung = l.ma_loai_nguoi_dung";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_tai_khoan_theo_ma_nguoi_dung($ma_nguoi_dung)
	{
		$sql="SELECT * FROM nguoi_dung WHERE ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));	
	}
	public function Doc_tai_khoan_theo_ten_dang_nhap_mat_khau($ten_dang_nhap,$mat_khau)
	{
		$sql="SELECT * FROM nguoi_dung WHERE ten_dang_nhap=? AND mat_khau=? AND active=1";
		$this->setQuery($sql);
		return $this->loadRow(array($ten_dang_nhap, md5($mat_khau) ));	
	}
	public function Cap_nhat_lan_dang_nhap_cuoi($ngay_dang_nhap_cuoi, $ten_dang_nhap) {
		$sql="UPDATE nguoi_dung SET ngay_dang_nhap_cuoi=? WHERE ten_dang_nhap=?";
		$this->setQuery($sql);
		return $this->execute(array($ngay_dang_nhap_cuoi, $ten_dang_nhap));
	}
}
?>