<?php
require_once("../neg/NEGComuna.php"); //importar la clase NEG que corresponda al MVC
if(isset($_GET["lista"])){        //esta wea se matiene no tokar con tus sucias manos coxinas
   $listado=$_GET["lista"];        //esta wea se matiene no tokar con tus sucias manos coxinas
    foreach($listado as $temp){     //esta wea se matiene no tokar con tus sucias manos coxinas
		NEGComuna::eliminarComuna($temp);  //ESTA MIERDA SI SE CAMBIA instanciar la clase NEG que impotaron y llamar al unico metodo de la NEG que se llama eliminarWEA y el parametro que se esta ingresando se mantiene cambiar todo en esta linea menos el $temp
	} //cerrar la wea plz
  //header('Location: ../index.php');	//esta wea se mantiene
}
if(isset($_POST["btn_modificar"])){
	$id=$_POST["txt_id"];
	$comuna=$_POST["txt_comuna"];
	NEGComuna::modificarComuna($id,$comuna);
}
if(isset($_POST["btn_insertar"])){
	$comuna=$_POST["txt_comuna"];
	NEGComuna::insertarComuna($comuna);
}
?>