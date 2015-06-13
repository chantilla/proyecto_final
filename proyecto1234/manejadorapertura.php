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
      <form action="./menu/menu2.php" method="post">
   
<?php
include './clases/Coneccion1.php';
include './clases/apertura.php';
include './clases/aperturaControlador.php';

$aperturaA = new aperturaControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $aperturaA->setid_apertura('NULL');
           $aperturaA->settipo_apertura($_REQUEST['tipo_apertura']);
           $aperturaA->setano_apertura($_REQUEST['ano_apertura']);
           $datosObj=array($aperturaA->getid_apertura(),
                           $aperturaA->gettipo_apertura(),
                           $aperturaA->getano_apertura()
                         );
           print $aperturaA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorapertura.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM apertura';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"apertura","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
      ?>
    </body>
   <div class="row">
                <td colspan="2">
                   <center> <input type="submit" name='bot' value='menu' class="btn btn-primary">
                </div>
  </html>              