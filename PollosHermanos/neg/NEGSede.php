<?php
require_once("../DAO/DAOSede.php");
require_once("../Entidades/ClSede.php");
class NEGSede{
	public static function eliminarSede($id_sede){
		$sede=new ClSede($id_sede,"","","","","");
		DAOSede::sqlEliminar($sede);
		
      }
    public static function modificarSede($id,$loc,$nombre){
		echo "ola1";
		$sede=new ClSede($id,$loc,$nombre);
		DAOSede::sqlModificar($sede);
		
    } 
	 public static function insertarSede($loc,$nombre){
		echo "ola1";
		$sede=new ClSede(0,$loc,$nombre);
		DAOSede::sqlInsertar($sede);
		
    } 
}

?>