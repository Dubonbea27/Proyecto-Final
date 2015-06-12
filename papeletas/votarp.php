<?php
if(isset($_GET["dui"])){
	$con=mysql_connect("localhost","root");
	mysql_select_db("voto");
	$dui=$_GET["dui"];
	$sql_exe =mysql_query($sql = "UPDATE presidente SET voto = voto+1 WHERE presidente.id_presidente =".$_GET["partido"].";") or die(mysql_error());
	var_dump($sql_exe);

	if($sql_exe){

	 echo "GUARDADO";
	 mysql_query("update ciudadano set estado=0 where dui='".$dui."'");
	 header("location: diputados.php");

	}else{
		echo "error";
	}
}
?>