<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
  

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
  <title>sistema de votaciones</title>
 
<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo2.css" />
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
     
         
          <nav>
         <p>   <div di= "menu">
             <ul>

               <a href="/proyectomio/ayuda.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>

 <?php
include './clases/coneccion.php';
include './clases/ciudadano.php';
include './clases/ciudadanoControlador.php';

$ciudadanoA = new ciudadanoControlador();

$accion = $_REQUEST['accion'];


switch ($accion){
	case 'save':

  $dui=$_POST['dui'];

  $conexion=mysql_connect("localhost","root","") or die ('ha fallado la conexion con el servidor: '.mysql_error());
  mysql_select_db("voto",$conexion) or die ('Error al seleccionar la Base de datos:'.mysql_error());
  //para el dui unico
  $nuevo_dui=mysql_query("SELECT * FROM ciudadano where dui='$dui'");
  $dui_exist = mysql_num_rows($nuevo_dui);

  if ($dui_exist>0){
    echo "<script type=\"text/javascript\">alert('el numero de dui $dui ya existe');window.location.assign('../ciudadano/registrarciudadano.php');</script>";
  }else{  

	if(isset($_REQUEST['bot'])){
	$ciudadanoA->setId_ciudadano('NULL');
	$ciudadanoA->setDui($_REQUEST['dui']);
	$ciudadanoA->setApellidos($_REQUEST['apellidos']);
	$ciudadanoA->setNombres($_REQUEST['nombres']);
	$ciudadanoA->setGenero($_REQUEST['genero']);
	$ciudadanoA->setId_departamento($_REQUEST['id_departamento']);
  $ciudadanoA->setId_municipio($_REQUEST['id_municipio']);
  $ciudadanoA->setFecha_expe($_REQUEST['fecha_expedicion']);
  $ciudadanoA->setFecha_expira($_REQUEST['fecha_expiracion']);
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
    	$ciudadanoA->getDireccion(),
    	);

      print $ciudadanoA->guardarDatos($con,$datosObj);
      print '<a href=\'manejadorCiudadano.php?accion=con\'>Ver datos</a>';


      }else{
			print 'No se ha enviado datos';
		}
  }
	break;
	case 'con':
	$sql = 'SELECT * FROM ciudadano';
	$datoss = consultaD($con, $sql);
	print imprimetabla($datoss, "ciudadano","table table-bordered",1);
	break;
	default:
	print 'No hay Accion que realiza';
	break;

}

 ?>
</body>
</html>
<?php
}else{
  header("location: inicioAdmon.php");
}
?>