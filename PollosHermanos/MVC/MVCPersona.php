<?php
require_once("../neg/NEGPersona.php"); //importar la clase NEG que corresponda al MVC
if(isset($_GET["lista"])){        //esta wea se matiene no tokar con tus sucias manos coxinas
   $listado=$_GET["lista"];        //esta wea se matiene no tokar con tus sucias manos coxinas
    foreach($listado as $temp){     //esta wea se matiene no tokar con tus sucias manos coxinas
		NEGPersona::eliminarPersona($temp);  //ESTA MIERDA SI SE CAMBIA instanciar la clase NEG que impotaron y llamar al unico metodo de la NEG que se llama eliminarWEA y el parametro que se esta ingresando se mantiene cambiar todo en esta linea menos el $temp
	
	}
     }	//cerrar la wea plz
	
	if(isset($_POST["btn_modificar"])){
		echo "saludo1";
		echo $id=$_POST["txt_id"];
		echo $rut=$_POST["txt_rut"];
		echo $nombre=$_POST["txt_nombre"];
		echo $apellido=$_POST["txt_apellido"];
		echo $edad=$_POST["cbo_edad"];
		echo $sexo=$_POST["cbo_sexo"];
		echo $cargo=$_POST["cbo_cargo"];
		echo $sede=$_POST["cbo_sede"];
		NEGPersona::modificarPersona($rut,$nombre,$apellido,$edad,$sexo,$sede,$cargo,$id);
		echo "saludo2";
	}
	if(isset($_POST["btn_insertar"])){
		echo $rut=$_POST["txt_rut"];
		echo $nombre=$_POST["txt_nombre"];
		echo $apellido=$_POST["txt_apellido"];
		echo $edad=$_POST["cbo_edad"];
		echo $sexo=$_POST["cbo_sexo"];
		echo $cargo=$_POST["cbo_cargo"];
		echo $sede=$_POST["cbo_sede"];
		NEGPersona::insertarPersona($rut,$nombre,$apellido,$edad,$sexo,$sede,$cargo);
		echo "saludo2";
	}
  //header('Location: ../index.php');	

?>