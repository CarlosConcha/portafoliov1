<?php 
require_once("../DAO/DAOSede.php");
$sedes=DAOSede::sqlSelectTodas();
$rut=$_GET["rut"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
session_start();
$veri=$_SESSION["usuario"];
foreach($veri as $datos){
	$sedeo=$datos[4];
}
?>
<html>
<head>
<title>Insertar</title>
<script>
	$(document).ready(function() {
    $('#TBenvio').DataTable();
       } );
	</script>
	<script>
	$('#cbo_origen').attr('disabled', true);
	$('#formreg').on('submit', function() {
    $('#cbo_origen').attr('disabled', false);
});
	</script>
</head>
<body>
<header>
<div class="container"><h1>Registro paso 2/2</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Ingrese los Datos para completar el envio del paquete:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCRegistro.php" name="formreg" id="formreg">
<div class="form-group">
<label for="txt_rut">Rut</label>
<input class="form-control" id="txt_rut" type="text" placeholder="RUT:" name="txt_rut" size="15" value="<?=$rut?>" readonly required />
</div>
<div class="form-group">
<label for="txt_nombre">Nombre</label>
<input class="form-control" id="txt_nombre" type="text" placeholder="Nombre:" name="txt_nombre" value="<?=$nombre?>" readonly required />
</div>
<div class="form-group">
<label for="txt_apellido">Apellido</label>
<input class="form-control" id="txt_apellido" type="text" placeholder="Apellido:" name="txt_apellido" value="<?=$apellido?>" readonly required />
</div>
<div class="form-group tamcbo">
<label for="cbo_origen">Sede Origen</label>
 <select id="cbo_origen" name="cbo_origen" class="form-control" >
  <?php 
  foreach($sedes as $temp){
	  if($temp[1]!=$sedeo){
	  echo "<option value='$temp[0]'>$temp[1]</option>";
	  }else{
	   echo "<option value='$temp[0]' selected>$temp[1]</option>";
	  }
  }
  ?>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_destino">Sede Destino</label>
 <select id="cbo_destino" name="cbo_destino" class="form-control">
  <?php 
  foreach($sedes as $temp){
	  echo "<option value='$temp[0]'>$temp[1]</option>"; 
  }
  ?>
</select> 
</div>
<div class="form-group">
<label for="txt_altura">Altura(cm)</label>
<input class="form-control" id="txt_altura" type="text" placeholder="Altura(cm):" name="txt_altura"  required />
</div>
<div class="form-group">
<label for="txt_ancho">ancho(cm)</label>
<input class="form-control" id="txt_ancho" type="text" placeholder="ancho(cm):" name="txt_ancho"  required />
</div>
<div class="form-group">
<label for="txt_peso">Peso(g)</label>
<input class="form-control" id="txt_peso" type="text" placeholder="Peso(g):" name="txt_peso"  required />
</div>
<input class="btn btn-primary" type="submit" value="Enviar" name="btn_insertar"/>
</form>
</div>
</div>
</div>
</body>
</html>