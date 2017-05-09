<?php
require_once("../neg/NEGSede.php");
if(isset($_GET["lista"])){
   $listado=$_GET["lista"]; 
    foreach($listado as $temp){
		NEGSece::eliminarSece($temp);
	} 
  header('Location: ../index.php');
}
if(isset($_POST["btn_modificar"])){
	echo $id=$_POST["txt_id"];
	echo $loc=$_POST["cbo_direc"];
	echo $nombre=$_POST["txt_nombre"];
	NEGSede::modificarSede($id,$loc,$nombre);
}
if(isset($_POST["btn_insertar"])){
	echo $loc=$_POST["cbo_direc"];
	echo $nombre=$_POST["txt_nombre"];
	NEGSede::insertarSede($loc,$nombre);
}
?>