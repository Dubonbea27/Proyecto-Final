
<?php
if(isset($_GET["dui"])){
	$con=mysql_connect("localhost","root");
	mysql_select_db("voto");
	$dui=$_GET["dui"];
	$sql_exe= mysql_query($sql = "UPDATE diputado SET voto = voto+1 WHERE diputado.id_diputado =".$_GET["partido"].";") or die(mysql_error());
	var_dump($sql_exe);

	if($sql_exe){ 
		
	echo "GUARDADO";

	header("location: alcaldes.php");
	}else{
		echo "error";
	}
}
?>