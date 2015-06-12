<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<?php include './clases/coneccion.php';?>

<?php
$sql = "SELECT * FROM inscripcionp WHERE id_partido ='".$_REQUEST['id_partido']."';";
$datos= consultaD($con, $sql,3);
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
     
    <nav>
   <p>   <div di= "menu">
             <ul>
<a href="/proyecto/ayuda.php">
<li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
    
          <section>
        <div id="textoPr">
            <article>
                <center><hgroup><h1>Modificar Partidos</h1><hgroup></center>

<div class="jumbotron">
<form action="modificarPartido.php"  method="post" id="partido">
            
<div class="row">
  <div class="col-xs-3">
    Dui de Responsable:
  </div>
  <div class="col-xs-3">
  <input type="text" name="dui_responsable" class="required digits form-control" maxlength="10" id="input" required pattern="[0-9]{8}[-][0-9]{1}" title="Debe contener 9 digitos seguido de '-' antes del ultimo digito"></td>
  </div>
  </div>


  <div class="row">
  <div class="col-xs-2">
     Nombre de Responsable:
    </div>
    <div class="col-xs-2">
    <input type="text" name="responsable" class="required  form-control"value='<?php print $datos[0][2]?>'>
 </div>
 </div>

 <div class="row">
 <div class="col-xs-2">
    Nombre Partido:
 </div>
 <div class="col-xs-2">
 <input type="text" name="partido" class="required form-control" required>
 </div>
 </div>

 <div class="row">
 <div class="col-xs-2">
    Bandera:
 </div>
 <div>
 <input  type="file" name="bandera" required   >
 </div>
 </div>


 <div class="row">
 <div class="col-xs-2">
    Iniciales:
 </div>
 <div class="col-xs-2">
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
 















