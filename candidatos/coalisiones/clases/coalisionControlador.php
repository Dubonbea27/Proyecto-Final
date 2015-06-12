<?php
class coalisionControlador extends coalision{
	public function guardarDatos($con,$objcoalision){
		$variableSql = "INSERT INTO coalisiones";
		$variableSql .="(id_coalisiones, partidoA, partidoB, partidoC, partidoD, partidoE, nombre, id_departamento, id_municipio)";
		$variableSql .="VALUES(";
			$variableSql.="'".$objcoalision[0]."',";
			$variableSql.="'".$objcoalision[1]."',";
			$variableSql.="'".$objcoalision[2]."',";
			$variableSql.="'".$objcoalision[3]."',";
			$variableSql.="'".$objcoalision[4]."',";
			$variableSql.="'".$objcoalision[5]."',";
			$variableSql.="'".$objcoalision[6]."',";
			$variableSql.="'".$objcoalision[7]."',";
			$variableSql.="'".$objcoalision[8]."');";
            return consultaA($con, $variableSql);
	}

	public function modificarDatos($con, $objcoalision){
		$variableSql = "UPDATE coalisiones SET";
		$variableSql .="partidoA ='".$objcoalision[1]."'";
		$variableSql .=",partidoB ='".$objcoalision[2]."'";
		$variableSql .=".partidoC ='".$objcoalision[3]."'";
		$variableSql .=",partidoD ='".$objcoalision[4]."'";
		$variableSql .=",partidoE ='".$objcoalision[5]."'";
		$variableSql .=",nombre ='".$objcoalision[6]."'";
		$variableSql .=",id_departamento ='".$objcoalision[7]."'";
		$variableSql .=",id_municipio ='".$objcoalision[8]."'";
		$variableSql .="WHERE id_coalisiones =".$objcoalision[0].";";
		return consultaA($con,$variableSql);
	}
}