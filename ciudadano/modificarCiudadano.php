
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
include './clases/ciudadano.php';
include './clases/ciudadanoControlador.php';
$ciudadanoA = new ciudadanoControlador();




if(isset($_REQUEST['bot'])){
	$ciudadanoA->setId_ciudadano('null');
	$ciudadanoA->setDui($_REQUEST['dui']);
	$ciudadanoA->setApellidos($_REQUEST['apellidos']);
	$ciudadanoA->setNombres($_REQUEST['nombres']);
	$ciudadanoA->setGenero($_REQUEST['genero']);
	$ciudadanoA->setId_departamento($_REQUEST['id_departamento']);
    $ciudadanoA->setId_municipio($_REQUEST['id_municipio']);
    $ciudadanoA->setFecha_expe($_REQUEST['fecha_expe']);
    $ciudadanoA->setFecha_expira($_REQUEST['fecha_expira']);
     $ciudadanoA->setDireccion($_REQUEST['direccion']);

    $datosObj=array(
      $ciudadanoA->getId_ciudadano(),
    	$ciudadanoA->getDui(),
    	$ciudadanoA->getApellidos(),
    	$ciudadanoA->getNombres(),
    	$ciudadanoA->getGenero(),
    	$ciudadanoA->getId_departamento(),
    	$ciudadanoA->getId_municipio(),
    	$ciudadanoA->getFecha_expe(),
    	$ciudadanoA->getFecha_expira(),
      $ciudadanoA->getDireccion()
    	);


      print "<div id='dialogo' title ='Exito' style='display: none;'>";
			print '<p>Mensaje:';
			print $ciudadanoA->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorCiudadano.php?accion=con\'>ver datos</a>';
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