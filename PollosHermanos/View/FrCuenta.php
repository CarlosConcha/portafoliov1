<?php
require_once("../DAO/DAOLogin.php");
$lista="";
$datos=DAOlogin::sqlSelectCuenta();
foreach($datos as $fila){
	$nombre=$fila[0];
	$apellido=$fila[1];
	$edad=$fila[2];
	$cargo=$fila[3];
	$sede=$fila[4];
	$rut=$fila[5];
	$sexo=$fila[6];
	$id=$fila[7];
	$lista.="<tr><td>$nombre</td><td>$apellido</td><td>$edad</td><td>$cargo</td><td>$sede</td><td>$rut</td><td>$sexo</td><td><a href='View/FrCargoMod.php?modificar=$id' class='glyphicon glyphicon-wrench'></td><td><a href='View/FrCargoMod.php?modificar=$id' class='glyphicon glyphicon-remove'></td></tr>";
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
		    <th>Nombre</th>
            <th>Apellido</th>
            <th>edad</th>
			<th>Cargo</th>
			<th>Sede</th>
			<th>Rut</th>
            <th>Sexo</th>			
			<th>Modificar</th>
            <th>Eliminar</th>		
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