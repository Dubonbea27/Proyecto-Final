<?php
class presidenteControlador extends presidente{
	public function guardarDatos($con,$objpresidente){
		$variableSql = "INSERT INTO presidente";
		$variableSql .="(id_presidente, dui, nombre, apellido, partido, bandera, candidato)";
		$variableSql .= "VALUES(";
			$variableSql .="'".$objpresidente[0]."',";
			$variableSql .="'".$objpresidente[1]."',";
			$variableSql .="'".$objpresidente[2]."',";
			$variableSql .="'".$objpresidente[3]."',";
			$variableSql .="'".$objpresidente[4]."',";
			$variableSql .="'".$objpresidente[5]."',";
			$variableSql .="'".$objpresidente[6]."');";
return consultaA($con, $variableSql);
	}

	public function modificarDatos($con,$objpresidente){
		$variableSql = "UPDATE presidente SET";
	$variableSql .= "dui ='".$objpresidente[1]."'";
	$variableSql .= ",nombre ='".$objpresidente[2]."'";
	$variableSql .= ",apellido ='".$objpresidente[3]."'";
	$variableSql .= ",partido ='".$objpresidente[4]."'";
$variableSql .=",bandera ='".$objpresidente[5]."'";
$variableSql .=",candidato ='".$objpresidente[6]."'";
$variableSql .="WHERE id_presidente =".$objpresidente[0].";";
return consultaA($con,$variableSql);
	}

}