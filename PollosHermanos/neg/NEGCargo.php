<?php
require_once("../DAO/DAOCargo.php");//importar la DAO Correspondiente
require_once("../Entidades/ClCargo.php");//importar la Clase Correspondiente
class NEGCargo{ //crear la clase con el nombre correspondiente con el prefijo NEG segudi del nombre 
	public static function eliminarCargo($idCargo){  //crear metodo eliminarWEA y que resiva como parametro la clave primaria de la tabla a la que corresponda la NEG
		$cargo=new ClCargo("",$idCargo);  //instranciar la clase que corresponda y que resiva el parametro donde debe como clave primarya y el resto de valores vacios
		DAOCargo::sqlEliminar($cargo);  //instanciar la dao llamando al metodo estatico sqlEliminar de la DAO a la que corresponda
		
      } //cerrar el puto metodos lacras qlas mas de una ves me mando error en las dao por que le faltaba una } 
	public static function modificarCargo($cargo,$id){
		
		$cargo=new ClCargo($cargo,$id);
		echo "888";
		DAOCargo::sqlModificar($cargo);
	}
	public static function insertarCargo($cargo){
		
		$cargo=new ClCargo($cargo,0);
		echo "887";
		DAOCargo::sqlInsertar($cargo);
	}
}

?>