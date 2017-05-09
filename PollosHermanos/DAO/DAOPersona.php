<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClPersona.php");
class DAOPersona{
	public static function sqlInsertar($persona){
		$rut=$persona->getRUT();
		$nombre=$persona->getNOMBRE();
		$apellido=$persona->getAPELLIDO();
		$edad=$persona->getEDAD();
		$sexo=$persona->getSEXO();
		$idSede=$persona->getID_SEDE();
		$idCargo=$persona->getID_CARGO();
		echo $sql="CALL PR_INSERTAR_PERSONA(0,$rut,'$nombre','$apellido',$edad,'$sexo',$idSede,$idCargo)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($persona){
		$idp=$persona->getID();
		$rut=$persona->getRUT();
		$nombre=$persona->getNOMBRE();
		$apellido=$persona->getAPELLIDO();
		$edad=$persona->getEDAD();
		$sexo=$persona->getSEXO();
		$idSede=$persona->getID_SEDE();
		$idCargo=$persona->getID_CARGO();
		echo $sql="CALL PR_MODIFICAR_PERSONA('$rut','$nombre','$apellido','$sexo',$edad,$idCargo,$idSede,$idp)";
		ClBD::getInstance()->sqlExecute($sql);
		echo "entro a dao";
	}
	public static function sqlEliminar($persona){
		$id=$persona->getID();
		echo $sql="CALL PR_ELIMINAR_PERSONA($id)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select p.id_persona,p.rut,p.nombre,p.apellido,p.edad,p.sexo,s.nombre_sede,c.cargo". 
              " from persona p inner join sede s on p.id_sede=s.id_sede". 
			  " inner join cargo c on p.id_cargo=c.id_cargo";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}	
		
}