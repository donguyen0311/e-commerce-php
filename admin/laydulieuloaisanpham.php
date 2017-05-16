<?php
	if (isset($_POST['ma_loai_san_pham_cha'])) {
		$ma_loai_san_pham_cha = $_POST['ma_loai_san_pham_cha'];
	  	include("models/m_loaisanpham.php");
		$m_loaisanpham = new M_loaisanpham();
		$loaisanphams = $m_loaisanpham->Doc_loai_san_pham();
		//$mang_ma_loai_con  = array();
		$temp = "";
		foreach ($loaisanphams as $loaisanpham) {	
			if ($loaisanpham->ma_loai_cha == $ma_loai_san_pham_cha) {
				$temp .= "<option value='";
				//$mang_ma_loai_con[$loaisanpham->ma_loai_san_pham] = $loaisanpham->ten_loai_san_pham;
				$temp .= $loaisanpham->ma_loai_san_pham . "'>" . $loaisanpham->ten_loai_san_pham;
				$temp .= "</option>";
			}
		}
		echo $temp;	
	}  
	
?>