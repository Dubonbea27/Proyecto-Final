<?php
class alcaldeControlador extends alcalde{
	public function guardarDatos($con,$objalcalde){
		$variableSql = "INSERT INTO alcalde";
		$variableSql .="(id_alcalde,dui,nombre,apellido,partido,bandera,departamento,municipio)";
		$variableSql .= "VALUES(";
			$variableSql .="'".$objalcalde[0]."',";
			$variableSql .="'".$objalcalde[1]."',";
			$variableSql .="'".$objalcalde[2]."',";
			$variableSql .="'".$objalcalde[3]."',";
			$variableSql .="'".$objalcalde[4]."',";
			$variableSql .="'".$objalcalde[5]."',";
			$variableSql .="'".$objalcalde[6]."',";
			$variableSql .="'".$objalcalde[7]."');";
return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objalcalde){
		$variableSql = "UPDATE alcalde SET";
	$variableSql .= "dui ='".$objalcalde[1]."'";
	$variableSql .= ",nombre ='".$objalcalde[2]."'";
	$variableSql .= ",apellido ='".$objalcalde[3]."'";
	$variableSql .= ",partido ='".$objalcalde[4]."'";
$variableSql .=",bandera ='".$objalcalde[5]."'";
$variableSql .=",departamento ='".$objalcalde[6]."'";
$variableSql .=",municipio ='".$objalcalde[7]."'";
$variableSql .="WHERE id_alcalde =".$objalcalde[0].";";
return consultaA($con,$variableSql);
	}
}