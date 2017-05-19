<?php
require_once("../neg/NEGCargo.php"); 
if(isset($_GET["lista"])){        
   $listado=$_GET["lista"];        
    foreach($listado as $temp){   
		NEGCargo::eliminarCargo($temp);  
	} 
  //header('Location: ../index.php');	
}
if(isset($_POST["btn_modificar"])){
	echo $idc=$_POST["txt_id"];
	echo $cargo=$_POST["txt_cargo"];
	NEGCargo::modificarCargo($cargo,$idc); 
}
if(isset($_POST["btn_insertar"])){
	echo $cargo=$_POST["txt_cargo"];
	NEGCargo::insertarCargo($cargo); 
}
?>