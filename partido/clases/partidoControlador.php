<?php
class partidoControlador extends partido{
	public function guardarDatos($con,$objpartido){
		$variableSql = "INSERT INTO partido";
		$variableSql .="(id_partido,dui_responsable,responsable,partido,bandera,iniciales)";
            $variableSql .= "VALUES (";
        	$variableSql.="'".$objpartido[0]."',";
        	$variableSql.="'".$objpartido[1]."',";
        	$variableSql.="'".$objpartido[2]."',";
        	$variableSql.="'".$objpartido[3]."',";
        	$variableSql.="'".$objpartido[4]."',";
        	$variableSql.="'".$objpartido[5]."');";
            
            return consultaA($con, $variableSql);
	}

public function modificarDatos($con,$objpartido){
	$variableSql = "UPDATE partido SET ";
	$variableSql .= "dui_responsable='".$objpartido[1]."'";
	$variableSql .= ", responsable ='".$objpartido[2]."'";
	$variableSql .= ", partido ='".$objpartido[3]."'";
	$variableSql .= ", bandera='".$objpartido[4]."'";
$variableSql .=", iniciales ='".$objpartido[5]."'";
$variableSql .=" WHERE id_partido =".$objpartido[0].";";
return consultaA($con,$variableSql);
}
}