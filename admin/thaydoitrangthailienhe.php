<?php  
	if (isset($_POST)) {
		$ma_lien_he = $_POST['ma_lien_he'];
		$trang_thai = $_POST['trang_thai'];
		include("models/m_lienhe.php");
		$m_lienhe = new M_lienhe();
		$kq = $m_lienhe->Thay_doi_trang_thai_lien_he($trang_thai, $ma_lien_he);
		if ($kq) {
			echo "Đã thay đổi";
		}
		else {
			echo "Chưa thay đổi";
		}
	}

?>