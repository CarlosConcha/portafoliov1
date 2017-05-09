<?php
require_once("../neg/NEGEnvio.php"); //importar la clase NEG que corresponda al MVC
if(isset($_GET["lista"])){        //esta wea se matiene no tokar con tus sucias manos coxinas
   $listado=$_GET["lista"];        //esta wea se matiene no tokar con tus sucias manos coxinas
    foreach($listado as $temp){     //esta wea se matiene no tokar con tus sucias manos coxinas
		NEGEnvio::eliminarEnvio($temp);  //ESTA MIERDA SI SE CAMBIA instanciar la clase NEG que impotaron y llamar al unico metodo de la NEG que se llama eliminarWEA y el parametro que se esta ingresando se mantiene cambiar todo en esta linea menos el $temp
	} //cerrar la wea plz
  header('Location: ../index.php');	//esta wea se mantiene
}
if(isset($_POST["btn_modificar"])){
	$codigo=$_POST["txt_cod"];
	$origen=$_POST["cbo_origen"];
	$destino=$_POST["cbo_destino"];
	NEGEnvio::modificarEnvio($codigo,$origen,$destino);
}
if(isset($_POST["btn_insertar"])){
	$codigo=$_POST["txt_cod"];
	$origen=$_POST["cbo_origen"];
	$destino=$_POST["cbo_destino"];
	NEGEnvio::insertarEnvio($codigo,$origen,$destino);
}
?>