<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximun-scale=1">
  <title>sistema de votaciones</title>
   
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/estilo2.css"/>
   
<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title></title>
<link rel="stylesheet"  href="./libs/bootstrap/css/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
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

               <a href="/proyectomio/ayuda.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
<?php
include './clases/coneccion.php';
include './clases/eleccion.php';
include './clases/eleccionControlador.php';

$eleccionA = new eleccionControlador();
$accion = $_REQUEST['accion'];
switch ($accion){
  case 'save':
  if(isset($_REQUEST['bot'])){
    $eleccionA->setId_eleccion('null');
    @$eleccionA->setPresidenciales($_REQUEST['presidenciales']);
    @$eleccionA->setAlcaldes($_REQUEST['alcaldes']);
    @$eleccionA->setDiputados($_REQUEST['diputados']);
    @$eleccionA->setAnio($_REQUEST['anio']);
    $datosObj=array(
      $eleccionA->getId_eleccion(),
      $eleccionA->getPresidenciales(),
      $eleccionA->getAlcaldes(),
      $eleccionA->getDiputados(),
      $eleccionA->getAnio(),

      );
    print $eleccionA->guardarDatos($con,$datosObj);
    print '<a href=\'manejadorEleccion.php?accion=con\'>Ver datos</a>';


  }else{
    print 'No se ha enviado datos';
  }
  break;
  case 'con':
  $sql = 'SELECT * FROM eleccion';
  $datoss = consultaD($con, $sql);

  print imprimetabla($datoss, "eleccion", "table table-bordered table-striped",1);
  break;
  default:
  print 'No hay Accion que realizar';
  break;
 }

 ?>
 </body>
 </html>
