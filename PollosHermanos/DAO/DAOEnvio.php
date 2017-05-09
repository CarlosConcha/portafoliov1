<?php
require_once("../BD/BD.php");
require_once("../Entidades/ClEnvio.php");
class DAOenvio{
	public static function sqlInsertar($envio){   
		$CODIGO=$envio->getCODIGO();
        $ID_SEDE_O=$envio->getID_SEDE_O();
        $ID_SEDE_D=$envio->getID_SEDE_D();
		echo $sql="CALL PR_INSERTAR_ENVIO('$CODIGO',$ID_SEDE_O,$ID_SEDE_D)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($envio){
		$cod=$envio->getCODIGO();
        $origen=$envio->getID_SEDE_O();
        $destino=$envio->getID_SEDE_D();	
		$sql="CALL PR_MODIFICAR_ENVIO('$cod',$origen,$destino)";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($envio){
		$CODIGO=$envio->getCODIGO();
		echo $sql="CALL PR_ELIMINAR_ENVIO('$ID_envio')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas(){
		$sql="select en.reg_fecha,seo.nombre_sede as origen,sed.nombre_sede as destino,en.codigo 
             from envio en 
             inner join sede seo on en.id_sede_o=seo.id_sede 
             inner join sede sed on en.id_sede_d=sed.id_sede";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}
	public static function sqlSelectRuta(){
		$sql="select en.id_sede_o,en.id_sede_d,seo.nombre_sede,sed.nombre_sede,en.codigo from envio en inner join sede seo on en.id_sede_o=seo.id_sede inner join sede sed on en.id_sede_d=sed.id_sede";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}
  }	
?>