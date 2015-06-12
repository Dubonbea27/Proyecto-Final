<?php

function  _ListarEstados(){
 
 $host = 'localhost';
 $base = 'voto';
 $usuario = 'root';
 $password = '';
 try{
 	$conn = new PDO('mysql:host='.$host.';dbname='.$base.'',$usuario,$password);
 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
 	$conn->exec("SET CHARACTER SET utf8");

 }catch(PDOException $e){
 	echo "ERROR:" . $e->getMessage();

 }
  $sql = $conn->prepare('SELECT * FROM departamento');
     $sql->execute();
     $resultado = $sql->fetchAll();
     foreach ($resultado as $row){
     	echo "<option value='".$row['id_departamento']."'>".$row['departamento']."</option>";

     }

}
?>
