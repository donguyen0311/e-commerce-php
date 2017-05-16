<?php  
	if (isset($_POST)) {
		$ma_san_pham = $_POST['ma_san_pham'];
		$ngay_khuyen_mai = $_POST['ngay_khuyen_mai'];
		$ngay_het_han = $_POST['ngay_het_han'];
		$noi_dung_khuyen_mai = $_POST['noi_dung_khuyen_mai'];
		include('models/m_sanpham.php');
		$m_sanpham = new M_sanpham();
		$kq = $m_sanpham->Them_san_pham_khuyen_mai($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai);
		if ($kq) {
			echo "Thêm nội dung khuyến mãi thành công";
		}
		else {
			echo "Thêm nội dung khuyến mãi không thành công";
		}
	}

?>