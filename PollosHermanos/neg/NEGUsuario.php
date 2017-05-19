<?php
require_once("../DAO/DAOUsuario.php");
require_once("../Entidades/ClUsuario.php");
class NEGUsuario{
	public static function eliminarUsuario($rut){
		$usuario=new ClUsuario($rut,"","","","","");
		DAOUsuario::sqlEliminar($usuario);
		
      } 
	  public static function modificarUsuario($id,$rut,$nom,$ape,$cod){
		$usuario=new ClUsuario($id,$rut,$nom,$ape,$cod);
		DAOUsuario::sqlModificar($usuario);
		
      } 
	  public static function insertarUsuario($rut,$nom,$ape,$cod){
		$usuario=new ClUsuario(0,$rut,$nom,$ape,$cod);
		DAOUsuario::sqlInsertar($usuario);
		
      } 
	
}

?>