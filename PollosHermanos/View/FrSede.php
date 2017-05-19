<?php
require_once("../DAO/DAOSede.php");
$lista="";
$datos=DAOSede::sqlSelectTodas();
foreach($datos as $fila){
	$id_sede=$fila[0];
	$nombre=$fila[1];
	$direccion=$fila[2];
	$nombre_comuna=$fila[3];
	$lista.="<tr><td><input type='checkbox' name='chk_sede[]' id='chk_sede' value='$id_sede'></td><td>$id_sede</td><td>$nombre</td><td>$direccion</td><td>$nombre_comuna</td><td><a href='View/FrSedeMod.php?modificar=$id_sede' class='glyphicon glyphicon-wrench'></td> </tr>";
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
            <th>Id</th>
            <th>Nombre Sede</th>
            <th>direccion</th>
            <th>Comuna</th> 	
			<th>Modificar</th>		
        </tr>
    </thead>
    <tfoot>
	<tr>
	<td colspan="3"><a href="#" onclick="mostrar('./View/FrSedeInsert.php')" class="btn btn-primary">Insertar</a></td>
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