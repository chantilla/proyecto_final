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
include './clases/Coneccion2.php';
include './clases/partido.php';
include './clases/partidoControlador.php';

$partidoA = new partidoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $partidoA->setid_partido('NULL');
           $partidoA->setnombre_partido($_REQUEST['nombre_partido']);
           $partidoA->setbandera_partido($_REQUEST['bandera_partido']);
           $partidoA->setdui_representante($_REQUEST['dui_representante']);
           $partidoA->setrepresentante_partido($_REQUEST['representante_partido']);
           
           $datosObj=array($partidoA->getid_partido(),
                           $partidoA->getnombre_partido(),
                           $partidoA->getbandera_partido(),
                           $partidoA->getdui_representante(),
                           $partidoA->getrepresentante_partido()
                           );

           print $partidoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorpartido.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM partido';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"partido","table table-bordered table-striped",1);
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