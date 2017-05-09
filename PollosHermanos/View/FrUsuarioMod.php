<?php 
require_once("../DAO/DAOUsuario.php");
require_once("../DAO/DAOEnvio.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);
$datos=DAOUsuario::sqlSelectTodas();
$envio=DAOEnvio::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila[0]){
			$id=$fila[0];
			$rut=$fila[1];
			$nombre=$fila[2];
	        $apellido=$fila[3];
        	$codigo=$fila[4]; 		
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
<div class="container"><h1>Modificar Datos del Usuario</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCUsuario.php">
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
<label for="cbo_envio">Codigo Envio</label>
 <select id="cbo_envio" name="cbo_envio" class="form-control">
  <?php 
  foreach($envio as $temp){
	  if($temp[3]!=$codigo){
		  echo "<option value='$temp[3]'>$temp[3]</option>";
	  }else {
		  echo "<option value='$temp[3]' selected>$temp[3]</option>";
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