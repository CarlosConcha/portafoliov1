<?php 
require_once("../DAO/DAOSede.php");
$sedes=DAOSede::sqlSelectTodas();

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
<div class="container"><h1>Insertar Datos de Envio</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCEnvio.php">
<div class="form-group">
<label for="txt_cod">Codigo Envio</label>
<input class="form-control" id="txt_cod" type="text" placeholder="Codigo:" name="txt_cod" size="15" required />
</div>

<div class="form-group tamcbo">
<label for="cbo_origen">Sede Origen</label>
 <select id="cbo_origen" name="cbo_origen" class="form-control">
  <?php 
  foreach($sedes as $temp){
	  echo "<option value='$temp[0]'>$temp[1]</option>"; 
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

<input class="btn btn-default" type="submit" value="Agregar" name="btn_insertar"/>
</form>
</div>
</div>
</div>
</body>
</html>