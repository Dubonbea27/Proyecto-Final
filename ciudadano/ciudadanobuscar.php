<?php
session_start();
if(isset($_SESSION['usuario'])){

  ?>
<?php include './clases/coneccion.php';?>
<?php include 'functions.php';?>

<?php
$sql = "SELECT * FROM ciudadano WHERE id_ciudadano ='".$_REQUEST['id_ciudadano']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="descripcion" content="extructura de un documento web">
  <meta name="contenido" content="codigo basico html5">
  <title>sistema de votaciones</title>
  
   <link type="text/css" rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="http://menuscssverticales.blogcindario.com/ficheros/menu13.css" type="text/css" />
   

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

               <a href="/proyectomio/ayuda.php">
             <li> Pagina Principal</li></a>
          </UL></p>
             </div>
              </nav>
    
          <section>
    <div id="textoPr">
      <article>
        <center><hgroup><h1>Registrar ciudadano</h1><hgroup></center>
       
       <div class="jumbotron">  
       <form action="modificarCiudadano.php" method="post" id="ciudadano">
       <table class="table-bordered">
       


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
       <input type="text" name="apellidos" class="required  form-control"required >
       </div>
       </div>


       <div class="row">
       <div class="col-xs-3">
              Nombres:
       </div>
       <div class="col-xs-3">
       <input type="text" name="nombres" class="required  form-control"required >
       </div>
       </div>


       <div class="row">
       <div class="col-xs-3">
            Genero:
       </div>
       <div class="col-xs-3">
       <select name='genero' class="required form-control" required >
       <option value=""></option>
       <option value="M">MASCULINO</option>
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
          <input type="text" name="fecha_expe" id="fecha_expe" class="required form-control" required >
          <span id="fecha_expe" class=" input-group-addon glyphicon glyphicon-calendar"></span>
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
          <input type="text" name="fecha_expira" id="fecha_expira" class="required form-control" required >
          <span id="fecha_expira" class=" input-group-addon glyphicon glyphicon-calendar"></span>
          </div>
          </div>
          </div>

          </div>
          </div>

          <div class="row">
          <div class="col-xs-3">
                Direccion:
          </div>
          <div class="col-xs-3">
          <input type="text" name="direccion" class="required  form-control" required >
          </div>
          </div>

          <div class="row">
          <td colspan="2">
          <input type="submit" name='bot' value='Guardar' class="btn btn-primary">
      
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
                $("#fecha_expe").datepicker(    
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
                $("#fecha_expira").datepicker(    
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
    url: 'municipio.php',
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
<?php
}else{
  header("location: inicioAdmon.php");
}
?>

    









