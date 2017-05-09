<?php 
require_once("../DAO/DAOPersona.php");
require_once("../neg/NEGPersona.php");
$elim=$_POST["chk_persona"];
$cantidad=count($elim);
$lista="";
$url="";
$datos=DAOPersona::sqlSelectTodas();
foreach($datos as $fila){
	$rut=$fila[0];
	$nombre=$fila[1];
	$apellido=$fila[2];
	$edad=$fila[3];
	$sexo=$fila[4];
	$sede=$fila[5];
	$cargo=$fila[6];
	for($x=0;$x<$cantidad;$x++){
		if($elim[$x]==$rut){
			$lista.="<tr><td>$rut</td><td>$nombre</td><td>$apellido</td><td>$edad</td><td>$sexo</td><td>$sede</td><td>$cargo</td></tr>";
			if($x>=1){
            $url.="&lista[]=".$rut;}			
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
<a href="../MVC/MVCPersona.php?lista[]=<?php echo $elim[0].$url?>" class="btn btn-danger">Eliminar</a>

</div>
</div>
</div>
</body>
</html>