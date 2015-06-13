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
include './clases/Coneccion.php';
include './clases/ciudadano.php';
include './clases/ciudadanoControlador.php';

$ciudadanoA = new ciudadanoControlador();

 if(isset($_REQUEST['bot'])){
           $ciudadanoA->setid_ciudadano('NULL');
           $ciudadanoA->setdui($_REQUEST['dui']);
           $ciudadanoA->setfoto($_REQUEST['foto']);
           $ciudadanoA->setnombre($_REQUEST['nombre']);
           $ciudadanoA->setapellido($_REQUEST['apellido']);
           $ciudadanoA->setgenero($_REQUEST['genero']);
           $ciudadanoA->setfecha_nacimiento($_REQUEST['fecha_nacimiento']);
           $ciudadanoA->setDireccion($_REQUEST['direccion']);
           $ciudadanoA->setDepartamento($_REQUEST['departamento']);
           $ciudadanoA->setmunicipio($_REQUEST['municipio']);
           $datosObj=array($ciudadanoA->getid_ciudadano(),
                           $ciudadanoA->getdui(),
                           $ciudadanoA->getfoto(),
                           $ciudadanoA->getnombre(),
                           $ciudadanoA->getapellido(),
                           $ciudadanoA->getgenero(),
                           $ciudadanoA->getfecha_nacimiento(),
                           $ciudadanoA->getdireccion(),
                           $ciudadanoA->getdepartamento(),
                           $ciudadanoA->getmunicipio()
                           );

            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $ciudadanoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorciudadano.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
       
</html>

