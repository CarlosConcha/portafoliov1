<?php 
session_start();
if(empty($_SESSION["usuario"])){
	header('location: View/FrLogin.php');
}


?>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />  
    <link rel="stylesheet" type="text/css" href="View/css/dataTables.css">
	<link rel="stylesheet" type="text/css" href="View/css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="./JS/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="./JS/jquery.dataTables.js"></script>
	
	
<script type="text/javascript">
          function mostrar(lista){
					
					$("#campo").load(lista);
				
			}
		</script>
		   <script>
         function validate(form){
for(var i = 0; i < form.chk_persona.length; i++){
if(form.chk_persona[i].checked)return true;
}
alert('Debes seleccionar al menos un pais a eliminar');
return false;
}    
	</script>
</head>
<body>
<div class="container-fluid">
<br>
<header>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
<span class="sr-only">Menu</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#MenuTab" class="navbar-brand" data-toggle="collapse">Los Pollos Hermanos</a>
</div>

<div class="collapse navbar-collapse" id="navbar-1">
<ul class="nav navbar-nav">
<li><a href="#">Inicio</a></li>
<li><a href="#">Quienes Somos</a></li>
<li><a href="#">Condiciones De Envio</a></li>
<li><a href="#">Lugares De Envio</a></li>
</ul>
<form action="#" class="navbar-form navbar-right" role="search">
<div class="form-group">
<div class="input-group">
      <input type="text" class="form-control" id="txt_paquete" placeholder="Buscar Paquete">
      <div class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-search"></a></div>
    </div>
</div>
</form>
</div>
</div>
</nav>
</header>
<div class="container-fluid">
<div class="row">
<div class="hidden-xs col-sm-3 col-md-2">
<ul class="list-group collapse in" id="MenuTab">
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-bottom"><a href="#mantenedor" data-toggle="collapse">Administracion</a></span></li>
<ul class="list-group collapse" id="mantenedor">
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrUsuario.php')">Usuario</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrCargo.php')">Cargo</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrComuna.php')">Comuna</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrEnvio.php')">Envio</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrLocacion.php')">Locacion</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrPaquete.php')">Paquete</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrPersona.php')">Empleado</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrSede.php')">Sede</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrVehiculo.php')">Vehiculo</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrModelo.php')">Modelo</a></span></li>
</ul>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-bottom"><a href="#mantenedorcli" data-toggle="collapse">Cliente</a></span></li>
<ul class="list-group collapse" id="mantenedorcli">
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrRegistroP1.php')">Registrar Envio</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrCargo.php')">Estado Paquete</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrComuna.php')">Precios</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrComuna.php')">Historico</a></span></li>
</ul>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-bottom"><a href="#mantenedorAu" data-toggle="collapse">Auditoria</a></span></li>
<ul class="list-group collapse" id="mantenedorAu">
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrUsuario.php')">Auditoria de BD</a></span></li>
</ul>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-bottom"><a href="#mantenedorCu" data-toggle="collapse">Cuentas</a></span></li>
<ul class="list-group collapse" id="mantenedorCu">
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrCuenta.php')">Administrar</a></span></li>
<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right"><a href="#" onclick="mostrar('./View/FrCuentaPersona.php')">Crear</a></span></li>
</ul>
</ul>
</div>
<div class="col-xs-10 col-sm-9 col-md-10">
<div name="campo" id="campo"></div>
</div>
</div>
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<footer></footer>
</body>
</html>