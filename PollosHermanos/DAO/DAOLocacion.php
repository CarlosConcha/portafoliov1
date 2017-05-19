<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClLocacion.php");
class DAOLocacion{
	public static function sqlInsertar($locacion){
		
		$direccion=$locacion->getDIRECCION();
		$idComuna=$locacion->getID_COMUNA();
		$sql="CALL PR_INSERTAR_LOCACION(0,'$direccion','$idComuna')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($locacion){
		$idLocacion=$locacion->getID_LOCACION();
		$direccion=$locacion->getDIRECCION();
		$idComuna=$locacion->getID_COMUNA();
		echo $sql="CALL PR_MODIFICAR_LOCACION($idLocacion,'$direccion',$idComuna)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($locacion){
		$idLocacion=$locacion->getID_LOCACION();
		echo $sql="CALL PR_ELIMINAR_LOCACION($idLocacion)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select loc.id_locacion,loc.direccion,com.nombre_comuna from locacion loc inner join comuna com on loc.id_comuna=com.id_comuna";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}