<?php
require_once("../neg/NEGLocacion.php"); 
if(isset($_GET["lista"])){    
   $listado=$_GET["lista"];   
    foreach($listado as $temp){ 
		NEGLocacion::eliminarLocacion($temp);
	} 
 // header('Location: ../index.php');
}
if(isset($_POST["btn_modificar"])){
	$id=$_POST["txt_id"];
	$direc=$_POST["txt_dir"];
	$comuna=$_POST["cbo_comun"];
	NEGLocacion::modificarLocacion($id,$direc,$comuna);
}
if(isset($_POST["btn_insertar"])){
	
	$direc=$_POST["txt_dir"];
	$comuna=$_POST["cbo_comun"];
	NEGLocacion::insertarLocacion($direc,$comuna);
}
?>