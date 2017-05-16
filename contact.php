<?php 
	// $banner = "Contact";
	// $title = "Contact";   
	// $views = ["banner.php", "content_contact.php"];
	// include("include/layout.php");
	include('controllers/c_contact.php');
	$c_contact = new C_contact();
	$c_contact->Hien_thi_lien_he();
?>