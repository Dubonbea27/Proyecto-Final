<!doctype html>
  
    <html lang="es">

   <head>
  <meta charset="iso-8859-1">
  <meta name="descripcion" content="extructura de un documento web">
     <meta name="contenido" content="codigo basico html5">
       <title>sistema de votaciones</title>
    
         <meta charset="iso-8859-1">
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
     
         
     
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Inicio Administrador</h1><hgroup></center>
				
     <form class="center" action="inicioAdmon.php" method="GET">
 <table class="tablainsp">
 <tr>
 <td>
Usuario:
 <input type="text" name="usuario" placerholder="nusuario" title="usuaio" required>
 </td>
 </tr>

 <tr>
 <td>
   Clave:

 <input type="text" name="clave" placeholder="clave" title="clave" required>
 </td>
 </tr>

 <td>
  <input type="submit" name='bot' value='Aceptar'>
 </td>
 </tr>
 </table>
</form>
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
  