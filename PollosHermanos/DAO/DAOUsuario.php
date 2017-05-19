<?php
require_once("../BD/BD.php");// no cambiar la bd
require_once("../Entidades/ClUsuario.php");//ir modificando ClUSUARIO.php por la clase quue corresponda
class DAOUsuario{//cambiar DAOUsuario por la DAO que corresponda
	public static function sqlInsertar($usuario){//cambiar el parametro ingresado por el que corresponda a la DAO
	    $id=$usuario->getID(); 
		$rut=$usuario->getRUT();
		$nombre=$usuario->getNOMBRE();   //cambiar las variables rut,nombre,apellido por los de la clase a la que corresponda
		$apellido=$usuario->getAPELLIDO();
		$codigo=$usuario->getCODIGO();
		echo $sql="CALL PR_INSERTAR_USUARIO('$rut','$nombre','$apellido',$id,'$codigo')";// cambiar PR_INSERTAR_USUARIO por PR_INSERTAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($usuario){//cambiar el parametro ingresado por el que corresponda a la DAO
	    $id=$usuario->getID(); 
		$rut=$usuario->getRUT();
		$nombre=$usuario->getNOMBRE();   //cambiar las variables rut,nombre,apellido por los de la clase a la que corresponda
		$apellido=$usuario->getAPELLIDO();
		$codigo=$usuario->getCODIGO();
		$sql="CALL PR_MODIFICAR_USUARIO($id,'$rut','$nombre','$apellido','$codigo');"; // cambiar PR_MODIFICAR_USUARIO por PR_MODIFICAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($usuario){//cambiar el parametro ingresado por el que corresponda a la DAO
		$id=$usuario->getID();
		echo $sql="CALL PR_ELIMINAR_USUARIO($id)";  // cambiar PR_ELIMINAR_USUARIO por PR_ELIMINAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select * from usuario";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
}

?>