<?php
require_once("../DAO/DAOEnvio.php");
$lista="";
$datos=DAOEnvio::sqlSelectTodas();
foreach($datos as $fila){
	$fecha=$fila[0];
	$idsedeo=$fila[1];
	$idseded=$fila[2];
	$cod=$fila[3];
	$lista.="<tr><td><input type='checkbox' name='chk_envio[]' id='chk_envio' value='$cod'></td><td>$fecha</td><td>$idsedeo</td><td>$idseded</td><td>$cod</td> <td><a href='View/FrEnvioMod.php?modificar=$cod' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>
     
	<script>
	$(document).ready(function() {
    $('#TBenvio').DataTable();
       } );
	</script>

</head>
<body>
<form method="post" action="View/FrEnvioElim.php">
<table id="TBenvio" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>Fecha Registro</th>
            <th>Sede Origen</th>
            <th>Sede Destino</th>
            <th>Codigo</th> 
            <th>Modificar</th>			
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="3"><a href="#" onclick="mostrar('./View/FrEnvioInsert.php')" class="btn btn-primary">Insertar</a></td>
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