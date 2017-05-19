<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClPaquete.php");
class DAOPaquete{
	public static function sqlInsertar($paquete){
		$idPaquete=$paquete->getID_PAQUETE();
		$altura=$paquete->getALTURA();
		$ancho=$paquete->getANCHO();
		$cod_envio=$paquete->getCOD_ENVIO();
		$peso=$paquete->getPESO();
		$sql="CALL PR_INSERTAR_PAQUETE($idPaquete,$altura,$ancho,'$cod_envio',$peso)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($paquete){
		$idPaquete=$paquete->getID_PAQUETE();
		$altura=$paquete->getALTURA();
		$ancho=$paquete->getANCHO();
		$cod_envio=$paquete->getCOD_ENVIO();
		$peso=$paquete->getPESO();
		$sql="CALL PR_MODIFICAR_PAQUETE($idPaquete,$altura,$ancho,'$cod_envio',$peso)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($paquete){
		$idPaquete=$paquete->getID_PAQUETE();
		
		echo $sql="CALL PR_ELIMINAR_PAQUETE($idPaquete)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select * from paquete";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}