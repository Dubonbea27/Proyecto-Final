<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<?php include './clases/coneccion.php';?>
<?php include './functions.php'; ?>

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
              <li><a href="manejadorCiudadano.php?accion=con">Modificar</a></li>
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
       
       <form action="manejadorCoalisiones.php?accion=save" method="post" id="ciudadano">
       <div id="text">
       <table class="tabla-bordered">

       <div class="row">
  <div class="col-xs-3">
       Nombre:
  </div>
  <div class="col-xs-3">
  <input type="text" name="nombre" class="required  form-control" required>
  </div>
  </div>


        <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partidoA' class="required form-control">
 <option value=""></option>
    <?php 
  $sql = "SELECT id_partido, partido FROM partido;";
  $datos = consultaD($con, $sql);
    foreach ($datos as $value) {
          print "<option value='";
          print $value['id_partido'];
          print "'>";
          print $value['partido'];
          print "</option>";
           }                
          ?>
  </select >
  </div>
  </div></div>

   <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partidoB' class="required form-control">
 <option value=""></option>
    <?php 
  $sql = "SELECT id_partido, partido FROM partido;";
  $datos = consultaD($con, $sql);
    foreach ($datos as $value) {
          print "<option value='";
          print $value['id_partido'];
          print "'>";
          print $value['partido'];
          print "</option>";
           }                
          ?>
  </select >
  </div>
  </div></div>

   <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partidoC' class="required form-control">
 <option value=""></option>
    <?php 
  $sql = "SELECT id_partido, partido FROM partido;";
  $datos = consultaD($con, $sql);
    foreach ($datos as $value) {
          print "<option value='";
          print $value['id_partido'];
          print "'>";
          print $value['partido'];
          print "</option>";
           }                
          ?>
  </select >
  </div>
  </div></div>

   <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partidoD' class="required form-control">
 <option value=""></option>
    <?php 
  $sql = "SELECT id_partido, partido FROM partido;";
  $datos = consultaD($con, $sql);
    foreach ($datos as $value) {
          print "<option value='";
          print $value['id_partido'];
          print "'>";
          print $value['partido'];
          print "</option>";
           }                
          ?>
  </select >
  </div>
  </div></div>

   <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partidoE' class="required form-control">
 <option value=""></option>
    <?php 
  $sql = "SELECT id_partido, partido FROM partido;";
  $datos = consultaD($con, $sql);
    foreach ($datos as $value) {
          print "<option value='";
          print $value['id_partido'];
          print "'>";
          print $value['partido'];
          print "</option>";
           }                
          ?>
  </select >
  </div>
  </div></div>

  <div class="row">
 <div class="col-xs-3">
      Departamento:
 </div>
 <div class="col-xs-3">
 <select id="departamento" name="id_departamento" class="required form-control" required>
 <option value=""></option>
  <?php 

   $sql = "SELECT id_departamento, departamento FROM departamento;";
       $datos = consultaD($con, $sql);
            foreach ($datos as $value) {
                  print "<option value='";
                  print $value['id_departamento'];
                  print "'>";
                  print $value['departamento'];
                  print "</option>";
                  }  
  ?>                        
 </select>
 </div>
 </div>

  <div class="row">
 <div class="col-xs-3">
     Municipio:
 </div>
 <div class="col-xs-3">
 <select id="municipio"  name ="id_municipio" class="required form-control" required >
 <option value="seleccion"> [selecione]</option>
  <?php 
 $sql = "SELECT id_municipio, municipio FROM municipio;";
  $datos = consultaD($con, $sql);
      foreach ($datos as $value) {
          print "<option value='";
          print $value['id_municipio'];
          print "'>";
          print $value['municipio'];
          print "</option>";
    }                
  ?>
 </select>
 </div>
 </div>

  <div class="row">
   <td colspan="2">
   <input type="submit" name='bot' value='Guardar' class="btn btn-primary">

   </div>
   </div>
        </table>
        </form>
    </div>


  <script type="text/javascript">
$( "#departamento" ).change(function() {
    var municipio = $("select#departamento option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipio.php',
            data: datastring,
               success: function(data){
                 $('#municipio').html('');
                 $('#municipio').html(data);
               }
        });
});

</script>
</body>

</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>











       
