<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
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

       <center><hgroup><h1>Bienvenido/a</h1><hgroup></center>
     </header>
      <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>

   <div id="header">
   <ul class="nav">
   <li><a href="/proyectomio/logout.php">Salir</a></li>
   <li><a href="/proyectomio/index.php">Pagina Principal </a></li>
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

   <h2>Sistema de Votacion</h2>
   
   <p>Se ha bienvenido/a a este nuevo sistema de inscripcion, de partidos, candidatos para estas 
   elecciones que se aperturan</p>
   
   <p>1- Todo candidato, antes de ser inscrito como tal, o como representante de un partido politico
   debe estar inscrito como ciudadano en la base de datos</p>
   
   <p>2- Antes de inscribir cualquier candidato o partido politico debes aperturar las elecciones correspondiente a ese anio
   ya aperturadas el periodo electoral puedes inscribir los candidatos y partidos</p>

   <p>3- se registraran primero los partidos politicos en su respectivo formulario de inscripcion
   con su bandera, iniciales, y el representante politico</p>

   <p>4- ya inscritos los partidos se puede dar inicio a la inscripcion de candidatos y coalisiones
   en sus respectivos formularios.</p>

   <p> Muchas Gracias!!</p>

   </p>
</div>


</body>

</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>


