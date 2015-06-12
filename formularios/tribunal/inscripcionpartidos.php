<!doctype html>
  
    <html lang="es">

   <head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
     <meta name="contenido" content="codigo basico html5">
       <title>sistema de votaciones</title>
    
         <meta charset="iso-UTF-1">
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
    
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Inscripcion Partidos</h1><hgroup></center>
				
     <form class="center" action="registrarciudadano.php" method="GET">
 <table class="tablainsp">

<tr>
 <td>
  Dui del Responsable:
 <input type="text" name="Fecha de Expedicion" placerholder="Fecha de Expedicion" title="Fecha de Expedicion" required>
 </td>  

   <tr>
 <td>
   Nombre:
 <input type="text" name="dui" placerholder="dui" title="dui" required>
 </td>
 </tr>

 <tr>
 <td>
  Apellido:
 <input type="text" name="apellido" placerholder="apellido" title="apellido" required>
 </td>
 </tr>

<class="col-xs-2">
    <tr>
 <td>
   Bandera:
 
 <select name='tipo' class="required form-control">
<option value=""></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        
                          </select >                   


<tr>
 <td>
Iniciales:
 <input type="text" name="Iniciales" placerholder="Iniciales" title="Iniciales" required>
 </td>
 </tr>


<tr>
 <td>
  Año:
 <input type="text" name="año" placerholder="año" title="año" required>
 </td>


 <tr>
 <td colspan="2">
  <input type="submit" name='bot' value= 'Guardar'>
 
  <input type="submit" name='bot' value='Actualizar'>
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
  