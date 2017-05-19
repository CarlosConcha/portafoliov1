<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClSede.php");
class DAOSede{
	public static function sqlInsertar($sede){
		
		$idSede=$sede->getID_SEDE();
		$idLoc=$sede->getID_LOCACION();
		$nombre=$sede->getNOMBRE_SEDE();
		$sql="CALL PR_INSERTAR_SEDE($idSede,$idLoc,'$nombre')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($sede){
		$idSede=$sede->getID_SEDE();
		$idLoc=$sede->getID_LOCACION();
		$nombre=$sede->getNOMBRE_SEDE();
		echo $sql="CALL PR_MODIFICAR_SEDE($idSede,$idLoc,'$nombre')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($sede){
		$idSede=$sede->getID_SEDE();
		$idLoc=$sede->getID_LOCACION();
		$nombre=$sede->getNOMBRE_SEDE();
		$sql="CALL PR_ELIMINAR_SEDE($idSede,$idLoc,'$nombre')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select s.id_sede,s.nombre_sede,l.direccion,c.nombre_comuna from sede s".
		" inner join locacion l on s.id_locacion=l.id_locacion".
		" inner join comuna c on l.id_comuna=c.id_comuna";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}