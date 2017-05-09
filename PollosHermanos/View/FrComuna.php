<?php
require_once("../DAO/DAOComuna.php");
$lista="";
$datos=DAOComuna::sqlSelectTodas();
foreach($datos as $fila){
	$idcom=$fila["ID_COMUNA"];
	$nombre_com=$fila["NOMBRE_COMUNA"];
	
	$lista.="<tr><td><input type='checkbox' name='chk_comuna[]' id='chk_comuna' value='$idcom'></td><td>$idcom</td><td>$nombre_com</td><td><a href='View/FrComunaMod.php?modificar=$idcom' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>


    
	<script>
	$(document).ready(function() {
    $('#Tbcomuna').DataTable();
       } );
	</script>

</head>
<body>
<form method="post" action="View/FrComunaElim.php">
<table id="Tbcomuna" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>ID Comuna</th>
            <th>Nombre Comuna</th>
            <th>Modificar</th> 
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="2"><a href="#" onclick="mostrar('./View/FrComunaInsert.php')" class="btn btn-primary">Insertar</a></td>
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