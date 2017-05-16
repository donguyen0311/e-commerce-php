<?php  
	if (isset($_POST)) {
		$ma_khuyen_mai = $_POST['ma_khuyen_mai'];
		$ma_san_pham = $_POST['ma_san_pham'];
		$ngay_khuyen_mai = $_POST['ngay_khuyen_mai'];
		$ngay_het_han = $_POST['ngay_het_han'];
		$noi_dung_khuyen_mai = $_POST['noi_dung_khuyen_mai'];
		include('models/m_sanpham.php');
		$m_sanpham = new M_sanpham();
		if ($ma_khuyen_mai == 0) {
			$kq = $m_sanpham->Them_san_pham_khuyen_mai($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai);
			if ($kq) {
				echo "Thêm nội dung khuyến mãi thành công";
			}
			else {
				echo "Thêm nội dung khuyến mãi không thành công";
			}
		}
		else {
			$kq = $m_sanpham->Sua_san_pham_khuyen_mai($ma_san_pham, $ngay_khuyen_mai, $ngay_het_han, $noi_dung_khuyen_mai, $ma_khuyen_mai);
			if ($kq) {
				echo "Sửa nội dung khuyến mãi thành công";
			}
			else {
				echo "Sửa nội dung khuyến mãi không thành công";
			}
		}
		echo "done";
	}

?>