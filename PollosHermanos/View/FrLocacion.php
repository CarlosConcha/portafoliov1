<?php
require_once("../DAO/DAOLocacion.php");
$lista="";
$datos=DAOLocacion::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila[0];
	$direccion=$fila[1];
	$comuna=$fila[2];	
	$lista.="<tr><td><input type='checkbox' name='chk_locacion[]' id='chk_locacion' value='$id'></td><td>$direccion</td><td>$comuna</td><td><a href='View/FrLocacionMod.php?modificar=$id' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>


    
	<script>
	$(document).ready(function() {
    $('#TBlocacion').DataTable();
       } );
	</script>

</head>
<body>
<form method="post" action="View/FrLocacionElim.php" >
<table id="TBlocacion" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>Direccion</th>
            <th>Comuna</th>
            <th>Modificar</th>			
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="2"><a href="#" onclick="mostrar('./View/FrLocacionInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="2"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
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