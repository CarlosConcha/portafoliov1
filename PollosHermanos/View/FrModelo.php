<?php
require_once("../DAO/DAOModelo.php");
$lista="";
$datos=DAOModelo::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila[0];
	$nombre=$fila[1];
	$capacidad=$fila[2];
	$lista.="<tr><td><input type='checkbox' name='chk_modelo[]' id='chk_modelo' value='$id'></td><td>$id</td><td>$nombre</td><td>$capacidad</td><td><a href='#' class='glyphicon glyphicon-wrench'></td> </tr>";
}
?>
<html>
<head>


    
	<script>
	$(document).ready(function() {
    $('#TBmodelo').DataTable();
       } );
	</script>

</head>
<body>
<table id="TBmodelo" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
		    <th></th>
            <th>ID</th>
            <th>Modelo</th>
            <th>Capacidad</th>  
            <th>Modificar</th> 			
        </tr>
    </thead>
	<tfoot>
	<tr>
	<td colspan="2"><a href="#" onclick="mostrar('./View/FrPersonaInsert.php')" class="btn btn-primary">Insertar</a></td>
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