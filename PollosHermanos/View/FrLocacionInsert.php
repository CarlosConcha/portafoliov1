<?php 
require_once("../DAO/DAOComuna.php");
$comunas=DAOComuna::sqlSelectTodas();

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
<div class="container"><h1>Insertar Datos de Locacion</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCLocacion.php">

<div class="form-group">
<label for="txt_dir">Direccion</label>
<input class="form-control" id="txt_dir" type="text" placeholder="Direccion:" name="txt_dir" size="15"  required />
</div>
<div class="form-group tamcbo">
<label for="cbo_comuna">Comuna</label>
 <select id="cbo_comun" name="cbo_comun" class="form-control">
  <?php 
  foreach($comunas as $temp){
	  
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