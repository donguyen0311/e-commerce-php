<?php
	if ($_POST['lay'] == "tong_so_don_hang") { 
		include('models/m_hoadon.php');
		$m_hoadon = new M_hoadon();
		$hoadons = $m_hoadon->Doc_hoa_don();
		$dem = 0;
		foreach ($hoadons as $hoadon) {
			$dem++;
		}
		echo $dem;
	}

	if ($_POST['lay'] == "tong_so_don_hang_chua_thanh_toan") { 
		include('models/m_hoadon.php');
		$m_hoadon = new M_hoadon();
		$hoadons = $m_hoadon->Doc_hoa_don();
		$dem = 0;
		foreach ($hoadons as $hoadon) {
			if ($hoadon->trang_thai == 1) {
				$dem++;
			}
		}
		$hoa_don_chua_thanh_toans = $m_hoadon->Doc_hoa_don_chua_thanh_toan();
		//print_r($hoa_don_chua_thanh_toans);
		$ket_qua = array(
					"so_luong" => $dem,
					"danh_sach" => $hoa_don_chua_thanh_toans
				);
		echo json_encode($ket_qua);
	}

	if ($_POST['lay'] == "tong_so_khach_hang_thanh_vien") {
		include('models/m_khachhang.php');
		$m_khachhang = new M_khachhang();
		$dem = $m_khachhang->Dem_khach_hang();
		echo $dem;
	}

	if ($_POST['lay'] == "tong_so_nguoi_truy_cap") {
		# code...
	}

	if ($_POST['lay'] == "tong_so_doanh_thu") {
		include('models/m_hoadon.php');
		$m_hoadon = new M_hoadon();
		$hoadons = $m_hoadon->Doc_hoa_don();
		$doanh_thu = 0;
		foreach ($hoadons as $hoadon) {
			if ($hoadon->trang_thai != 3) {
				$doanh_thu += $hoadon->tri_gia;
			}
		}
		echo number_format($doanh_thu, 0, "", ".");
	}

	if ($_POST['lay'] == "tong_so_lien_he") {
		include('models/m_lienhe.php');
		$m_lienhe = new M_lienhe();
		$dem = $m_lienhe->Dem_lien_he();
		echo $dem;
	}
	if ($_POST['lay'] == "tong_so_lien_he_chua_doc") {
		include('models/m_lienhe.php');
		$m_lienhe = new M_lienhe();
		$lienhes = $m_lienhe->Doc_lien_he();
		$dem =  0;
		foreach ($lienhes as $lienhe) {
			if ($lienhe->trang_thai == 1) {
				$dem++;
			}
		}
		$lien_he_chua_xems = $m_lienhe->Doc_lien_he_chua_xem();
		$ket_qua = array(
					"so_luong" => $dem,
					"danh_sach" => $lien_he_chua_xems
				);
		echo json_encode($ket_qua);
	}

	if ($_POST['lay'] == "tong_so_san_pham") {
		include('models/m_sanpham.php');
		$m_sanpham = new M_sanpham();
		$dem = $m_sanpham->Dem_san_pham();
		echo $dem;
	}
?>