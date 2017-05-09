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
<div class="container"><h1>Insertar Datos de la Comuna</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCComuna.php">

<div class="form-group">
<label for="txt_comuna">Comuna</label>
<input class="form-control" id="txt_comuna" type="text" placeholder="Comuna:" name="txt_comuna" required />
</div>

<input class="btn btn-default" type="submit" value="Agregar" name="btn_insertar"/>
</form>
</div>
</div>
</div>
</body>
</html>