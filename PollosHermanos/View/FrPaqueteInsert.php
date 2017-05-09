<?php 

require_once("../DAO/DAOEnvio.php");
$envios=DAOEnvio::sqlSelectTodas();

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
<div class="container"><h1>Insertar Datos del Paquete</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCPaquete.php">

<div class="form-group">
<label for="txt_altura">Altura(cm)</label>
<input class="form-control" id="txt_altura" type="text" placeholder="Altura(cm):" name="txt_altura"  maxlength="4" required />
</div>
<div class="form-group">
<label for="txt_ancho">Ancho(cm)</label>
<input class="form-control" id="txt_ancho" type="text" placeholder="Ancho(cm):" name="txt_ancho"  maxlength="4" required />
</div>
<div class="form-group">
<label for="txt_peso">Peso(g)</label>
<input class="form-control" id="txt_peso" type="text" placeholder="Peso(g):" name="txt_peso"  maxlength="4" required />
</div>
<div class="form-group">
<label for="cbo_codigo">Codigo Envio</label>
<select class="form-control" id="cbo_codigo" name="cbo_codigo">
<?php 
foreach($envios as $temp){
		echo "<option value='$temp[3]'>$temp[3]</option>";	
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