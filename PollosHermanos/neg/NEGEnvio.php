<?php
require_once("../DAO/DAOEnvio.php");//importar la DAO Correspondiente
require_once("../Entidades/ClEnvio.php");//importar la Clase Correspondiente
class NEGEnvio{ //crear la clase con el nombre correspondiente con el prefijo NEG segudi del nombre 
	public static function eliminarEnvio($codigo){  //crear metodo eliminarWEA y que resiva como parametro la clave primaria de la tabla a la que corresponda la NEG
		$envio=new ClEnvio($codigo,"","","","","");  //instranciar la clase que corresponda y que resiva el parametro donde debe como clave primarya y el resto de valores vacios
		DAOEnvio::sqlEliminar($envio);  //instanciar la dao llamando al metodo estatico sqlEliminar de la DAO a la que corresponda
		
      } //cerrar el puto metodos lacras qlas mas de una ves me mando error en las dao por que le faltaba una } 
	public static function modificarEnvio($codigo,$origen,$destino){
		$envio=new ClEnvio($codigo,"",$origen,$destino);
		DAOEnvio::sqlModificar($envio);
	} 
	public static function insertarEnvio($codigo,$origen,$destino){
		$envio=new ClEnvio($codigo,"",$origen,$destino);
		DAOEnvio::sqlInsertar($envio);
	} 
}

?>