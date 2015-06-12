<?php
session_start();
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximun-scale=1">
  <title>sistema de votaciones</title>
  <meta charset="iso-8859-1">
  <meta name="Descripcion" content="multimplicacion">

   <link type="text/css" rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/normalize.css">
   
    <meta charset="iso-8859-1">
    <meta name="Descripcion" content="multimedia">
    <meta name="Contenido" content="Aplicacion">
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
     <script type="text/javascript" src="/proyectomio/javascript.js"></script>
</head>
<body style="background:#ffff99" onload="retroceder();">

<header>
<center>
          
        
         <figure>
 <center><img src="imagenes/img.jpg "></img></center>
  </figure>
      </center></p>

       <center><hgroup><h1>Papeleta de Eleccion de Diputados</h1><hgroup></center>
     </header>
  
 <div class="jumbotron">
        <form action="alcaldes.php" method="post" id="presidente">
            <table class="table-bordered">
            
            
<div id="textoPr">
    <div id="imagen1">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=5"><img src="imagenes/popular.jpg"></img></a>
  </figure>
  </div>

   <div id="imagen2">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=6"><img src="imagenes/CAMPESINO.jpg"></img></a>
  </figure>
  </div>

    <div id="imagen3">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=10"><img src="imagenes/revolucion.jpg"></img></a>
  </figure>
  </div>
  
 <br> <div id="imagen4">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=7"><img src="imagenes/cafe.jpg"></img></a>
  </figure>
  </div></br>
  

  <div id="imagen5">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=9"><img src="imagenes/libertad.jpg"></img></a>
  </figure>
  </div>


  <div id="imagen6">
     <figure>
     <a href="votar.php?dui=<?php echo $_SESSION['dui']; ?>&partido=8"><img src="imagenes/esperanza.jpg"></img></a>
  </figure>
  </div>


</from>
 <?php
      print '<a href=\'alcaldes.php\'>SIGUIENTE</a>';
?>
</table>
    </div>

 </html>

