<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<?php include './clases/coneccion.php';?>
<?php include 'functions.php';?>

<?php
$sql = "SELECT * FROM diputado WHERE id_diputado ='".$_REQUEST['id_diputado']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
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
     
         
          <nav>
         <p>   <div di= "menu">
             <ul>

               <a href="/proyectomio/ayuda.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
    
          <section>
    <div id="textoPr">
      <article>
        <center><hgroup><h1>Modificar Diputado</h1><hgroup></center>
       
        <div class="jumbotron">
 <form action="modificarDiputado.php?accion=save" method="post" id="candidato">
 <div id="text">
 <table class="table-bordered">

 <div class="row">
 <div class="col-xs-3">
      Dui:
 </div>
 <div class="col-xs-3">
 <input type="text" name="dui" class="required digits form-control" maxlength="10" id="input" required pattern="[0-9]{8}[-][0-9]{1}" title="Debe contener 9 digitos seguido de '-' antes del ultimo digito"></td>;
 </div>


  <div class="row">
  <div class="col-xs-3">
       Nombres:
  </div>
  <div class="col-xs-3">
  <input type="text" name="nombre" class="required  form-control" required>
  </div>
  </div>


<div class="row">
  <div class="col-xs-3">
        Apellidos:
  </div>
  <div class="col-xs-3">
  <input type="text" name="apellido" class="required  form-control" required>
  </div>
  </div>

  <div class="row">
  <div class="col-xs-3">
        Partido politico:
 </div>
 <div class="col-xs-3">
 <select name='partido' class="required form-control">
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
    Bandera:
 </div>
 <div>
 <input  type="file" name="bandera" required   >
 </div>
 </div>

 <div class="row">
 <div class="col-xs-3">
  Departamento:
       </div>
       <div class="col-xs-3">
       <select  id="departamento" name="departamento" class="required form-control" required>
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
        </select >
        </div>
        </div>


 <div>
    <td colspan="2">
    <input type="submit" name='bot' value='REGISTRAR' class="btn btn-primary">

    </div>
    </div>
    </table>
    </form>
    </div>

     <script type="text/javascript">
$( "#departamento" ).change(function() {
    var municipio = $("select#municipio option:selected").val();
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

 <script type="text/javascript">
$( "#departamento" ).change(function() {
    var municipio = $("select#municipio option:selected").val();
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