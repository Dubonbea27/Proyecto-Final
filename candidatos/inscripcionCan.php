<?php include './clases/coneccion.php';?>
<?php include 'functions.php'; ?>

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

       <center><hgroup><h1>Registrar Candidato</h1><hgroup></center>
     
         
          <nav>
         <p>   <div di= "menu">
             <ul>

               <a href="index.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
    
          <section>
    <div id="textoPr">
      <article>
       
       
 <div class="jumbotron">
 <form action="manejadorCandidato.php?accion=save" method="post" id="candidato">
<div id="text">
<table class="table-bordered">

 <div class="row">
 <div class="col-xs-3">
      Dui:
 </div>
 <div class="col-xs-3">
 <input type="text" name="dui" class="required digits form-control" required digits >
 </div>

  <div class="row">
  <div class="col-xs-3">
       Apellidos:
  </div>
  <div class="col-xs-3">
  <input type="text" name="apellidos" class="required  form-control" required >
  </div>
  </div>


  <div class="row">
  <div class="col-xs-3">
       Nombres:
  </div>
  <div class="col-xs-3">
  <input type="text" name="nombres" class="required  form-control" required>
  </div>
  </div>


 <div class="row">
 <div class="col-xs-3">
     Tipo de Candidatura:
 </div>
 <div class="col-xs-3">
 <select name='tipodecan' class="required form-control" required>
 <option value=""></option>
 <option value="precidencial">PRESIDENTE</option>
 <option value="acalde">ALCALDE</option>
 <option value="diputado">DIPUTADO</option>
 </select >
 </div>
 </div>

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
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='id_partido' class="required form-control">
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
  </div>
  <div class="col-xs-3">
    <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="partidario">  Partidario  
  </div>
  </div>


  <div class="row">
  <div class="col-xs-3">
  </div>
  <div class="col-xs-3">
    <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="Independiente">  Independiente  
  </div>
  </div>



   <div class="row">
   <div class="col-xs-3">
      Direccion:
   </div>
   <div class="col-xs-3">
   <input type="text" name="direccion" class="required  form-control" required >
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














