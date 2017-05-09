<?php
require_once("../DAO/DAOLocacion.php");
require_once("../Entidades/ClLocacion.php");
class NEGLocacion{ 
	public static function eliminarLocacion($idLocacion){ 
		$locacion=new ClLocacion($idLocacion,"","","");
		DAOLocacion::sqlEliminar($locacion);
		
      } 
	public static function modificarLocacion($id,$direc,$comuna){
		$locacion=new ClLocacion($id,$direc,$comuna);
		DAOLocacion::sqlModificar($locacion);
	}
	public static function insertarLocacion($direc,$comuna){
		$locacion=new ClLocacion("",$direc,$comuna);
		DAOLocacion::sqlInsertar($locacion);
	}
}

?>