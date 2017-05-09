<?php
require_once(  $_SERVER["DOCUMENT_ROOT"] . "/PollosHermanos/DAO/DAOUsuario.php");
$lista="";
$datos=DAOUsuario::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila["ID_USUARIO"];
	$rut=$fila["RUT"];
	$nombre=$fila["NOMBRE"];
	$apellido=$fila["APELLIDO"];
	$cod=$fila["COD_ENVIO"];
	$lista.="<tr><td><input type='checkbox' name='chk_usuario[]' id='chk_usuario' value='$id'></td><td>$rut</td><td>$nombre</td><td>$apellido</td><td>$cod</td><td><a href='View/FrUsuarioMod.php?modificar=$id' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>


    
	<script>
	$(document).ready(function() {
    $('#usuario').DataTable();
       } );
	</script>

</head>
<body>
<form method="post" action="View/FrUsuarioElim.php" onsubmit="return validacion()">
<table id="usuario" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido</th>
			<th>Codigo Envio</th>
            <th>Modificar</th>  
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="3"><a href="#" onclick="mostrar('./View/FrUsuarioInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="3"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
	</tr>
	</tfoot>
	 <tbody>
      <?php
	  echo $lista
	  ?>    
    </tbody>
</table>
</form>
</body>
</html>