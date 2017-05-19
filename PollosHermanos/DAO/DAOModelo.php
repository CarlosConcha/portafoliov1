<?php
require_once("../BD/BD.php");// no cambiar la bd
require_once("../Entidades/ClModelo.php");//ir modificando ClUSUARIO.php por la clase quue corresponda
class DAOModelo{//cambiar DAOUsuario por la DAO que corresponda
	public static function sqlInsertar($modelo){//cambiar el parametro ingresado por el que corresponda a la DAO
		$id_modelo=$modelo->getID_MODELO();
		$nombre_modelo=$modelo->getNOMBRE_MODELO();   
		$capacidad=$modelo->getCAPACIDAD();
		$sql="CALL PR_INSERTAR_MODELO($id_modelo,'$nombre_modelo',$capacidad)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($modelo){//cambiar el parametro ingresado por el que corresponda a la DAO
		$id_modelo=$modelo->getID_MODELO();
		$nombre_modelo=$modelo->getNOMBRE_MODELO();   
		$capacidad=$modelo->getCAPACIDAD();
		$sql="CALL PR_MODIFICAR_MODELO($id_modelo,'$nombre_modelo',$capacidad)"; // cambiar PR_MODIFICAR_USUARIO por PR_MODIFICAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($modelo){//cambiar el parametro ingresado por el que corresponda a la DAO
		$id_modelo=$modelo->getID_MODELO();
		$nombre_modelo=$modelo->getNOMBRE_MODELO();   
		$capacidad=$modelo->getCAPACIDAD();
		$sql="CALL PR_ELIMINAR_MODELO($id_modelo,'$nombre_modelo',$capacidad)";  // cambiar PR_ELIMINAR_USUARIO por PR_ELIMINAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select * from modelo";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
}

?>