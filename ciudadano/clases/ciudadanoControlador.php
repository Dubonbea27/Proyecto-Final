<?php
class ciudadanoControlador extends ciudadano{
	public function guardarDatos($con,$objciudadano){
		
        $variableSql = "INSERT INTO ciudadano";
		$variableSql .="(id_ciudadano,dui,apellidos,nombres,genero,";
        $variableSql .="id_departamento,id_municipio,fecha_expe,fecha_expira,direccion)";
       $variableSql .="VALUES (";
        	$variableSql.="'".$objciudadano[0]."',";
        	$variableSql.="'".$objciudadano[1]."',";
        	$variableSql.="'".$objciudadano[2]."',";
        	$variableSql.="'".$objciudadano[3]."',";
        	$variableSql.="'".$objciudadano[4]."',";
        	$variableSql.="'".$objciudadano[5]."',";
        	$variableSql.="'".$objciudadano[6]."',";
        	$variableSql.="'".$objciudadano[7]."',";
            $variableSql.="'".$objciudadano[8]."',";
        	$variableSql.="'".$objciudadano[9]."');";

            return consultaA($con, $variableSql);
	}

public function modificarDatos($con,$objciudadano){
	$variableSql = "UPDATE ciudadano SET";
	$variableSql .= "dui ='".$objciudadano[1]."'";
	$variableSql .= ",apellidos ='".$objciudadano[2]."'";
	$variableSql .= ",nombres ='".$objciudadano[3]."'";
	$variableSql .= ",genero ='".$objciudadano[4]."'";
$variableSql .=",id_departamento ='".$objciudadano[5]."'";
$variableSql .=",id_municipio ='".$objciudadano[6]."'";
$variableSql .=",fecha_expe ='".$objciudadano[7]."'";
$variableSql .=",fecha_expira ='".$objciudadano[8]."'";
$variableSql .=",direccion ='".$objciudadano[9]."'";
$variableSql .="WHERE id_ciudadano =".$objciudadano[0].";";
return consultaA($con,$variableSql);
}
}