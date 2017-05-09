<?php
require_once("../neg/NEGModelo.php");
if(isset($_GET["lista"])){
   $listado=$_GET["lista"]; 
    foreach($listado as $temp){
		NEGModelo::eliminarModelo($temp);
	} 
  header('Location: ../index.php');
}
?>