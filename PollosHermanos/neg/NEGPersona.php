<?php
require_once("../DAO/DAOPersona.php");//importar la DAO Correspondiente
require_once("../Entidades/ClPersona.php");//importar la Clase Correspondiente
class NEGPersona{ //crear la clase con el nombre correspondiente con el prefijo NEG segudi del nombre 
	public static function eliminarPersona($id){  //crear metodo eliminarWEA y que resiva como parametro la clave primaria de la tabla a la que corresponda la NEG
		$persona=new ClPersona("","","","","","","",$id);  //instranciar la clase que corresponda y que resiva el parametro donde debe como clave primarya y el resto de valores vacios
		DAOPersona::sqlEliminar($persona);  //instanciar la dao llamando al metodo estatico sqlEliminar de la DAO a la que corresponda
		
      } //cerrar el puto metodos lacras qlas mas de una ves me mando error en las dao por que le faltaba una } 
	public static function modificarPersona($rut,$nom,$ape,$edad,$sexo,$sede,$cargo,$id){  
		$persona=new ClPersona($rut,$nom,$ape,$edad,$sexo,$sede,$cargo,$id);  
		DAOPersona::sqlModificar($persona); 
		echo "se modifico";
      }
	  public static function insertarPersona($rut,$nom,$ape,$edad,$sexo,$sede,$cargo){  
		$persona=new ClPersona($rut,$nom,$ape,$edad,$sexo,$sede,$cargo,"");  
		DAOPersona::sqlInsertar($persona); 
		echo "se agrego";
      }
}

?>