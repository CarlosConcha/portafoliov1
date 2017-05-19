<?php
require_once("../DAO/DAOComuna.php");//importar la DAO Correspondiente
require_once("../Entidades/ClComuna.php");//importar la Clase Correspondiente
class NEGComuna{ //crear la clase con el nombre correspondiente con el prefijo NEG segudi del nombre 
	public static function eliminarComuna($idComuna){  //crear metodo eliminarWEA y que reciba como parametro la clave primaria de la tabla a la que corresponda la NEG
		$comuna=new ClComuna($idComuna,"","");  //instranciar la clase que corresponda y que resiva el parametro donde debe como clave primarya y el resto de valores vacios
		DAOComuna::sqlEliminar($comuna);  //instanciar la dao llamando al metodo estatico sqlEliminar de la DAO a la que corresponda
		
      } //cerrar el puto metodos lacras qlas mas de una ves me mando error en las dao por que le faltaba una } 
	public static function modificarComuna($id,$nombre){
		$comuna=new ClComuna($id,$nombre);
		DAOComuna::sqlModificar($comuna);

	}
	public static function insertarComuna($nombre){
		$comuna=new ClComuna("",$nombre);
		DAOComuna::sqlInsertar($comuna);

	}
}

?>