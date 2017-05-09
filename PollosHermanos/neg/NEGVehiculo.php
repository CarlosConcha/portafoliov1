<?php
require_once("../DAO/DAOVehiculo.php");
require_once("../Entidades/ClVehiculo.php");
class NEGVehiculo{
	public static function eliminarVehiculo($patente){
		$vehiculo=new ClVehiuculo($patente,"","","","","");
		DAOVehiculo::sqlEliminar($patente);
		
      } 
	  public static function modificarVehiculo($id,$patente,$ids,$idm){
		$vehiculo=new ClVehiculo($id,$patente,$ids,$idm);
		DAOVehiculo::sqlModificar($vehiculo);
		echo "wat";
      } 
	
}

?>