<?php
require_once("../BD/BD.php");// no cambiar la bd
require_once("../Entidades/ClVehiculo.php");//ir modificando ClUSUARIO.php por la clase quue corresponda
class DAOVehiculo{//cambiar DAOUsuario por la DAO que corresponda
	public static function sqlInsertar($vehiculo){//cambiar el parametro ingresado por el que corresponda a la DAO
		$patente=$vehiculo->getPATENTE();
		$id_sede=$vehiculo->getID_SEDE();   
		$id_modelo=$vehiculo->getID_MODELO();
		$sql="CALL PR_INSERTAR_VEHICULO('$patente',$id_sede,$id_modelo)";// cambiar PR_INSERTAR_USUARIO por PR_INSERTAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($vehiculo){//cambiar el parametro ingresado por el que corresponda a la DAO
	    $id=$vehiculo->getID_VEHICULO();
		$patente=$vehiculo->getPATENTE();
		$id_sede=$vehiculo->getID_SEDE();   
		$id_modelo=$vehiculo->getID_MODELO();
		echo $sql="CALL PR_MODIFICAR_VEHICULO($id,'$patente',$id_sede,$id_modelo)"; // cambiar PR_MODIFICAR_USUARIO por PR_MODIFICAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($vehiculo){//cambiar el parametro ingresado por el que corresponda a la DAO
		$patente=$vehiculo->getPATENTE();
		$id_sede=$vehiculo->getID_SEDE();   
		$id_modelo=$vehiculo->getID_MODELO();
		$sql="CALL PR_ELIMINAR_VEHICULO('$patente',$id_sede,$id_modelo)";  // cambiar PR_ELIMINAR_USUARIO por PR_ELIMINAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select v.id_modelo,v.patente,m.nombre_modelo,s.nombre_sede from vehiculo v inner join modelo m on v.id_modelo=m.id_modelo inner join sede s on v.id_sede=s.id_sede";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
}

?>