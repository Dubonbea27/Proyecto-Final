<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>sistema de votaciones</title>
 <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo2.css" />

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
 <header>
    <center>
        <figure>
    <center><img src="imagenes/img.jpg "></img></center>
        </figure>
    </center></p>
    <nav>
    <p>   <div di= "menu">
             <ul>
             <div id="header">
   <ul class="nav">
   <li><a href="/proyectomio/ayuda.php">Pagina Principal </a></li>
   <li><a href="/proyectomio/elecciones/activarelecciones.php">Activar Elecciones </a></li>
   <li><a href="/proyectomio/ciudadano/registrarciudadano.php">Ciudadano</a></li>
   <li><a href="/proyectomio/partido/inscripcionpartidos.php">Partidos </a></li>
   <li><a href="">Inscripciones</a>
   <ul>
   <li><a href="/proyectomio/candidatos/presidente/presidente.php">Presidente</a></li>
   <li><a href="/proyectomio/candidatos/diputado/diputado.php">Diputado</a></li>
   <li><a href="/proyectomio/candidatos/alcalde/alcalde.php">Alcalde</a></li>
  <li><a href="/proyectomio/candidatos/coalisiones/coalisiones.php">Coalisiones</a></li>
   </li>
   </ul>
   </li>
   </ul>
   </div>

 <?php
include './clases/coneccion.php';
include './clases/partido.php';
include './clases/partidoControlador.php';

$partidoA = new partidoControlador();

$accion = $_REQUEST['accion'];
switch ($accion){
	case 'save':

	if(isset($_REQUEST['bot'])){
	$partidoA->setId_partido('NULL');
	$partidoA->setDui_responsable($_REQUEST['dui_responsable']);
	$partidoA->setResponsable($_REQUEST['responsable']);
	$partidoA->setPartido($_REQUEST['partido']);
	$partidoA->setBandera($_REQUEST['bandera']);
	$partidoA->setIniciales($_REQUEST['iniciales']);
    $datosObj=array(
      $partidoA->getId_partido(),
    	$partidoA->getDui_responsable(),
    	$partidoA->getResponsable(),
    	$partidoA->getPartido(),
    	$partidoA->getBandera(),
    	$partidoA->getIniciales()
    	);

      print $partidoA->guardarDatos($con,$datosObj);
      print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';


      }else{
			print 'No se ha enviado datos';
		}
	break;
	case 'con':
	$sql = 'SELECT * FROM partido';
	$datoss = consultaD($con, $sql);
	print imprimetabla($datoss, "partido","table table-bordered",1);
	break;
	default:
	print 'No hay Accion que realizar';
	break;

}

 ?>
</body>
</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>