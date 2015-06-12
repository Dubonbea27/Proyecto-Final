<?php include './clases/coneccion.php';?>
<?php include 'functions.php'; ?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
  <title>sistema de votaciones</title>
  <link type="text/css" rel="stylesheet" href="css/index.css">

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

               <a href="index.php">
             <li> Pagina Prinicpal</li></a>
          </UL></p>
             </div>
              </nav>
    
          <section>
    <div id="textoPr">
      <article>
        <center><hgroup><h1>Registrar Candidato</h1><hgroup></center>
       <?php include 'clases/config.php';
       ?>
       <form action="inscripcionC.php" method="get">
       <p> Dui:
       <input type="text" name="letras" value="buscar" />
       <input type="submit" name="buscador" value="Buscar" class="btn btn-primary" /></p>
       </form>
 <div class="jumbotron">
 <form action="manejadorCandidato.php?accion=save" method="post" id="candidato">
<table class="table-bordered">
 
 <?php
 if (isset($_GET['buscador']))
{

$buscar = $_GET['letras'];


if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

  $sql = "SELECT * FROM ciudadano WHERE dui LIKE '%$buscar%'";
  $result = mysql_query($sql,$connect);

  $total = mysql_num_rows($result);

  if ($row = mysql_fetch_array($result)) {

    do{
 ?>

 <div class="row">
 <div class="col-xs-2">
      Dui:
 </div>
 <div class="col-xs-2">
 <input type="text" name="dui" class="required digits form-control"value="<?php echo $row['dui']; ?>">
 </div>

  <div class="row">
  <div class="col-xs-2">
       Apellidos:
  </div>
  <div class="col-xs-2">
  <input type="text" name="apellidos" class="required  form-control"value="<?php echo $row['apellidos']; ?>">
  </div>
  </div>


  <div class="row">
  <div class="col-xs-2">
       Nombres:
  </div>
  <div class="col-xs-2">
  <input type="text" name="nombres" class="required  form-control"value="<?php echo $row['nombres']; ?>">
  </div>
  </div>

  <?php
}
while ($row = mysql_fetch_array($result));
}
else
{
echo "Este numero de DUI no existente: $buscar";
}
}
}
?>

 <div class="row">
 <div class="col-xs-2">
     Tipo de Candidatura:
 </div>
 <div class="col-xs-2">
 <select name='candidato' class="required form-control">
 <option value=""></option>
 <option value="precidencial">PRESIDENTE</option>
 <option value="acalde">ALCALDE</option>
 <option value="diputado">DIPUTADO</option>
 </select >
 </div>
 </div>

 <div class="row">
 <div class="col-xs-2">
      Departamento:
 </div>
 <div class="col-xs-2">
 <select id="departamento" name="departamento" class="required form-control" >
 <option></option>
  <?php __ListarEstados(); ?>
 </select>
 </div>
 </div>

 <div class="row">
 <div class="col-xs-2">
     Municipio:
 </div>
 <div class="col-xs-2">
 <select id="municipio"  name ="municipio" class="required form-control" >
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
 <div class="col-xs-2">
        Partido politico:
 </div>
 <div class="col-xs-2">
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
  </div>

  <div class="row">
  <div class="col-xs-2">
  </div>
  <div class="col-xs-2">
    <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="partidario">  Partidario  
  </div>
  </div>


  <div class="row">
  <div class="col-xs-2">
  </div>
  <div class="col-xs-2">
    <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="Independiente">  Independiente  
  </div>
  </div>

  <div class="row">
  <div class="col-xs-2">
       Anio:
  </div>
  <div class="col-xs-2">
  <input type="text" name="año" placeholder="año" title="año" required>
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
   <input type="submit" name=' registar' value='Guardar' class="btn btn-primary">
   <input type="submit" name='actualizar' value='Modificar' class="btn btn-primary">
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
            url: 'municipios.php',
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














