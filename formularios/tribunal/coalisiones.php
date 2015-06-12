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

     <link type="text/css" rel="stylesheet" href="css/presidentes.css">
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
				<center><hgroup><h1>Coalisiones</h1><hgroup></center>
				
     <form class="center" action="coalisiones.php" method="GET">
 <table class="tablainsp">

    <class="col-xs-2">
                    <select name='tipo' class="required form-control">
                         
                             <class="col-xs-2">
                        <option value="">Partido A</option>
                        <option value="partido">Arena</option>
                        <option value="partido">pcn </option>
                        <option value="partido">Gana </option>
                        <option value="partido">fmln </option>
                        <option value="partido">unidad</option>
                        </select>

                        <class="col-xs-2">
                        <select name='tipo' class="required form-control">
                        <option value="">partido B</option>
                         <option value="partido">Arena</option>
                        <option value="partido">pcn </option>
                        <option value="partido">Gana </option>
                        <option value="partido">fmln  </option>
                        <option value="partido">unidad</option>
                       </select >

                     <class="col-xs-2">
                        <select name='tipo' class="required form-control">
                        <option value="">partido B</option>
                         <option value="partido">Arena</option>
                        <option value="partido">pcn </option>
                        <option value="partido">Gana </option>
                        <option value="partido">fmln  </option>
                        <option value="partido">unidad</option>
                       </select >  


                         <class="col-xs-2">
                        <select name='tipo' class="required form-control">
                        <option value="">partido B</option>
                         <option value="partido">Arena</option>
                        <option value="partido">pcn </option>
                        <option value="partido">Gana </option>
                        <option value="partido">fmln  </option>
                        <option value="partido">unidad</option>
                        </select >

                        <class="col-xs-2">
                        <select name='tipo' class="required form-control">
                        <option value="">partido B</option>
                         <option value="partido">Arena</option>
                        <option value="partido">pcn </option>
                        <option value="partido">Gana </option>
                        <option value="partido">fmln  </option>
                        <option value="partido">unidad</option>
                       </select >




                           
 <tr>

 <td>
  Valido en:
  </tr>
</td>
 <class="col-xs-2">
    <tr>
 <td>
   Departamento:
 
 <select name='tipo' class="required form-control">
<option value=""></option>
                        <option value="partido">Ahuachapan</option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        <option value="partido"></option>
                        
                          </select >                   

<class="col-xs-2">
    <tr>
 <td>
  Municipio:
 
  <select name='tipo' class="required form-control">
                         <option value=""></option>
                        <option value="municipio"></option>
                        <option value="municipio"></option>
                        <option value="municipio"></option>
                        <option value="municipio"></option>
                     
                          </select >

  </td>
  </tr>

 <td>
   Candidato:
 <input type="text" name="candidato" placerholder="candidato" title="candidato" required>  <form class="center" action="coalisiones.php" method="GET">
 <table class="tablainsp">

 </td>
 </tr>



<tr>
 <td colspan="2">
  <input type="submit" name='bot' value= 'Guardar'>
 </td>
 <td>
  <input type="submit" name='bot' value='Cancelar'>
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
  