obj<?php
class candidatoControlador extends candidato{
	public function guardarDatos($con,$objcandidato){
		$variableSql = "INSERT INTO candidato";
		$variableSql .="(id_candidato,dui,apellidos,nombres,tipodecan,";
        $variableSql .="id_departamento,id_municipio,id_partido,participacion,direccion)";
       $variableSql .="VALUES (";
        	$variableSql.="'".$objcandidato[0]."',";
        	$variableSql.="'".$objcandidato[1]."',";
        	$variableSql.="'".$objcandidato[2]."',";
        	$variableSql.="'".$objcandidato[3]."',";
        	$variableSql.="'".$objcandidato[4]."',";
        	$variableSql.="'".$objcandidato[5]."',";
        	$variableSql.="'".$objcandidato[6]."',";
        	$variableSql.="'".$objcandidato[7]."',";
            $variableSql.="'".$objcandidato[8]."',";
            $variableSql.="'".$objcandidato[9]."');";
            return consultaA($con, $variableSql);
	}

public function modificarDatos($con,$objcandidato){
	$variableSql = "UPDATE candidato SET";
	$variableSql .= "dui ='".$objcandidato[1]."'";
	$variableSql .= ",apellidos ='".$objcandidato[2]."'";
	$variableSql .= ",nombres ='".$objcandidato[3]."'";
	$variableSql .= ",tipodecan ='".$objcandidato[4]."'";
$variableSql .=",id_departamento ='".$objcandidato[5]."'";
$variableSql .=",id_municipio ='".$objcandidato[6]."'";
$variableSql .=",id_partido ='".$objcandidato[7]."'";
$variableSql .=",participacion='".$objcandidato[8]."'";
$variableSql .=",direccion='".$objcandidato[9]."'";
$variableSql .="WHERE id_candidato =".$objcandidato[0].";";
return consultaA($con,$variableSql);
}
}