<?php
error_reporting(0);
session_start();
$nombre = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];

$conexion = mysql_connect("localhost","root") or die ("Error al Conectar");

mysql_select_db("voto", $conexion) or die ("Error al Conectar a la Base de Datos");

$estandar= mysql_query("SELECT * FROM inicio where login ='".$nombre."' and passnormal = '".$pass."'", $conexion);

$admin = mysql_query("SELECT * FROM inicio where login ='" .$nombre."' and passadmin ='".$pass."'", $conexion);

if($row = mysql_fetch_array($estandar)){
	$_SESSION['usuario']= $row;
	
	header("location:ayuda.php");
}else if ( $row = mysql_fetch_array($admin)){
	$_SESSION['usuario'] = $row;
	header("location:ayuda.php");
} else {
	echo "Error Contraseña o Nombre Incorrecto";
}
