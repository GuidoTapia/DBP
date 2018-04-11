<?php
	include "RedSocial.php";
	include 'macs.php';
	
	class Index extends RedSocial{
		public function printBody() {
			$name = returnNameFromMac();
			$text = "<body style='background-color:FEFEF0;'>";
			$text .= "<img src='http://ucsp.edu.pe/wp-content/uploads/2018/02/logo_sanpablo_opt.png' alt='W3Schools.com'>";
			$text .= "<h1>Perfil de $name!</h1>";
			$text .="<table style='width:100%'>";
			$text .="<tr><th>Alumno</th><th>Ciudad</th><th>País</th></tr>";
			$alumnos = array(
					"Guido Luis Tapia Oré", 
					"Ronald Tito Condori", 
					"Paul Arnold Sanguinetti Vargas",
					"Raymond Rudy Negron Valqui",
					"Regina Paola Ticona Herrera",
					"Sebastian Emilio Moscoso Riveros");
			foreach( $alumnos as $name) {
			$text .="<tr><td>".$name."</td><td>Arequipa</td><td>Perú</td></tr>";
		}
			
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
