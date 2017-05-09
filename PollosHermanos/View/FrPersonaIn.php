<?php 
require_once("../DAO/DAOPersona.php");
require_once("../DAO/DAOSede.php");
require_once("../DAO/DAOCargo.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);

$datos=DAOPersona::sqlSelectTodas();
$sedes=DAOSede::sqlSelectTodas();
$cargos=DAOCargo::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila[0]){
			$id=$fila[0];
			$rut=$fila[1];
			$nombre=$fila[2];
	        $apellido=$fila[3];
        	$edad=$fila[4];
	        $sexo=$fila[5];
	        $sede=$fila[6];
         	$cargo=$fila[7];  		
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
<body onload="setSelectBoxByValue('cbo_sexo','<?=$sexo?>')">
<header>
<div class="container"><h1>Modificar Datos de Empleado</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCPersona.php">
<div class="form-group">
<label for="txt_rut">Rut</label>
<input class="form-control" id="txt_rut" type="text" placeholder="RUT:" name="txt_rut" size="15" value="<?=$rut?>" required />
<input class="form-control" id="txt_id" type="hidden"  name="txt_id"  value="<?=$id?>" />
</div>
<div class="form-group">
<label for="txt_nombre">Nombre</label>
<input class="form-control" id="txt_nombre" type="text" placeholder="Nombre:" name="txt_nombre" value="<?=$nombre?>" required />
</div>
<div class="form-group">
<label for="txt_apellido">Apellido</label>
<input class="form-control" id="txt_apellido" type="text" placeholder="Apellido:" name="txt_apellido" value="<?=$apellido?>" required />
</div>

<div class="form-group tamcbo">
<label for="cbo_edad">Edad</label>
 <select id="cbo_edad" name="cbo_edad" class="form-control">
  <?php 
  for($x=18;$x<66;$x++){
	  if($x!=$edad){
	  echo "<option value=".$x.">".$x."</option>";
	  }else{
	  echo "<option value=".$x." selected>".$x."</option>";
	  }
  }
  ?>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_sexo">Sexo</label>
 <select id="cbo_sexo" name="cbo_sexo" class="form-control" >
  <option value="M">M</option>
  <option value="F">F</option>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_sede">Sede</label>
 <select id="cbo_sede" name="cbo_sede" class="form-control">
  <?php 
  foreach($sedes as $temp){
	  if($temp[1]!=$sede){
		  echo "<option value='$temp[0]'>$temp[1]</option>";
	  }else {
		  echo "<option value='$temp[0]' selected>$temp[1]</option>";
	  }
	  
  }
  ?>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_cargo">Cargo</label>
 <select id="cbo_cargo" name="cbo_cargo" class="form-control">
  <?php 
  foreach($cargos as $temp){
	  if($temp[0]!=$cargo){
		  echo "<option value='$temp[1]'>$temp[0]</option>";
	  }else {
		  echo "<option value='$temp[1]' selected>$temp[0]</option>";
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