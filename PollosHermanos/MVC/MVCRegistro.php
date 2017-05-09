<?php
require_once("../DAO/DAOEnvio.php");
require_once("../neg/NEGUsuario.php");
require_once("../neg/NEGEnvio.php");
require_once("../neg/NEGPaquete.php");
if(isset($_GET["lista"])){
   $listado=$_GET["lista"]; 
    foreach($listado as $temp){
		NEGUsuario::eliminarVehiculo($temp);
	} 
  header('Location: ../index.php');
}
if(isset($_POST["btn_modificar"])){
	echo $id=$_POST["txt_id"];
	echo $patente=$_POST["txt_patente"];
	echo $ids=$_POST["cbo_sede"];
	echo $idm=$_POST["cbo_modelo"];
	NEGUsuario::modificarVehiculo($id,$patente,$ids,$idm);
}
if(isset($_POST["btn_insertar"])){
	echo $rut=$_POST["txt_rut"];
	echo $nombre=$_POST["txt_nombre"];
	echo $apellido=$_POST["txt_apellido"];
	echo $sedeo=$_POST["cbo_origen"];
	echo $seded=$_POST["cbo_destino"];
	echo $altura=$_POST["txt_altura"];
	echo $ancho=$_POST["txt_ancho"];
	echo $peso=$_POST["txt_peso"];
	$env=true;
	$codran=rand(11111, 99999);
	$codigo="";
	$datos=DAOEnvio::sqlSelectRuta();
	foreach($datos as $temp){
		if($sedeo==$temp[0] && $seded==$temp[1]){
			$env=false;
			$codigo=$temp[4];
			break;
		}
	}
	if($env){
	  NEGEnvio::insertarEnvio($codran,$sedeo,$seded);
	  NEGUsuario::insertarUsuario($rut,$nombre,$apellido,$codran);
	  NEGPaquete::insertarPaquete($altura,$ancho,$codran,$peso);
	}else{
		NEGUsuario::insertarUsuario($rut,$nombre,$apellido,$codigo);
		NEGPaquete::insertarPaquete($altura,$ancho,$codigo,$peso);
	}
	
	
}
?>