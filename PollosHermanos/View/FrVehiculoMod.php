<?php 
require_once("../DAO/DAOVehiculo.php");
require_once("../DAO/DAOSede.php");
require_once("../DAO/DAOModelo.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);

$datos=DAOVehiculo::sqlSelectTodas();
$sedes=DAOSede::sqlSelectTodas();
$modelos=DAOModelo::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila[0]){
			$id_modelo=$fila[0];
	        $patente=$fila[1];
	        $nombre_modelo=$fila[2];
	        $nombre_sede=$fila[3];		
		}	
	
}

?>
<html>
<head>
<title>Modificar</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" language="javascript" src="../JS/setSelect.js"></script>

</head>
<body>
<header>
<div class="container"><h1>Modificar Datos del Vehiculo</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCVehiculo.php">
<div class="form-group">
<label for="txt_id">ID Vehiculo</label>
<input class="form-control" id="txt_id" type="text" placeholder="Id:" name="txt_id" size="15" value="<?=$id_modelo?>" readonly required />

</div>
<div class="form-group">
<label for="txt_patente">Patente</label>
<input class="form-control" id="txt_patente" type="text" placeholder="Patente:" name="txt_patente" value="<?=$patente?>" required />
</div>
<div class="form-group tamcbo">
<label for="cbo_modelo">Modelo</label>
 <select id="cbo_modelo" name="cbo_modelo" class="form-control">
  <?php 
  foreach($modelos as $temp){
	  if($temp[1]!=$nombre_modelo){
		  echo "<option value='$temp[0]'>$temp[1]</option>";
	  }else {
		  echo "<option value='$temp[0]' selected>$temp[1]</option>";
	  }
	  
  }
  ?>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_sede">Sede</label>
 <select id="cbo_sede" name="cbo_sede" class="form-control">
  <?php 
  foreach($sedes as $temp){
	  if($temp[1]!=$nombre_sede){
		  echo "<option value='$temp[0]'>$temp[1]</option>";
	  }else {
		  echo "<option value='$temp[0]' selected>$temp[1]</option>";
	  }
	  
  }
  ?>
</select> 
</div>
<input class="btn btn-info" type="submit" value="modificar" name="btn_modificar"/>
</form>
</div>
</div>
</div>
</body>
</html>