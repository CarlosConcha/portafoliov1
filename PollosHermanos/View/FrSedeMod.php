<?php 
require_once("../DAO/DAOLocacion.php");
require_once("../DAO/DAOSede.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);

$datos=DAOSede::sqlSelectTodas();
$locacion=DAOLocacion::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila[0]){
			$id_sede=$fila[0];
	        $nombre=$fila[1];
	        $direccion=$fila[2];		
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
<div class="container"><h1>Modificar Datos de Empleado</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCSede.php">
<div class="form-group">
<label for="txt_id">Id Sede</label>
<input class="form-control" id="txt_id" type="text" placeholder="RUT:" name="txt_id" size="15" value="<?=$id_sede?>" required />
</div>
<div class="form-group">
<label for="txt_nombre">Nombre Sede</label>
<input class="form-control" id="txt_nombre" type="text" placeholder="Nombre:" name="txt_nombre" value="<?=$nombre?>" required />
</div>

<div class="form-group tamcbo">
<label for="cbo_direc">Direccion</label>
 <select id="cbo_direc" name="cbo_direc" class="form-control">
  <?php 
  foreach($locacion as $temp){
	  if($temp[1]!=$direccion){
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