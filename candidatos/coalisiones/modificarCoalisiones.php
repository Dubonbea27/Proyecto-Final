<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="extructura de un documento web">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximun-scale=1">
  <title>sistema de votaciones</title>
  <link type="text/css" rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="http://menuscssverticales.blogcindario.com/ficheros/menu13.css" type="text/css" />
   
  
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

      <center><hgroup><h1>Registrar coalisiones</h1><hgroup></center>
     
         
          <nav>
         <p>   <div di= "menu">
             <ul>

               <a href="ayuda.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
<?php
include './clases/coneccion.php';
include './clases/coalision.php';
include './clases/coalisionControlador.php';

$coalisionA = new coalisionControlador();


  if (isset($_REQUEST['bot'])){
    $coalisionA->setId_coalisiones('NULL');
    $coalisionA->setPartidoA($_REQUEST['partidoA']);
    $coalisionA->setPartidoB($_REQUEST['partidoB']);
    $coalisionA->setPartidoC($_REQUEST['partidoC']);
    $coalisionA->setPartidoD($_REQUEST['partidoD']);
    $coalisionA->setPartidoE($_REQUEST['partidoE']);
    $coalisionA->setNombre($_REQUEST['nombre']);
    $coalisionA->setId_departamento($_REQUEST['id_departamento']);
    $coalisionA->setId_municipio($_REQUEST['id_municipio']);
   
       $datosObj=array(
        $coalisionA->getId_coalisiones(),
        $coalisionA->getPartidoA(),
        $coalisionA->getPartidoB(),
        $coalisionA->getPartidoC(),
        $coalisionA->getPartidoD(),
        $coalisionA->getPartidoE(),
        $coalisionA->getNombre(),
        $coalisionA->getId_departamento(),
        $coalisionA->getId_municipio(),
        );
      print "<div id='dialogo' title ='Exito' style='display: none;'>";
      print '<p>Mensaje:';
      print $coalisionA->modificarDatos($con,$datosObj);
      print '<span class="badge glyphicon glyphicon-ok"></span></p>';
      print '<a href=\'manejadorCoalisiones.php?accion=con\'>Ver datos</a>';
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
