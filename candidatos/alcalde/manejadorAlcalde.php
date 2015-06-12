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
              <li><a href="/proyectomio/candidatos/alcalde/alcalde.php">Formulario</a></li>

              </ul>
              </nav>
              </div>
              </div>

              <?php
              include './clases/coneccion.php';
              include './clases/alcalde.php';
              include './clases/alcaldeControlador.php';

              $alcaldeA = new alcaldeControlador();
              $accion = $_REQUEST['accion'];
              switch ($accion){
                case'save':
                if(isset($_REQUEST['bot'])){
                  $alcaldeA->setId_alcalde('null');
                  $alcaldeA->setDui($_REQUEST['dui']);
                  $alcaldeA->setNombre($_REQUEST['nombre']);
                  $alcaldeA->setApellido($_REQUEST['apellido']);
                  $alcaldeA->setPartido($_REQUEST['partido']);
                  $alcaldeA->setBandera($_REQUEST['bandera']);
                  $alcaldeA->setDepartamento($_REQUEST['departamento']);
                  $alcaldeA->setMunicipio($_REQUEST['municipio']);
                  $datosObj=array(
                    $alcaldeA->getId_alcalde(),
                    $alcaldeA->getDui(),
                    $alcaldeA->getNombre(),
                    $alcaldeA->getApellido(),
                    $alcaldeA->getPartido(),
                    $alcaldeA->getBandera(),
                    $alcaldeA->getdepartamento()
                    );
                  print $alcaldeA->guardarDatos($con,$datosObj);
                  print '<a href=\'manejadorAlcalde.php?accion=con\'>Ver datos</a>';

                }else{
                  print 'No se ha enviado datos';
                }
                break;
                case'con':
                $sql = 'SELECT * FROM alcalde';
                $datoss = consultaD($con,$sql);

                print imprimetabla($datoss,"alcalde","table table-bordered table-striped",1);
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