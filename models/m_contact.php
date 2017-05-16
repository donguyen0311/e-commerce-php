<?php  
require_once('database.php');
/**
* Model Liên Hệ
*/
class M_contact extends database
{
	public function Luu_lien_he($ho_ten, $email, $noi_dung) {
		$sql = "INSERT INTO lien_he VALUES(?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ho_ten, $email, $noi_dung, 1));
	}
	
}
?>