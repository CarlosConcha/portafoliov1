<?php
require_once("../neg/NEGPaquete.php");
if(isset($_GET["lista"])){
   $listado=$_GET["lista"]; 
    foreach($listado as $temp){
		NEGPaquete::eliminarPaquete($temp);
	} 
  //header('Location: ../index.php');
}
if(isset($_POST["btn_modificar"])){
	$id=$_POST["txt_id"];
	$altura=$_POST["txt_altura"];
	$ancho=$_POST["txt_ancho"];
	$cod=$_POST["cbo_codigo"];
	$peso=$_POST["txt_peso"];
	NEGPaquete::modificarPaquete($id,$altura,$ancho,$cod,$peso);
}
if(isset($_POST["btn_insertar"])){
	$altura=$_POST["txt_altura"];
	$ancho=$_POST["txt_ancho"];
	$cod=$_POST["cbo_codigo"];
	$peso=$_POST["txt_peso"];
	NEGPaquete::insertarPaquete($altura,$ancho,$cod,$peso);
}
?>