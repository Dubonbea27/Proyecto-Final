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
 <center><img src="imagenes/img.jpg "></img></center>e> 
        
  </figure>
      </center></p>
     
          <nav>
         <p>   <div di= "menu">
             <ul>

               <a href="index.html">
             <li> INICIO</li></a>
             

                 <a href="departamentos.php" >
              <li> DEPARTAMENTOS</li></a>

                      <a href="ol.html">
              <li> TRADUCCION OLFATIVA</li></a>
          </UL></p>
             </div>
              </nav>
     
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Votacion Presidencial</h1><hgroup></center>
          <figure>

<a href="votar.php" title="votar">         
<br><img src="imagenes/fmln.jpg" border="0"><img src="imagenes/arena.jpg" width=""heigh="104" HSPACE=40 border="0"><img src="imagenes/pcn.jpg" width=""heigh="104" HSPACE=20 border="0"><img src="imagenes/gana.jpg" width=""heigh="104"  border="0"><img src="imagenes/unidad.jpg" width=""heigh="104" HSPACE=40 border="0"></a></br> <br>

</figure>
				
       <form class="center" action="votacionpre.php" method="GET">
 <table class="tablainsp">
<center><tr>
 <td colspan="1">
  <input type="submit" name='bot' value= 'Aceptar'>   <td colspan="1">
  <input type="submit" name='bot' value= 'Aceptar'>
 </td>
 </td>


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
  