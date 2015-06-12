<?php
class diputadoControlador extends diputado{
	public function guardarDatos($con,$objdiputado){
	$variableSql = "INSERT INTO diputado";
	$variableSql .="(id_diputado, dui, nombre, apellido, partido, bandera, departamento)";
	$variableSql .= "VALUES (";
		$variableSql .="'".$objdiputado[0]."',";
		$variableSql .="'".$objdiputado[1]."',";
		$variableSql .="'".$objdiputado[2]."',";
		$variableSql .="'".$objdiputado[3]."',";
		$variableSql .="'".$objdiputado[4]."',";
		$variableSql .="'".$objdiputado[5]."',";
		$variableSql .="'".$objdiputado[6]."');";
return consultaA($con, $variableSql);
	}

	public function modificarDatos($con,$objdiputado){
		$variableSql = "UPDATE diputado SET";
	$variableSql .= "dui ='".$objdiputado[1]."'";
	$variableSql .= ",nombre ='".$objdiputado[2]."'";
	$variableSql .= ",apellido ='".$objdiputado[3]."'";
	$variableSql .= ",partido ='".$objdiputado[4]."'";
$variableSql .=",bandera ='".$objdiputado[5]."'";
$variableSql .=",departamento ='".$objdiputado[6]."'";
$variableSql .="WHERE id_alcalde =".$objdiputado[0].";";
return consultaA($con,$variableSql);
	}
}