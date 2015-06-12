<?php
session_start();
if(isset($_SESSION["usuario"])){
  mysql_connect("localhost","root","");
  mysql_select_db("voto");
  $t=mysql_query("select * from ciudadano where dui='".$_SESSION["usuario"]."'");
  if(mysql_num_rows($t)>0){
    if(mysql_result($t,0,"estado")=="0"){



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

       <center><hgroup><h1>Papeleta de Eleccion de Presidentes</h1><hgroup></center>
     </header>
  
 <div class="jumbotron">
        <form action="iniciovotante.php" method="post" id="presidente">
            <table class="table-bordered">
            <table class="table-bordered">
<div id="textoPr">
    <div id="imagen1">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=1"><img src="imagenes/popular.jpg"></img></a>
  </figure>
  </div>

   <div id="imagen2">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=2"><img src="imagenes/CAMPESINO.jpg"></img></a>
  </figure>
  </div>

    <div id="imagen3">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=3"><img src="imagenes/revolucion.jpg"></img></a>
  </figure>
  </div>
  
 <br> <div id="imagen4">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=4"><img src="imagenes/cafe.jpg"></img></a>
  </figure>
  </div></br>
  

  <div id="imagen5">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=5"><img src="imagenes/libertad.jpg"></img></a>
  </figure>
  </div>


  <div id="imagen6">
     <figure>
     <a href="votarp.php?dui=<?php echo $_SESSION['dui']; ?>&partido=6"><img src="imagenes/esperanza.jpg"></img></a>
  </figure>
  </div>


</form>
 <?php
      print '<a href=\'diputados.php\'>SIGUIENTE</a>';
?>
</table>
    </div>

 </html>

 <?php
}else{
  echo"usted ya voto<br>";
  echo "<a href='iniciovotante.php'>Regresar</a>";
}
}else{
  echo "No existe el numero de dui ";
}
}
?>


