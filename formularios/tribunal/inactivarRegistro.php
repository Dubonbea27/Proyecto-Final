<!doctype html>
  
    <html lang="es">

   <head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
     <meta name="contenido" content="codigo basico html5">
       <title>sistema de votaciones</title>
    
         <meta charset="iso-UTF-8">
       <meta name="Descripcion" content="multimedia">
     <meta name="Contenido" content="basico de multimedia">

     <link type="text/css" rel="stylesheet" href="css/index.css">
   </head>

   <body>
       <header>
           <center>
          
      
         <figure>
 <center><img src="imagenes/img.jpg "></img></center>
  </figure>
          
      </center></p>
     
          <nav>
         <p>   <div di= "menu">
             <ul>

                 <a href="index.php">
             <li> Pagina Prinicpal</li></a>

          </UL></p>
             </div>
              </nav>
     <center>
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Inactivar Registro</h1><hgroup></center>
				
     <form class="center" action="inactivarRegistro.php" method="GET">
 <table class="tablainsp">

 </td>
 </tr>
  <tr>
 <td colspan="2">
  <input type="submit" name='bot' value= 'Registros Ciudadanos'>
 <td colspan="2">
 <input type="submit" name='bot' value='Registros Partidos'> 
 <td colspan="2">
  <input type="submit" name='bot' value= 'Registros Candidato'>
 </td>
 </tr>
</tr>
<center>
  <tr>
 <td colspan="2">
  <input type="submit" name='bot' value= 'Aceptar'>
  <input type="submit" name='bot' value= 'Cancelar'>
 </td>
 </td>
 </tr>
</center>
 </table>
</form>
</center>
</body>
</html>

<?php
if
  (isset($_GET["nombre"]) && isset($_GET["responsable"]))
{
  $nombre= $_GET["nombre"];
  $responsable= $_GET["responsable"];
  capturadedatos($nombre,$responsable);
} 

function capturadedatos ($nombre)
{
  echo "nombre" .$nombre. "; responsable".$responsable;
}

?>



 <figure>
        <article>
            </figure>
             </article>
               </center> 
				</article>
			
		</div>
	</section>
	<footer>
	</footer>
</div>
</body>
</html>
  