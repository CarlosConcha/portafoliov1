<?php
require_once("../BD/BD.php");// no cambiar la bd
require_once("../Entidades/ClLogin.php");//ir modificando ClUSUARIO.php por la clase quue corresponda
class DAOLogin{//cambiar DAOUsuario por la DAO que corresponda
	public static function sqlInsertar($login){//cambiar el parametro ingresado por el que corresponda a la DAO
        $id_persona=$login->getIdPersona(); 
        $username=$login->getUsername(); 
        $userpass=$login->getUserpass(); 
		echo $sql="insert into login(id_persona,username,userpass) values($id_persona,'$username','$userpass')";
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlModificar($login){//cambiar el parametro ingresado por el que corresponda a la DAO
	    $id_login=$login->getIdLogin();  
        $id_persona=$login->getIdPersona(); 
        $username=$login->getUsername(); 
        $userpass=$login->getUserpass(); 
		echo $sql="CALL PR_MODIFICAR_VEHICULO()"; // cambiar PR_MODIFICAR_USUARIO por PR_MODIFICAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlEliminar($login){//cambiar el parametro ingresado por el que corresponda a la DAO
		$id_login=$login->getIdLogin();  
        $id_persona=$login->getIdPersona(); 
        $username=$login->getUsername(); 
        $userpass=$login->getUserpass(); 
		$sql="CALL PR_ELIMINAR_VEHICULO()";  // cambiar PR_ELIMINAR_USUARIO por PR_ELIMINAR_CLASE donde clase es la clase que corresponde
		ClBD::getInstance()->sqlExecute($sql);
	}
	public static function sqlSelectTodas($login){
		echo $username=$login->getUsername(); 
        echo $userpass=$login->getUserpass();
	    echo $sql="select pe.nombre,pe.apellido,pe.edad,ca.cargo,se.nombre_sede,pe.rut,pe.sexo
                from login log
                inner join persona pe on log.id_persona=pe.id_persona
                inner join cargo ca on pe.id_cargo=ca.id_cargo
                inner join sede se on pe.id_sede=se.id_sede
              where log.username='$username' and log.userpass='$userpass'";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}
    public static function sqlSelectCuenta(){
	    $sql="select pe.nombre,pe.apellido,pe.edad,ca.cargo,se.nombre_sede,pe.rut,pe.sexo,log.id_login
                from login log
                inner join persona pe on log.id_persona=pe.id_persona
                inner join cargo ca on pe.id_cargo=ca.id_cargo
                inner join sede se on pe.id_sede=se.id_sede";
		return ClBD::getInstance()->sqlSelectTodas($sql);
	}		
}

?>