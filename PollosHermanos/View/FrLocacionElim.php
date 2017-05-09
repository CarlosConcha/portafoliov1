<?php 
require_once("../DAO/DAOLocacion.php");
$elim=$_POST["chk_locacion"];
$cantidad=count($elim);
$lista="";
$url="";
$datos=DAOLocacion::sqlSelectTodas();
foreach($datos as $fila){
	$id=$fila[0];
	$direccion=$fila[1];
	$comuna=$fila[2];
	for($x=0;$x<$cantidad;$x++){
		if($elim[$x]==$id){
			$lista.="<tr><td>$comuna</td><td>$direccion</td></tr>";
			if($x>=1){
            $url.="&lista[]=".$id;}			
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
<a href="../MVC/MVCLocacion.php?lista[]=<?php echo $elim[0].$url?>" class="btn btn-danger">Eliminar</a>

</div>
</div>
</div>
</body>
</html>