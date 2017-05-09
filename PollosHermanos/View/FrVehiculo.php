<?php
require_once("../DAO/DAOVehiculo.php");
$lista="";
$datos=DAOVehiculo::sqlSelectTodas();
foreach($datos as $fila){
	$id_modelo=$fila[0];
	$patente=$fila[1];
	$nombre_modelo=$fila[2];
	$nombre_sede=$fila[3];
	$lista.="<tr><td><input type='checkbox' name='chk_vehiculo[]' id='chk_vehiculo' value='$id_modelo'></td><td>$id_modelo</td><td>$patente</td><td>$nombre_modelo</td><td>$nombre_sede</td><td><a href='View/FrVehiculoMod.php?modificar=$id_modelo' class='glyphicon glyphicon-wrench'></td> </tr>";
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
<table id="usuario" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>ID</th>
            <th>Patente</th>
            <th>Modelo</th> 
            <th>Sede</th>
			<th>Modificar</th>  			
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="3"><a href="#" onclick="mostrar('./View/FrPersonaInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="3"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
	</tr>
	</tfoot>
	 <tbody>
      <?php
	  echo $lista
	  ?>    
    </tbody>
</table>
</body>
</html>