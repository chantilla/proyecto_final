<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
<?php
include './clases/Coneccion1.php';
include './clases/apertura.php';
include './clases/aperturaControlador.php';

$aperturaA = new aperturaControlador();

  if(isset($_REQUEST['bot'])){
           $aperturaA->setid_apertura('NULL');
           $aperturaA->settipo_apertura($_REQUEST['tipo_apertura']);
           $aperturaA->setano_apertura($_REQUEST['ano_apertura']);
           $datosObj=array($aperturaA->getid_apertura(),
                           $aperturaA->gettipo_apertura(),
                           $aperturaA->getano_apertura()
                          
                           );

            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $aperturaA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorapertura.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
       
</html>
