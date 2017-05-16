<?php  
@session_start();
include_once('models/m_contact.php');
/**
* Controller Liên Hệ
*/
class C_contact
{
	public function Hien_thi_lien_he() {
		$ho_ten = $email = $noi_dung = "";
		$check = true;
		$error = "";
		if (isset($_POST['submit'])) {
			$error = "<script>alert('Vui lòng nhập";
			if (empty($_POST['ho_ten'])) {
				$error .= " Họ tên";
				$check = false;
			}
			if (empty($_POST['email'])) {
				$error .= " Email";
				$check = false;
			}
			if (empty($_POST['noi_dung'])) {
				$error .= " Nội dung";
				$check = false;
			}
			$error = "')</script>";
			if($check) { 
				$ho_ten = $_POST['ho_ten'];
				$email = $_POST['email'];
				$noi_dung = $_POST['noi_dung'];
				$this->Luu_lien_he($ho_ten, $email, $noi_dung);
			} else {
				echo $error;
			}
		}

		$banner = "Liên Hệ";
		$title = "Liên Hệ";   
		$views = ["banner.php", "views/contact/v_contact.php"];
		include("include/layout.php");
	}

	public function Luu_lien_he($ho_ten, $email, $noi_dung) {	
		$m_lien_he = new M_contact();
		$kq = $m_lien_he->Luu_lien_he($ho_ten, $email, $noi_dung);
		if ($kq) {
			echo "<script>alert('Gửi liên hệ thành công!')</script>";
		} else {
			echo "<script>alert('Gửi liên hệ không thành công!')</script>";
		}		
	}

}
?>