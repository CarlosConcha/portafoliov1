<?php
require_once("../DAO/DAOPaquete.php");
$lista="";
$datos=DAOPaquete::sqlSelectTodas();
foreach($datos as $fila){
	$id_paquete=$fila["ID_PAQUETE"];
	$altura=$fila["ALTURA"];
	$ancho=$fila["ANCHO"];
	$cod_envio=$fila["COD_ENVIO"];
	$peso=$fila["PESO"];
	$lista.="<tr><td><input type='checkbox' name='chk_paquete[]' id='chk_paquete' value='$id_paquete'></td><td>$id_paquete</td><td>$altura</td><td>$ancho</td><td>$cod_envio</td><td>$peso</td><td><a href='View/FrPaqueteMod.php?modificar=$id_paquete' class='glyphicon glyphicon-wrench'></td> </tr>";
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
<form method="post" action="View/FrPaqueteElim.php">
<table id="usuario" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>ID Paquete</th>
            <th>Altura(cm)</th>
            <th>Ancho(cm)</th>
            <th>Codigo Envio</th>
            <th>Peso(kg)</th> 
 			<th>Modificar</th>
   			
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="3"><a href="#" onclick="mostrar('./View/FrPaqueteInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="4"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
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