<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title>sistema de votacion</title>
<link rel="stylesheet"  href="./libs/bootstrap/css/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

<body>
<?php

include './clases/coneccion.php';
include './clases/eleccion.php';
include './clases/eleccionControlador.php';
$sql ="DELETE FROM eleccion WHERE id_eleccion=".$_REQUEST['id_eleccion'].";";
print "<div id='dialogo' title='exito' style='display: none;'>";
print '<p>Mensaje: ';
print consultaA($con, $sql);
print '<span class="badge glyphicon glyphicon-ok"></span></p>';
print '<a href=\'manejadorEleccion.php?accion=con\'>Ver datos</a>';
print "</div>";

?>
<script>
$(document).ready(function(){
	$("#dialogo").dialog();
});
</script>
</body>
</html>


   