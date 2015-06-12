<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
  <title>sistema de votaciones</title>
  <link type="text/css" rel="stylesheet" href="css/index.css">

<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title></title>
<link rel="stylesheet"  href="./libs/bootstrap/css/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

<body>
<?php
include './clases/coneccion.php';
include './clases/partido.php';
include './clases/partidoControlador.php';
$partidoA = new partidoControlador();

 

if(isset($_REQUEST['bot'])){
	$partidoA->setId_partido($_REQUEST['id_partido']);
	$partidoA->setNombre($_REQUEST['nombre']);
	$partidoA->setResponsable($_REQUEST['responsable']);
	$partidoA->setBandera($_REQUEST['bandera']);
	$partidoA->setIniciales($_REQUEST['iniciales']);
	$partidoA->setDui_representante($_REQUEST['dui_representante']);
    );
    $datosObj=array($partidoA->getId_partido()
    	$partidoA->getNombre(),
    	$partidoA->getResponsable(),
    	$partidoA->getBandera(),
    	$partidoA->getIniciales(),
    	$partidoA->getDui_representantes(),
    	
    	);


          print "<div id='dialogo' title ='Exito' style='display: none;'>";
			print '<p>Mensaje:';
			print $partidoA->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorPartido.php?accion=con\'>ver datos</a>';
			print "</div>";

		}

?><script >
   $(document).ready(function()

   { $("#dialogo").dialog();

   });

</script>

</body>

</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>

