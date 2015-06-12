<?php
if(isset($_GET["dui"])){
	$con=mysql_connect("localhost","root");
	mysql_select_db("voto");
	$dui=$_GET["dui"];
	$sql_exe =mysql_query($sql = "UPDATE alcalde SET voto = voto+1 WHERE alcalde.id_alcalde=".$_GET["partido"].";") or die(mysql_error());
	var_dump($sql_exe);

	if($sql_exe){ 

		echo "GUARDADO";
		header("location: iniciovotante.php");
	}else{
		echo"error";
	}
}
?>