<?php
require_once("../neg/NEGLogin.php");
if(isset($_POST["btn_insertar"])){
       $user=$_POST["txt_usuario"];
	   $pass=md5($_POST["txt_pass"]);
	   $id=$_POST["txt_id"];
	   NEGLogin::insertarLogin($id,$user,$pass);
}
if(isset($_POST["btn_modificar"])){
	echo $id=$_POST["txt_id"];
	echo $patente=$_POST["txt_patente"];
	echo $ids=$_POST["cbo_sede"];
	echo $idm=$_POST["cbo_modelo"];
	NEGVehiculo::modificarVehiculo($id,$patente,$ids,$idm);
}
if(isset($_POST["btn_eliminar"])){
	echo $id=$_POST["txt_id"];
	echo $patente=$_POST["txt_patente"];
	echo $ids=$_POST["cbo_sede"];
	echo $idm=$_POST["cbo_modelo"];
	NEGVehiculo::modificarVehiculo($id,$patente,$ids,$idm);
}
if(isset($_POST["btn_login"])){
	 $username=$_POST["txt_user"];
	 $userpass=md5($_POST["txt_pass"]);
	if(NEGLogin::validarLogin($username,$userpass)){
		header('location: ../index.php');
	}else{
		header('location: ../View/FrLogin.php?acceso=acceso');
	}
}
?>