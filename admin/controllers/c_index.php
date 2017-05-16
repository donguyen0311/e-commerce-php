<?php
@session_start();  
include_once("models/m_index.php");
/**
* 
*/
class C_index
{
	public function Hien_thi_trang_chu() {

		if (!isset($_SESSION['fullname'])) {
			header("location: dang-nhap");
		} 
		else {
			include_once("models/m_hoadon.php");
			$m_hoadon = new M_hoadon();
			$doanh_thus = $m_hoadon->Thong_ke_hoa_don();
			$thang_nam = array();
			$tong_tien = array();
			foreach ($doanh_thus as $doanh_thu) {
				$thang_nam[] = $doanh_thu->thang_nam;
				$tong_tien[] = $doanh_thu->tong_tien;
			}

			$arr=array(
			"labels"=>$thang_nam,
			"datasets"=>array(
								array(
										"label"=>"Doanh thu theo tháng năm ",
								        "backgroundColor"=> "rgba(38, 185, 154, 0.31)",
								        "borderColor"=> "rgba(38, 185, 154, 0.7)",
								        "pointBorderColor"=> "rgba(38, 185, 154, 0.7)",
								        "pointBackgroundColor"=> "rgba(38, 185, 154, 0.7)",
								        "pointHoverBackgroundColor"=> "#fff",
								        "pointHoverBorderColor"=> "rgba(220,220,220,1)",
								        "pointBorderWidth"=> 1,
								        "pointHoverRadius"=> 4,
								        "pointHoverBorderWidth"=> 3,
								        "pointRadius"=> 4,
								        "pointHitRadius"=> 6,
										"data"=>$tong_tien
										)
								)
			);
			$strJSON=json_encode($arr);
			$title = "Trang Chủ";
			$views = ['views/index/v_index.php']; 
			include("include/layout.php");
		}
		
	}
}
?>