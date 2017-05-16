<?php
	include_once("phan_quyen.php");
	phan_quyen();
	require("models/database.php");
	$id_xoa=$_POST["id_xoa"];
	$tbl_xoa=$_POST["tbl_xoa"];
	$field_xoa=$_POST["field_xoa"];
	$sql="DELETE FROM $tbl_xoa WHERE $field_xoa=$id_xoa";
	$db=new database();
	$db->setQuery($sql);
	$kq=$db->execute();
	if($kq)
	{
		echo "<script>window.alert('Xóa dữ liệu thành công!')</script>";
	}
	else
	{
		echo "<script>window.alert('Xóa dữ liệu không thành công!')</script>";	
	}
?>