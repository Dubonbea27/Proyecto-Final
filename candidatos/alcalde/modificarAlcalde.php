<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<html>
<head>
 <meta charset="UTF-8">
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
<?php
include './clases/coneccion.php';
include './clases/alcalde.php';
include './clases/alcaldeControlador.php';
$alcaldeA = new alcaldeControlador();




if(isset($_REQUEST['bot'])){
	$alcaldeA->setId_alcalde('null');
	$alcaldeA->setDui($_REQUEST['dui']);
	$alcaldeA->setNombre($_REQUEST['nombre']);
	$alcaldeA->setApellido($_REQUEST['apellido']);
	$alcaldeA->setPartido($_REQUEST['partido']);
	$alcaldeA->setBandera($_REQUEST['bandera']);
  $alcaldeA->setDepartamento($_REQUEST['departamento']);
  $alcaldeA->setMunicipio($_REQUEST['municipio']);


    $datosObj=array(
      $alcaldeA->getId_alcalde(),
    	$alcaldeA->getDui(),
    	$alcaldeA->getNombre(),
    	$alcaldeA->getApellido(),
    	$alcaldeA->getPartido(),
    	$alcaldeA->getBandera(),
    	$alcaldeA->getDepartamento(),
    	$alcaldeA->getMunicipio()

    	);


      print "<div id='dialogo' title ='Exito' style='display: none;'>";
			print '<p>Mensaje:';
			print $alcaldeA->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorAlcalde.php?accion=con\'>ver datos</a>';
			print "</div>";

		}
?>
<script >
   $(document).ready(function(){
 $("#dialogo").dialog();

   });

</script>
</body>
</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>