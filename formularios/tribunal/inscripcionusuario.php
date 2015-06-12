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
				<center><hgroup><h1>Inscripcion de Usuario</h1><hgroup></center>
				
        <div class="jumbotron">

       <form class="center" action="inscripcionCan.php" method="GET">
 <table class="tablainsp">


  <div class="row">
                <div class="col-xs-1">
                Usuario:
                </div>
                
                    <input type="text" name=" usuario"  class="required  form-control" required >
                </div>
                </div>

  <div class="row">
                <div class="col-xs-1">
               Nombre:
                </div>
               
                    <input type="text" name=" nombre"  class="required  form-control" required >
                </div>
                </div>


 <div class="row">
                <div class="col-xs-3">
               Apellido:
                </div>
              
                    <input type="text" name=" apelldio"  class="required  form-control" required >
                </div>
                </div>



 <div class="row">
                <div class="col-xs-1">
           Clave:
                </div>
               
                    <input type="text" name=" clave"  class="required  form-control" required >
                </div>
                </div>

<div class="row">
                <div class="col-xs-1">
               Confirmar Clave:
                </div>
              
                    <input type="text" name=" confirmar clave"  class="required  form-control" required >
                </div>
                </div>

  <div class="row">
                 <div class="col-xs-3">
                    Cargo
                </div>
               
                    <input type="text" name="cargo" class="required  form-control" required >
                </div>
            </div>

   <div class="row">
                 <div class="col-xs-3">
                  Dui
                </div>
                
                    <input type="text" name="dui" class="required  form-control" required >
                </div>
            </div>

  <div class="row">
                 <div class="col-xs-3">
                E-mail
                </div>
               
                    <input type="text" name="e-mail" class="required  form-control" required >
                </div>
            </div>

</div>

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
  