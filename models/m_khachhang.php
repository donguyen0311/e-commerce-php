<?php  
require_once('database.php');
/**
* 
*/
class M_khachhang extends database
{
	public function Doc_khach_hang($tim="", $vt=-1, $limit=-1) {

		$dieu_kien = "";
		$gioi_han = "";
		if ($tim != "") {
			$dieu_kien = " WHERE ten_khach_hang LIKE '% $tim%' OR ten_khach_hang LIKE '%$tim %' OR ten_khach_hang LIKE '% $tim %' OR ten_khach_hang LIKE '%$tim%'";
		}
		if ($vt >= 0 && $limit > 0) {
			$gioi_han = " LIMIT $vt,$limit";
		}
		$sql = "SELECT * FROM khach_hang" . $dieu_kien . $gioi_han;
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_email_khach_hang() {
		$sql = "SELECT email FROM khach_hang";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Kiem_tra_khach_hang($email, $password) {

		$sql = "SELECT * FROM khach_hang WHERE email=? AND mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email, md5($password)));	
	}
	public function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang) {

		$sql = "SELECT * FROM khach_hang WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_khach_hang));	
	}
	public function Them_khach_hang($mat_khau, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email) {

		$sql = "INSERT INTO khach_hang VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL, md5($mat_khau), $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email));		
	}
	public function Cap_nhat_thong_tin_khach_hang($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $ma_khach_hang) {
		$sql = "UPDATE khach_hang SET ten_khach_hang=?, phai=?, ngay_sinh=?, dia_chi=?, dien_thoai=? WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $ma_khach_hang));
	}
	public function Sua_khach_hang($mat_khau, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ma_khach_hang) {

		$sql = "UPDATE khach_hang SET mat_khau=?, ten_khach_hang=?, phai=?, ngay_sinh=?, dia_chi=?, dien_thoai=?, email=? WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->execute(array(md5($mat_khau), $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ma_khach_hang));		
	}
	public function Dem_khach_hang() {
		$sql = "SELECT * FROM khach_hang";
		$this->setQuery($sql);
		return count($this->loadAllRows());
	}

}
?>