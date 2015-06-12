<?php include './clases/coneccion.php';?>
<?php include 'functions.php'; ?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
  <title>sistema de votaciones</title>
  <link type="text/css" rel="stylesheet" href="css/index.css">

<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title></title>
<link rel="stylesheet"  href="./libs/bootstrap/css/bootstra.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
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
				<center><hgroup><h1>Registrar ciudadano</h1><hgroup></center>
			 
       <div class="jumbotron">	
       <form action="manejadorciudadano.php?accion=save" method="post" id="ciudadano">
       <table class="tablainsp">
       


       <div class="row">
       <div class="col-xs-3">
              Dui:
       </div>
       <div class="col-xs-3">
       <input type="text" name="dui" class="required digits form-control"required digits >
       </div>
       </div>

       <div class="row">
       <div class="col-xs-3">
              Apellidos:
       </div>
       <div class="col-xs-3">
       <input type="text" name="apellidos" class="required digits form-control"required >
       </div>
       </div>


       <div class="row">
       <div class="col-xs-3">
              Nombres:
       </div>
       <div class="col-xs-3">
       <input type="text" name="nombres" class="required digits form-control"required >
       </div>
       </div>


       <div class="row">
       <div class="col-xs-3">
            Genero:
       </div>
       <div class="col-xs-3">
       <select name='genero' class="required form-control" required >
       <option value=""></option>
       <option value="M">MACULINO</option>
       <option value="F">FEMENINO</option>
       </select >
       </div>
       </div>


       <div class="row">
       <div class="col-xs-3">
            Departamento:
       </div>
       <div class="col-xs-3">
       <select  id="departamento" name= "id_departamento" class="required form-control" required>
       <option value=""></option>
       <?php 
                
       $sql = "SELECT id_departamento, departamento FROM departamento;";
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
         <option value=""></option>
         <?php 
                
         $sql = "SELECT id_municipio, municipio FROM municipio;";
         $datos = consultaD($con, $sql);
              foreach ($datos as $value) {
                  print "<option value='";
                  print $value['id_municipio'];
                  print "'>";
                  print $value['municipio'];
                  print "</option>";
                  }                
          ?>
          </select>
          </div>
          </div>



          <div class="row">
          <div class="col-xs-3">
                Fecha de expedicion:
          </div>
          <div class="col-xs-3">
          <div class="input-group">                    
          <input type="text" name="fecha_expedicion" id="fechaexpe" class="required form-control" required >
          <span id="fechaexpe" class=" input-group-addon glyphicon glyphicon-calendar"></span>
          </div>
          </div>
          </div>

          </div>
          </div>


          <div class="row">
          <div class="col-xs-3">
                Fecha de expiracion:
          </div>
          <div class="col-xs-3">
          <div class="input-group">                    
          <input type="text" name="fecha_expedicion" id="fechaex" class="required form-control" required >
          <span id="fechaex" class=" input-group-addon glyphicon glyphicon-calendar"></span>
          </div>
          </div>
          </div>

          </div>
          </div>

          <div class="row">
          <td colspan="2">
          <input type="submit" name='bot' value='Guardar' class="btn btn-primary">
          <input type="submit" name='bot' value='Actualizar' class="btn btn-primary">
          </div>
          </div>
        </table>
        </form>
    </div>


     <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechaexpe").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
        )
    </script>

         <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechaex").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>

    <script type="text/javascript">
    $( "#departamento" ).change(function() {
    var municipio = $("select#departamento option:selected").val();
    var datastring = 'municipio='+municipio;
    $.ajax({

    type: 'POST',
    url: 'municipios.php',
    data: datastring,
    success: function(data){
          $('#municipio').html('');
          $('#municipio').html(data);
            }
    });
});
</script>
</script>
</body>

</html>

    













