<?php
require_once("../DAO/DAOCargo.php");
$lista="";
$datos=DAOCargo::sqlSelectTodas();
foreach($datos as $fila){
	$rut=$fila["ID_CARGO"];
	$cargo=$fila["CARGO"];
	$lista.="<tr><td><input type='checkbox' name='chk_cargo[]' id='chk_cargo' value='$rut'></td><td>$rut</td><td>$cargo</td><td><a href='View/FrCargoMod.php?modificar=$rut' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>


    
	<script>
	$(document).ready(function() {
    $('#TBcargo').DataTable();
       } );
	</script>

</head>
<body>
<form method="post" action="View/FrCargoElim.php">
<table id="TBcargo" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>ID Cargo</th>
            <th>Cargo</th>   
			<th>Modificar</th>      
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="2"><a href="#" onclick="mostrar('./View/FrCargoInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="2"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
	</tr>
	</tfoot>
	 <tbody>
      <?php
	  echo $lista
	  ?>    
    </tbody>
	<tfoot>
	
	</tfoot>
</table>
</form>
</body>
</html>