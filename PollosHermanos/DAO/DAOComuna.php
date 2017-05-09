<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClComuna.php");
class DAOComuna{
	public static function sqlInsertar($comuna){
		
		$NOMBRE_COMUNA=$comuna->getNOMBRE_COMUNA();   
		$sql="CALL PR_INSERTAR_COMUNA('$NOMBRE_COMUNA')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($comuna){
		$ID_COMUNA=$comuna->getID_COMUNA();
		$NOMBRE_COMUNA=$comuna->getNOMBRE_COMUNA();  
		$sql="CALL PR_MODIFICAR_COMUNA($ID_COMUNA,'$NOMBRE_COMUNA')"; 
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($comuna){
		$ID_COMUNA=$comuna->getID_COMUNA();
		$NOMBRE_COMUNA=$comuna->getNOMBRE_COMUNA();          
		 echo $sql="CALL PR_ELIMINAR_COMUNA($ID_COMUNA)";  
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select * from comuna";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}
?>