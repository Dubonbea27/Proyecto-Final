<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>sistema de votaciones</title>
  <link type="text/css" rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="jquery.keypad.css" rel="stylesheet">

  
<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title></title>
<link rel="stylesheet"  href="./libs/bootstrap/css/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

<script  type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" > </script>
 <link href="jquery.keypad.css" rel="stylesheet">
<style>
#inlineKeypad { width: 10em; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.keypad.js"></script>
<script>
$(function () {
  $('#defaultKeypad').keypad();
  $('#inlineKeypad').keypad({onClose: function() {
    alert($(this).val());
  }});
});
</script>

</head>
 

   <body>
       <header>
           <center>
          
         <figure>
 <center><img src="imagenes/img.jpg "></img></center>
  </figure>
          
      </center></p>
      <center><hgroup><h1>Inicio del Votante</h1><hgroup></center>
        
     
          <nav>
         <p>   <div di= "menu">
             <ul>

                
     
          <section>
		<div id="textoPr">
			<article>
				
    <div class="jumbotron">
  <form action = " " method = "post" id="inicio">
    
    <div class="row">
     <div class="col-xs-2">
        INGRESE SU DUI:
      </div>
      <div class="col-xs-2">
      <input type="text" id="defaultKeypad" name="dui" class="required digits form-control">
      </div>

       <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='ENTRAR' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
</body>

</html>

<?php
error_reporting(0);
session_start();
if(isset($_POST["dui"])){

 $nombre = $_REQUEST['dui'];

 $conexion = mysql_connect("localhost", "root","") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("voto", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM ciudadano where dui = '".$nombre."' " ,$conexion);

if(mysql_num_rows($estandar)>0){
  $_SESSION['usuario'] = $_POST['dui'];
  header("location: presidentes.php");
}else{
  echo "El numero de dui no se encuentra";
}
}
?>
