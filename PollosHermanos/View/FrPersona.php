<?php
require_once("../DAO/DAOPersona.php");
require_once("../neg/NEGPersona.php");
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
	$lista.="<tr><td><input type='checkbox' name='chk_persona[]' id='chk_persona' value='$id'></td><td>$rut</td><td>$nombre</td><td>$apellido</td><td>$edad</td><td>$sexo</td><td>$sede</td><td>$cargo</td><td><a href='View/FrPersonaIn.php?modificar=$id' class='glyphicon glyphicon-wrench'></td> </tr>";
}

?>
<html>
<head>


	<script>
	$(document).ready(function() {
    $('#usuario').DataTable();
       } );
    function validacion(){
		
		elemento = document.getElementById("chk_persona");
        if( !elemento.checked ) {
			alert('Debe seleccionar un checkbox minimo');
          return false;
        }
	}	   
	</script>
    
</head>
<body>
<form method="post" action="View/FrPersonaElim.php" onsubmit="return validacion()">
<table id="usuario" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>	
			<th>Sede</th>	
			<th>Cargo</th>
			<th>Modificar</th>
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="4"><a href="#" onclick="mostrar('./View/FrPersonaInsert.php')" class="btn btn-primary">Insertar</a></td>
	<td colspan="5"><input class="btn btn-warning" type="submit" name="btn_eliminar" value="eliminar"></td>
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