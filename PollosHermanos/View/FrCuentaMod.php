<?php 
require_once("../DAO/DAOCargo.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);
$datos=DAOCargo::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila["ID_CARGO"]){
			$id=$fila["ID_CARGO"];
			$cargo=$fila["CARGO"];
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
<form method="post" action="../MVC/MVCCargo.php">
<div class="form-group">
<label for="txt_id">Id Cargo</label>
<input class="form-control" id="txt_id" type="text" name="txt_id" size="15" value="<?=$id?>" readonly required />
</div>
<div class="form-group">
<label for="txt_cargo">Cargo</label>
<input class="form-control" id="txt_cargo" type="text" placeholder="Cargo:" name="txt_cargo" value="<?=$cargo?>" required />
</div>

<input class="btn btn-info" type="submit" value="modificar" name="btn_modificar"/>
</form>
</div>
</div>
</div>
</body>
</html>