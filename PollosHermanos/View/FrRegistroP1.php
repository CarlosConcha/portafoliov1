<?php
require_once(  $_SERVER["DOCUMENT_ROOT"] . "/PollosHermanos/DAO/DAOUsuario.php");
$lista="";
$datos=DAOUsuario::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila["ID_USUARIO"];
	$rut=$fila["RUT"];
	$nombre=$fila["NOMBRE"];
	$apellido=$fila["APELLIDO"];
	$lista.="<tr><td>$rut</td><td>$nombre</td><td>$apellido</td><td><a href='#' onclick=\"mostrar('./View/FrRegistrar.php?rut=$rut&nombre=$nombre&apellido=$apellido')\" class='glyphicon glyphicon-arrow-right'></td> </tr>";
}
$run="<script>document.getElementById('id_del_elemento').value </script>";
?>

<html>
<head>
    <script type="text/javascript" language="javascript" src="./JS/jquery.Rut.js"></script>
	<script>
	$(document).ready(function() {
    $('#usuario').DataTable();
       } );

	</script>
	<script>
	$('#txt_rut').Rut({
  on_error: function(){ alert('Rut incorrecto'); },
  format_on: 'keyup'
});
	</script>
    <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
	   var i = document.getElementById('usuario');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
		  $("#tablauser").css("display", "none");
          e.style.display = 'block';
    }
	$("#formUsuario").css("display", "none");
    function mostrarget(lista){
					var rut=document.getElementById('txt_rut').value;
					var nombre=document.getElementById('txt_nombre').value;
					var apellido=document.getElementById('txt_apellido').value;
					if(apellido.length<2){
						alert('Complete el campo apellido');
					}else if(rut.length<8){
						alert('Complete el campo rut');
					}else if(nombre.length<2){
						alert('Complete el campo nombre');
					}else {
						$("#campo").load(lista+"?rut="+rut+"&nombre="+nombre+"&apellido="+apellido);
					}
							
			}
//-->
</script>
</head>
<body>
<header>
<div class="container"><h1>Registro paso 1/2</h1></div>
</header>
<br/>
<div id="tablauser">
<table id="usuario" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Envio</th>  
        </tr>
    </thead>
	<tfoot>
	        <td colspan="3"></td>
            <td><a href="#" class="btn btn-danger" onclick="toggle_visibility('formUsuario');">Nuevo Usuario</a></td>  
	</tfoot>
	 <tbody>
      <?php
	  echo $lista
	  ?>    
    </tbody>
</table>
</div>

<div id="formUsuario" class="container" >
<form>
<div class="form-group">
<label for="txt_rut">Rut</label>
<div class="row">
<div class="col-md-2">
<input class="form-control" id="txt_rut" type="text" placeholder="RUT:" name="txt_rut" maxlength="12" required />
</div>
</div>
</div>
<div class="form-group">
<label for="txt_nombre">Nombre</label>
<div class="row">
<div class="col-md-3">
<input class="form-control" id="txt_nombre" type="text" placeholder="Nombre:" name="txt_nombre" maxlength="20" required />
</div>
</div>
</div>
<div class="form-group">
<label for="txt_apellido">Apellido</label>
<div class="row">
<div class="col-md-3">
<input class="form-control" id="txt_apellido" type="text" placeholder="Apellido:" name="txt_apellido"  maxlength="20" required />
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-9">
<a href="#" onclick="mostrarget('./View/FrRegistrar.php')" class="btn btn-default"> >>2/2</a>
</div>
</div>
</form>
</div>
</body>
</html>