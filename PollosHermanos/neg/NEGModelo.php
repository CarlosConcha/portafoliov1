<?php
require_once("../DAO/DAOModelo");
require_once("../Entidades/ClModelo.php");
class NEGModelo{
	public static function eliminarModelo($id_modelo){
		$modelo=new ClModelo($id_modelo,"","","","","");
		DAOModelo::sqlEliminar($modelo);
		
      } 
	
}

?>