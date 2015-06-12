<?php
class eleccionControlador extends eleccion{
	public function guardarDatos($con,$objeleccion){
		$variableSql = "INSERT INTO eleccion";
		$variableSql .="(id_eleccion,presidenciales,alcaldes,diputados,anio)";
		$variableSql .="VALUES (";
			$variableSql.="'".$objeleccion[0]."',";
			$variableSql.="'".$objeleccion[1]."',";
			$variableSql.="'".$objeleccion[2]."',";
			$variableSql.="'".$objeleccion[3]."',";
			$variableSql.="'".$objeleccion[4]."');";
            return consultaA($con, $variableSql);
	}

	public function modificarDatos($con,$objeleccion){
		$variableSql = "UPDATE eleccion SET";
		$variableSql .="presidenciales='".$objeleccion[1]."'";
		$variableSql .="alcaldes='".$objeleccion[2]."'";
		$variableSql .="diputados='".$objeleccion[3]."'";
		$variableSql .="anio='".$objeleccion[4]."'";
		$variableSql .="WHERE id_eleccion=".$objeleccion[0].";";
		return consultaA($con,$variableSql);
	}
}