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
 
<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo2.css" />
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

              <nav>
              <ul>
              <li><a href="/proyectomio/candidatos/diputado/diputado.php">Formulario</a></li>

              </ul>
              </nav>
              </div>
              </div>

              <?php
              include './clases/coneccion.php';
              include './clases/diputado.php';
              include './clases/diputadoControlador.php';

              $diputadoA = new diputadoControlador();
              $accion = $_REQUEST['accion'];
              switch ($accion){
                case'save':
                if(isset($_REQUEST['bot'])){
                  $diputadoA->setId_diputado('null');
                  $diputadoA->setDui($_REQUEST['dui']);
                  $diputadoA->setNombre($_REQUEST['nombre']);
                  $diputadoA->setApellido($_REQUEST['apellido']);
                  $diputadoA->setPartido($_REQUEST['partido']);
                  $diputadoA->setBandera($_REQUEST['bandera']);
                  $diputadoA->setDepartamento($_REQUEST['departamento']);
                  $datosObj=array(
                    $diputadoA->getId_diputado(),
                    $diputadoA->getDui(),
                    $diputadoA->getNombre(),
                    $diputadoA->getApellido(),
                    $diputadoA->getPartido(),
                    $diputadoA->getBandera(),
                    $diputadoA->getDepartamento()
                    );
                  print $diputadoA->guardarDatos($con,$datosObj);
                  print '<a href=\'manejadorDiputado.php?accion=con\'>Ver datos</a>';

                }else{
                  print 'No se ha enviado datos';
                }
                break;
                case'con':
                $sql = 'SELECT * FROM diputado';
                $datoss = consultaD($con,$sql);

                print imprimetabla($datoss,"diputado","table table-bordered table-striped",1);
                break;
                default:
                print 'No hay accion que realizar';
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