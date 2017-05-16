<?php  
	if (isset($_POST)) {
		$ma_hoa_don = $_POST['ma_hoa_don'];
		$trang_thai = $_POST['trang_thai'];
		include("models/m_hoadon.php");
		$m_hoadon = new M_hoadon();
		$kq = $m_hoadon->Thay_doi_trang_thai_hoa_don($trang_thai, $ma_hoa_don);
		if ($kq) {
			echo "Đã thay đổi";
		}
		else {
			echo "Chưa thay đổi";
		}
	}

?>