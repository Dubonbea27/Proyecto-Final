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
     <center><hgroup><h1>Inscripcion Partidos</h1><hgroup></center>
         
          <nav>
         <p>   <div di= "menu">
             <ul>
             <li><a href="manejadorPartido.php?accion=con">Modificar</a></li>
        </ul>
  </nav>
</div>
</div>

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
    
          <section>
		<div id="textoPr">
			<article>
				
				
       
        <div class="jumbotron">
     <form action="manejadorPartido.php?accion=save" method="post" id="partido">
       <div id="text">
       <table class="tabla-bordered">
       

  <div class="row">
  <div class="col-xs-3">
    Dui de Responsable:
  </div>
  <div class="col-xs-3">
  <input type="text" name="dui_responsable" class="required digits form-control" maxlength="10" id="input" required pattern="[0-9]{8}[-][0-9]{1}" title="Debe contener 9 digitos seguido de '-' antes del ultimo digito"></td>
  </div>
  </div>

 <div class="row">
 <div class="col-xs-3">
   Nombre Responsable:
 </div>
 <div class="col-xs-3">
 <input type="text" name="responsable" class="required  form-control">
 </div>
 </div>

 <div class="row">
 <div class="col-xs-3">
    Nombre Partido:
 </div>
 <div class="col-xs-3">
 <input type="text" name="partido" class="required form-control" >
 </div>
 </div>

 <div class="row">
 <div class="col-xs-3">
    Bandera:
 </div>
 <div>
 <input  type="file" name="bandera" required   >
 </div>
 </div>


 <div class="row">
 <div class="col-xs-3">
    Iniciales:
 </div>
 <div class="col-xs-3">
 <input type="text" name="iniciales" class="required form-control" required>
 </div>
 </div>

 <div class="row">
 <td colspan="2">
 <input type="submit" name='bot' value='Guardar' class="btn btn-primary">
 </div>
  </div>
        </table>
        </form>

    



</body>

</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>





















