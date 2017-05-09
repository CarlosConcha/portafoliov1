<?php
require_once("../neg/NEGVehiculo.php");
if(isset($_GET["lista"])){
   $listado=$_GET["lista"]; 
    foreach($listado as $temp){
		NEGVehiculo::eliminarVehiculo($temp);
	} 
  header('Location: ../index.php');
}
if(isset($_POST["btn_modificar"])){
	echo $id=$_POST["txt_id"];
	echo $patente=$_POST["txt_patente"];
	echo $ids=$_POST["cbo_sede"];
	echo $idm=$_POST["cbo_modelo"];
	NEGVehiculo::modificarVehiculo($id,$patente,$ids,$idm);
}
?>