<?php
require_once("../neg/NEGUsuario.php");

if(isset($_GET["lista"])){        
   $listado=$_GET["lista"];        
    foreach($listado as $temp){   
		NEGUsuario::eliminarUsuario($temp);  
	} 
  //header('Location: ../index.php');	
}
	
	if(isset($_POST["btn_modificar"])){
     echo $id=$_POST["txt_id"];
	 echo $rut=$_POST["txt_rut"];
	 echo $nombre=$_POST["txt_nombre"];
	 echo $apellido=$_POST["txt_apellido"];
	 echo $codigo=$_POST["cbo_envio"];
	 NEGUsuario::modificarUsuario($id,$rut,$nombre,$apellido,$codigo);
	 echo "modifico";
	} 
	if(isset($_POST["btn_insertar"])){
    
	  $rut=$_POST["txt_rut"];
	  $nombre=$_POST["txt_nombre"];
	  $apellido=$_POST["txt_apellido"];
	  $codigo=$_POST["cbo_envio"];
	 NEGUsuario::insertarUsuario($rut,$nombre,$apellido,$codigo);
	 echo "modifico";
	} 
  //header('Location: ../index.php');

?>