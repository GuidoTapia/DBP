<?php

include 'PageTemplate.php';

abstract class RedSocial extends PageTemplate{
	
	public function SchoolPage( $newTitle='') {
		$this->title = $newTitle;
	}
	
	public function printHeader(){
		$text = "<head>"."\n";
		$text .= '<title>'.$this->title.'</title>'."\n";
		$text .= "<link rel='stylesheet' type='text/css' href='css/style.css'>";
		$text .= '</head>'."\n";
		return $text;
	}
	
	public function printFooter(){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$this->autor."</h1> </center>";
		return $text;
	}
	
	public function printMenu(){
		$text = "<table>";
		$links = array(
					"Inicio" => '#', 
					"Perfil" => "index.php", 
					"Busqueda" => "consulta.php",
					"Notas"=>"notas.php",
					"Contactos"=>"contactos.php",
					"Salir"=>"#");
		foreach( $links as $name => $link) {
			$text .= "<tr><td><div class='fakeButton'>
						<a href='$link'>".$name."</a>
						</div></td></tr>";
		}
		$text .= "</table>";
		return $text;
	}	
}
?>
