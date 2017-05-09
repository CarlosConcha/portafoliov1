<?php 
require_once("../DAO/DAOSede.php");
require_once("../DAO/DAOCargo.php");
$sedes=DAOSede::sqlSelectTodas();
$cargos=DAOCargo::sqlSelectTodas();



?>
<html>
<head>
<title>Insertar</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" language="javascript" src="../JS/setSelect.js"></script>

</head>
<body>
<header>
<div class="container"><h1>Insertar Datos de Empleado</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">llenar todos los campos:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCPersona.php">
<div class="form-group">
<label for="txt_rut">Rut</label>
<input class="form-control" id="txt_rut" type="text" placeholder="RUT:" name="txt_rut" size="15" required />
</div>
<div class="form-group">
<label for="txt_nombre">Nombre</label>
<input class="form-control" id="txt_nombre" type="text" placeholder="Nombre:" name="txt_nombre"  required />
</div>
<div class="form-group">
<label for="txt_apellido">Apellido</label>
<input class="form-control" id="txt_apellido" type="text" placeholder="Apellido:" name="txt_apellido"  required />
</div>

<div class="form-group tamcbo">
<label for="cbo_edad">Edad</label>
 <select id="cbo_edad" name="cbo_edad" class="form-control">
  <?php 
  for($x=18;$x<66;$x++){	  
	  echo "<option value=".$x.">".$x."</option>"; 
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
		  echo "<option value='$temp[0]'>$temp[1]</option>";    
  }
  ?>
</select> 
</div>
<div class="form-group tamcbo">
<label for="cbo_cargo">Cargo</label>
 <select id="cbo_cargo" name="cbo_cargo" class="form-control">
  <?php 
  foreach($cargos as $temp){
		  echo "<option value='$temp[1]'>$temp[0]</option>"; 
  }
  ?>
</select> 
<p class="help-block">No olvide llenar todos los campos</p>
</div>
<input class="btn btn-default" type="submit" value="Agregar" name="btn_insertar"/>
</form>
</div>
</div>
</div>
</body>
</html>