<?php
require_once("../DAO/DAOLogin.php");
require_once("../Entidades/ClLogin.php");
class NEGLogin{
	public static function eliminarSede($id_sede){
		$login=new ClLogin($id_sede,"","","","","");
		DAOLogin::sqlEliminar($sede);
		
      }
    public static function modificarSede($id,$loc,$nombre){
		echo "ola1";
		$login=new ClLogin($id,$loc,$nombre);
		DAOLogin::sqlModificar($sede);
		
    } 
	 public static function insertarLogin($per,$user,$pass){
		echo "ola1";
		$login=new ClLogin(0,$per,$user,$pass);
		DAOLogin::sqlInsertar($login);
		
    } 
	public static function validarLogin($user,$pass){
		$login=new ClLogin("","",$user,$pass);
	    $valido=count(DAOLogin::sqlselectTodas($login));
		if($valido==1){
			session_start();
		    $_SESSION["usuario"]=DAOLogin::sqlselectTodas($login);
			return true;
		}
		return false;	
    } 
}

?>