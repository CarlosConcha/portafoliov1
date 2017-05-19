<?php 
require_once("../DAO/DAOComuna.php");
$elim=$_POST["chk_comuna"];
$cantidad=count($elim);
$lista="";
$url="";
$datos=DAOComuna::sqlSelectTodas();
foreach($datos as $fila){
	$idcom=$fila["ID_COMUNA"];
	$nombre_com=$fila["NOMBRE_COMUNA"];
	for($x=0;$x<$cantidad;$x++){
		if($elim[$x]==$idcom){
			$lista.="<tr><td>$idcom</td><td>$nombre_com</td></tr>";
			if($x>=1){
            $url.="&lista[]=".$idcom;}			
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
<div class="panel-heading">Esta Seguro que desea Eliminar los siguientes Datos?:</div>
<div class="panel-body">

<table class="table">
<?php echo $lista;?>
</table>
<a href="../MVC/MVCComuna.php?lista[]=<?php echo $elim[0].$url?>" class="btn btn-danger">Eliminar</a>

</div>
</div>
</div>
</body>
</html>