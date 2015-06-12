<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<meta meta="description" content="VOTACIONES"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>ELECCIONES EL SALVADOR</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />
  


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  
 <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
  
</head>
<header>

<figure>
 
            
              <center><p> <img src="imagen/333.gif">  </p></center>

     <h1>VOTACIONES EN LINE</h1>

  </header>

  
</div>
</div>


 <div class="jumbotron">
        <form action="dui.php" method="post" id="dui">
        <div id="tex">
            <table class="table-bordered">

            <div class="row">
            
                <div class="col-xs-6">
                    Dui:
                </div>
                <div class="col-xs-2">
                    <input type = "text" name = "dui" style="width:180px;"></CENTER>
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='BUSCAR' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>

    
</body>

</html>

<?php
error_reporting(0);
session_start();
 @$numero = $_REQUEST['dui'];
$conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("voto", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM ciudadano where dui = '".$numero."'" ,$conexion);

 if($row = mysql_fetch_array($estandar)){
  $_SESSION['usuario'] = $row;
    header("location: presidenciales.php");

} else {
   
}
?>

