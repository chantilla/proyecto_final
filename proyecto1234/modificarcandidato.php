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
include './clases/Coneccion3.php';
include './clases/candidato.php';
include './clases/candidatoControlador.php';

$candidatoA = new candidatoControlador();

  if(isset($_REQUEST['bot'])){
           $candidatoA->setid_candidato('NULL');
           $candidatoA->setdui($_REQUEST['dui']);
           $candidatoA->setfoto($_REQUEST['foto']);
           $candidatoA->setapellido($_REQUEST['apellido']);
           $candidatoA->setnombre($_REQUEST['nombre']);
           $candidatoA->settipo_candidatura($_REQUEST['tipo_candidatura']);
           $candidatoA->setcoalicion($_REQUEST['coalicion']);
           $candidatoA->setpartido($_REQUEST['partido']);
           $candidatoA->setdepartamento($_REQUEST['departamento']);
           $candidatoA->setmunicipio($_REQUEST['municipio']);
           
           $datosObj=array($candidatoA->getid_candidato(),
                           $candidatoA->getdui(),
                           $candidatoA->getfoto(),
                           $candidatoA->getapellido(),
                           $candidatoA->getnombre(),
                           $candidatoA->gettipo_candidatura(),
                           $candidatoA->getcoalicion(),
                           $candidatoA->getpartido(),
                           $candidatoA->getdepartamento(),
                           $candidatoA->getmunicipio()
                           );

            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $candidatoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorcandidato.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
       
</html>

