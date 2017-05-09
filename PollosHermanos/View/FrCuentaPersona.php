<?php
require_once("../DAO/DAOPersona.php");

$lista="";

$datos=DAOPersona::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila[0];
	$rut=$fila[1];
	$nombre=$fila[2];
	$apellido=$fila[3];
	$edad=$fila[4];
	$sexo=$fila[5];
	$sede=$fila[6];
	$cargo=$fila[7];
	$lista.="<tr><td>$rut</td><td>$nombre</td><td>$apellido</td><td>$edad</td><td>$sexo</td><td>$sede</td><td>$cargo</td> <td><a href='#' onclick=\"mostrar('View/FrCuentaInsert.php?id=$id')\" class='glyphicon glyphicon-plus'></td> </tr>";
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

<table id="TBcargo" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th>Rut</th>
		    <th>Nombre</th>
            <th>Apellido</th>
            <th>edad</th>
			<th>Sexo</th>
            <th>Sede</th>			
			<th>Cargo</th>		
            <th>Crear</th> 			
        </tr>
    </thead>
	 <tbody>
      <?php
	  echo $lista
	  ?>    
    </tbody>
	
</table>

</body>
</html>