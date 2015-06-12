<html>
<head>
<meta charset="utf-8">
<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title>REGISTRO ALUMNO</title>
<link rel="stylesheet"  href="./libs/bootstrap/cc/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

   <body>
   <div class="jumbotron">
   </div>
      
           <center>
          
        
         <figure>
 <center><img src="imagenes/img.jpg "></img></center>
  </figure>
          
      </center></p>
     
          <nav>
         <p>   <div di= "menu">
             <ul>
            
          </UL></p>
             </div>
              </nav>
     
          <section>
		<div id="textoPr">
			<article>
				<center><hgroup><h1>Activar Elecciones</h1><hgroup></center>
			 
       <form class="center" action="activarelecciones.php" method="GET">
 <table class="tablainsp">	
     <center><from class="center">
                <TABLE >
                 <TR>
                   <td>
                    <input type="CHECKBOX" name="Presidente"> Presidente.
                    </td>
                  <TD>
                   
                
              </td>
               
                   <tr>

                     <TR>
                   <td>
                    <input type="CHECKBOX" name="Asamblea"> Asamblea.
                
                    </td>
                  <TD>
                  
              </td>
               
                   <tr>

                     <TR>
                   <td>
                    <input type="CHECKBOX" name="Consejos Municipales "> Consejos Municipales.
                
                    </td>
                  <TD>
               
                
              </td>

               <tr>
              <td>
          
          Año:
          <input type="text" name="anio" placerholder="anio" title="anio" required>
           </td>
            </tr>
               
                   <tr>
      <td colspan="2">
           <center> <input type= "submit" <img src="imagen/sis7.png "name= 'bot' value= 'Ingresar'></img> 
      </td></center>

    </tr>
</center>
                </TABLE>
                  <from>
                  </div>
   
   
   
   
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
  