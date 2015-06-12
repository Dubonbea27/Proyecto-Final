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
              <li><a href="/proyectomio/candidatos/presidente/presidente.php">Formulario</a></li>

              </ul>
              </nav>
              </div>
              </div>

              <?php
              include './clases/coneccion.php';
              include './clases/presidente.php';
              include './clases/presidenteControlador.php';

              $presidenteA = new presidenteControlador();
              
                
                if(isset($_REQUEST['bot'])){
                  $presidenteA->setId_presidente('null');
                  $presidenteA->setDui($_REQUEST['dui']);
                  $presidenteA->setNombre($_REQUEST['nombre']);
                  $presidenteA->setApellido($_REQUEST['apellido']);
                  $presidenteA->setPartido($_REQUEST['partido']);
                  $presidenteA->setBandera($_REQUEST['bandera']);
                  $presidenteA->setCandidato($_REQUEST['pais']);
                  $datosObj=array(
                    $presidenteA->getId_presidente(),
                    $presidenteA->getDui(),
                    $presidenteA->getNombre(),
                    $presidenteA->getApellido(),
                    $presidenteA->getPartido(),
                    $presidenteA->getBandera(),
                    $presidenteA->getCandidato()
                    );

                  print "<div id='dialogo' title ='Exito' style='display: none;'>";
                  print '<p>Mensaje:';
                  print $presidenteA->modificarDatos($con,$datosObj);
                  print '<span class="badge glyphicon glyphicon-ok"></span></p>';
                  print '<a href=\'manejadorPresidente.php?accion=con\'>Ver datos</a>';
                  print "</div>";

               }
?>
<script >
   $(document).ready(function(){
 $("#dialogo").dialog();

   });

</script>
</body>
</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>