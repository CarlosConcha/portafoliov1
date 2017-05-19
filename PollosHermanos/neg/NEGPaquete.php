<?php
require_once("../Entidades/ClPaquete.php");
require_once("../DAO/DAOPaquete.php");
class NEGPaquete{
	public static function modificarPaquete($id,$altura,$ancho,$cod,$peso){
		$paquete=new ClPaquete($id,$altura,$ancho,$cod,$peso);
		DAOPaquete::sqlModificar($paquete);
	}
	public static function insertarPaquete($altura,$ancho,$cod,$peso){
		$paquete=new ClPaquete(0,$altura,$ancho,$cod,$peso);
		DAOPaquete::sqlInsertar($paquete);
	}
	public static function eliminarPaquete($id){
		$paquete=new ClPaquete($id,"","","","");
		DAOPaquete::sqlEliminar($paquete);
	}
}
?>