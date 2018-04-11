<?php
	include "RedSocial.php";
	include 'macs.php';
	
	class Index extends RedSocial{
		public function printBody() {
			$name = returnNameFromMac();
			$text = "<body style='background-color:FEFEF0;'>";
			$text .= "<img src='http://ucsp.edu.pe/wp-content/uploads/2018/02/logo_sanpablo_opt.png' alt='W3Schools.com'>";
			$text .= "<h1>Perfil de $name!</h1>";
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
