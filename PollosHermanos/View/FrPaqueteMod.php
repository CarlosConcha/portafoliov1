<?php 
require_once("../DAO/DAOPaquete.php");
require_once("../DAO/DAOEnvio.php");
$mod=$_GET["modificar"];
$cantidad=count($mod);
$datos=DAOPaquete::sqlSelectTodas();
$envios=DAOEnvio::sqlSelectTodas();
foreach($datos as $fila){   
		if($mod==$fila["ID_PAQUETE"]){
			$id_paquete=$fila["ID_PAQUETE"];
	        $altura=$fila["ALTURA"];
	        $ancho=$fila["ANCHO"];
	        $cod_envio=$fila["COD_ENVIO"];
	        $peso=$fila["PESO"];
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
<div class="container"><h1>Modificar Datos del Paquete</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="../MVC/MVCPaquete.php">
<div class="form-group">
<label for="txt_id">Id Paquete</label>
<input class="form-control" id="txt_id" type="text" name="txt_id" size="15" value="<?=$id_paquete?>" readonly required />
</div>
<div class="form-group">
<label for="txt_altura">Altura(cm)</label>
<input class="form-control" id="txt_altura" type="text" placeholder="Cargo:" name="txt_altura" value="<?=$altura?>" maxlength="4" required />
</div>
<div class="form-group">
<label for="txt_ancho">Ancho(cm)</label>
<input class="form-control" id="txt_ancho" type="text" placeholder="Cargo:" name="txt_ancho" value="<?=$ancho?>" maxlength="4" required />
</div>
<div class="form-group">
<label for="txt_peso">Peso(g)</label>
<input class="form-control" id="txt_peso" type="text" placeholder="Cargo:" name="txt_peso" value="<?=$peso?>" maxlength="4" required />
</div>
<div class="form-group">
<label for="cbo_codigo">Codigo Envio</label>
<select class="form-control" id="cbo_codigo" name="cbo_codigo">
<?php 
foreach($envios as $temp){
	if($temp[3]!=$cod_envio){
		echo "<option value='$temp[3]'>$temp[3]</option>";
	}else{
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