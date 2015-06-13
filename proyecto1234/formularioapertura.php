<?php
include './clases/Coneccion1.php';
include './clases/apertura.php';


?>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
   
    <body background="./img/2.jpg">
    <nav>
        
    </nav>
    <header >
        <h1>
            Formulario De Apertura
        </h1>
    </header><br>
    <div class="jumbotron">
      <form action="validar_checkbox.php" method="post">
             <table class="table-bordered">

              <div class="row">
                <div class="">
                    Año de apertura de elecciones:
                </div>
                <div class="col-xs-2">
                                     
                    <input type="date" name="ano_apertura"  required="true" class="required form-control" id="anio">
                    
                </div>
                </div>
            </div>
            <br>
            <br>

    
            <div class="row">
          
                <div class="nom">
                   <h4>Presidente:</h4> 
                </div>
                <div class="">
                    <input name="checkbox[]" type="checkbox" id="checkbox"  value="presidente" 
                     class="required form-control" >
                </div>
         
            
                <div class="nom">
                   <h4> Diputado:</h4>
                </div>
                <div class="">
                     <input name="checkbox[]" type="checkbox" id="checkbox" value="diputado" class="required form-control"
                     >
                </div>
          
                <div class="nom">
                    <h4>Alcalde:</h4>
                </div>
                <div class="">
                                     
                     <input name="checkbox[]" type="checkbox" id="checkbox" value="alcalde" 
                      class="required form-control">
                    
                </div>
                </div>
          

 <br>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name="button" id="button" value="Enviar"  class="btn btn-primary"/>
                </div>
            </div>
        </table>
        </form>
    </div>
        
    </body>
</html>


            