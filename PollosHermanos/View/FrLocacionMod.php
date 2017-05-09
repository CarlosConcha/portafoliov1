<?php 
require_once("../DAO/DAOLocacion.php");
require_once("../DAO/DAOComuna.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);

$datos=DAOLocacion::sqlSelectTodas();
$comunas=DAOComuna::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila[0]){
			$id=$fila[0];
			$dir=$fila[1];
			$com=$fila[2];    	
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
<div class="container"><h1>Modificar Datos de Locacion</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCLocacion.php">
<div class="form-group">
<label for="txt_id">ID Locacion</label>
<input class="form-control" id="txt_id" type="text" placeholder="Id comuna:" name="txt_id" size="15" value="<?=$id?>" readonly required />
</div>
<div class="form-group">
<label for="txt_dir">Direccion</label>
<input class="form-control" id="txt_dir" type="text" placeholder="Id comuna:" name="txt_dir" size="15" value="<?=$dir?>" required />
</div>
<div class="form-group tamcbo">
<label for="cbo_comuna">Comuna</label>
 <select id="cbo_comun" name="cbo_comun" class="form-control">
  <?php 
  foreach($comunas as $temp){
	  if($temp[1]!=$com){
	  echo "<option value='$temp[0]'>$temp[1]</option>";
	  }else{
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