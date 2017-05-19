<?php 
require_once("../DAO/DAOPaquete.php");
$elim=$_POST["chk_paquete"];
$cantidad=count($elim);
$lista="";
$url="";
$datos=DAOPaquete::sqlSelectTodas();
foreach($datos as $fila){
	$id_paquete=$fila["ID_PAQUETE"];
	$altura=$fila["ALTURA"];
	$ancho=$fila["ANCHO"];
	$cod_envio=$fila["COD_ENVIO"];
	$peso=$fila["PESO"];
	for($x=0;$x<$cantidad;$x++){
		if($elim[$x]==$id_paquete){
			$lista.="<tr><td>$id_paquete</td><td>$altura</td><td>$ancho</td><td>$cod_envio</td><td>$peso</td></tr>";
			if($x>=1){
            $url.="&lista[]=$id_paquete";}			
		}
		
	}
	
}

?>
<html>
<head>
<title>Eliminacion</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<body>
<header>
<div class="container"><h1>Listado de Info. Para Eliminar</h1></div>
</header>
<br/>
<div class="container">
<div class="panel panel-info">
<div class="panel-heading">Esta Seguro que desea Eliminar los sgtes Datos?:</div>
<div class="panel-body">

<table class="table">
<?php echo $lista;?>
</table>
<a href="../MVC/MVCPaquete.php?lista[]=<?php echo $elim[0].$url?>" class="btn btn-danger">Eliminar</a>

</div>
</div>
</div>
</body>
</html>