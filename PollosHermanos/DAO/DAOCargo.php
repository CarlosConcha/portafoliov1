<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClCargo.php");
class DAOCargo{
	public static function sqlInsertar($cargo){
		$carg=$cargo->getCARGO(); 
		$sql="CALL PR_INSERTAR_CARGO('$carg')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($cargo){
		echo $carg=$cargo->getCARGO();
		echo $id=$cargo->getID();  
		echo "999";	
		echo $sql="CALL PR_MODIFICAR_CARGO($id,'$carg')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($cargo){
		$id=$cargo->getID(); 
		echo $sql="CALL PR_ELIMINAR_CARGO($id)"; 
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select * from cargo";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}
              
?>