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
     
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Inscripcion del Votante</h1><hgroup></center>
				
      <form class="center" action="inscripcionCan.php" method="GET">
 <table class="tablavotante">
 <tr>
 <td>
   Dui:
 <input type="text" name="dui" placerholder="dui" title="dui" required>
 </td>
 </tr>

 <tr>
 <td>
   Apellido:

 <input type="text" name="apellido" placeholder="apellido" title="apellido" required>
 </td>
 </tr>

 <tr>
 <td>
Nombre:

 <input type="text" name="nombres" placeholder="nombres" title="nombres" required>
 </td>
 </tr>


 <tr>
 <td>
  Genero:      
 
 <select name='tipo' class="required form-control">
<option value=""></option>
                        <option value="f">Femenino</option> 
                         <option value="m">Masculino</option> 

 

 
<class="col-xs-2">
    <tr>
 <td>
Departamento:
          </div>
          <div class="col-xs-3">
          <select  id="departamento" name= "id_departamento" class="required form-control" required >
          <option value='<?php print $datos[0][5]?>'>
                <?php 
                $sql2="select departamento from departamento where id_departamento='".$datos[0][5]."'";
                $da = consultaD($con,$sql2,3);                       
                    print $da[0][0];
                    ?>
                    </option>
                     
                    <?php 
                
                     $sql = "SELECT id_departamento, departamento FROM departamento WHERE id_departamento != '".$datos[0][5]."'";  
                        $datos = consultaD($con, $sql);
                        foreach ($datos as $value) {
                            print "<option value='";
                            print $value['id_departamento'];
                            print "'>";
                            print $value['departamento'];
                            print "</option>";
                        }                
                    ?>
                </select >
                </div>
                </div>
                
                              


                      
     <div class="row">
            <div class="col-xs-3">
                    Municipio:
                </div>
                <div class="col-xs-3">
                 <select  id="municipio" name ="id_municipio" class="required form-control" required >
                 <option value='<?php print $datos[0][6]?>'>
                             <?php  
                        $sql2="select id_municipio from municipio where id_municipio ='".$datos[0][0]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                      </option>
         
                        <?php 
                
                          $sql = "SELECT id_municipio, municipio FROM municipio WHERE id_municipio != '".$datos[0][6]."'";  
                          $datos = consultaD($con, $sql);
                             foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id_municipio'];
                                print "'>";
                                print $value['municipio'];
                                print "</option>";
                            }                
                        ?>
                         </select >
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
  