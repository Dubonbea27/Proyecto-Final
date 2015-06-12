<?php
$numero = $_REQUEST['dui'];

$conexion = mysql_connect("localhost", "root") or die ("Problema al conectar");

mysql_select_db("voto", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

$estandar= mysql_query("SELECT * FROM ciudadano where dui ='".$numero."'",$conexion);

if($row = mysql_fetch_array($estandar)){
	header("location: presidenciales.php");
}else{
	echo "Su Dui es Incorrecto";
}