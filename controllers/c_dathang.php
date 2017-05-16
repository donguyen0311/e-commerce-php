<?php
include("models/m_khachhang.php");
include("models/m_dathang.php");
class C_dathang
{
	private function Tong_tien($arr)
	{
		$tong=0;
		foreach($arr as $item)
		{
			$tong+= $item["product_qty"]* $item["product_price"];
		}
		return $tong;	
	}
	
	public function Xu_ly_dat_hang()
	{
		$test_phone = "/^[0]{1}[0-9]{9,11}$/";
		if (!preg_match($test_phone, $_POST['so_dien_thoai'])) {
			echo "<script>alert('Số điện thoại không hợp lệ')</script>";
			$this->Xu_ly_thong_tin();
		} else {

			// models
			$m_dat_hang=new M_dathang();
			$m_khach_hang=new M_khachhang();
			// Thêm hóa đơn cho khách hàng
			$ma_khach_hang=$_SESSION["ma_khach_hang"];
			$gio_hang=$_SESSION["products"];
			$m_khach_hang->Cap_nhat_thong_tin_khach_hang($_POST['ten_khach_hang'], $_POST['gioi_tinh'], $_POST['ngay_sinh'], $_POST['dia_chi'], $_POST['so_dien_thoai'], $ma_khach_hang);
			$khach_hang=$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
			// $hinh_thuc_thanh_toan=$_POST["httt"];
			$tong_tien=$this->Tong_tien($gio_hang);

			$ma_hoa_don=$m_dat_hang->Them_hoa_don(date("Y-m-d"), $ma_khach_hang, $tong_tien, 1);
			if($ma_hoa_don)
			{
				// Thêm chi tiết hóa đơn
				foreach($gio_hang as $item)
				{
					$ma_san_pham=$item["product_code"];
					$so_luong=$item["product_qty"];
					$don_gia=$item["product_price"];
					$m_dat_hang->Them_chi_tiet_hoa_don($ma_hoa_don,$ma_san_pham,$so_luong,$don_gia);	
				}
				// Xóa session products
				unset($_SESSION["products"]); 
			}
			$hoa_dons = $m_dat_hang->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
			$chi_tiet_hoa_dons = $m_dat_hang->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);
			// View
			include("views/checkout/v_giao_hang.php");
		}
	}
	
	
	public function Xu_ly_thong_tin()
	{
		// Models
		$m_khach_hang=new M_khachhang();
		$ma_khach_hang=$_SESSION["ma_khach_hang"];
		$khach_hang=$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
		
		// Views
		include("views/checkout/v_xu_ly_thong_tin.php");	
	}	
}
?>