<html>
<head>
<title>Insertar</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" href="css/estilos.css">

<script type="text/javascript" language="javascript" src="../JS/setSelect.js"></script>

</head>
<body>
<header>
<div class="container"><h1>Agregar Datos del Cargo</h1></div>
</header>
<br>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Editar campos necesarios:</div>
<div class="panel-body">
<form method="post" action="MVC/MVCLogin.php">
<div class="form-group">
<label for="txt_usuario">Usuario</label>
<input class="form-control" id="txt_usuario" type="text" placeholder="Usuario:" name="txt_usuario"  maxlength="15" required />
</div>
<div class="form-group">
<label for="txt_pass">Contraseña</label>
<input class="form-control" id="txt_pass" type="password" placeholder="Contraseña:" name="txt_pass"   required />
<input class="form-control" id="txt_id" type="hidden" name="txt_id" value="<?php echo $_GET["id"]?>" required />
</div>
<input class="btn btn-default" type="submit" value="Agregar" name="btn_insertar"/>
</form>
</div>
</div>
</div>
</body>
</html>