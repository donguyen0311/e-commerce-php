<?php
require_once('database.php');
class M_dangkynhantin extends database
{

	function Them_email_dang_ky_nhan_tin($email)
	{
		$sql="insert into dang_ky_nhan_tin values(?,?)";
		$this->setQuery($sql);
		$param=array(NULL, $email);
		return $this->execute($param);
	}


}