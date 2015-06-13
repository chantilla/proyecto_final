
<?php
include './clases/Coneccion2.php';
include './clases/partido.php';


?>
<html>
    <head>
    
        <p>.</p>
         <td><center><img src="1.png"></td></center>
         <td>.</td>
      
       <meta http-equiv="Content-type" content="text/html;charset=iso-8859-2">
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">
    </head>
    <h1><center>INSCRIPCION DE PARTIDO</h1>
    <body>
    <div class="jumbotron">
        <form action="manejadorpartido.php?accion=save" method="post">
             <table class="table-bordered">

                   <div class="row">
          
                <div class="col-xs-6">


      Nombre del Partido:
      <input type="text" name="nombre_partido" value="" placeholder="nombre" class="form-control" required="on"/ >
            Bandera:
            <input type="File" name="bandera_partido" value="" class="">
            Dui:
            <input type="text" name="dui_representante" value="" placeholder="00000000-0"class="form-control">

            Representante:

            <input type="text" name="representante_partido" value="" placeholder="Nombre del Representante" class="form-control" /><br>

            
            <input type="submit" value="Guardar" name="bot" class="btn btn-primary"/>
             </table>
    
        </form>
    </div>
        
       
    </body>
</html>