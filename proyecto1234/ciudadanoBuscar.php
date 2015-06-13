<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM alumno WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
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
    <div class="jumbotron">
        <form action="modificarAlumno.php" method="post" id="alumno">
             <table class="table-bordered">
            <div class="row">
                <div class="col-xs-2">
                    Carnet:
                </div>
                <div class="col-xs-2">
                    <input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'>
                    <input type="text" name="carnet" 
                    value='<?php print $datos[0][5]?>'
                    class="required digits form-control">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Nombre:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="nombre" 
                    value='<?php print $datos[0][1]?>'
                    class="required form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Apellido:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" value='<?php print $datos[0][2]?>'
                    class="required form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Fecha de Nacimiento:
                </div>
                <div class="col-xs-2">
                    <div class="input-group">                    
                    <input type="text" name="fecha_nac" id="fechac" value='<?php print $datos[0][3]?>'
                    class="required form-control">
                    <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Dirección:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="dir" value='<?php print $datos[0][4]?>'
                    class="required form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Sección:
                </div>
                <div class="col-xs-2">
                    <select name='seccion' class="required form-control">
                        <option value='<?php print $datos[0][6]?>'>
                        <?php 
                        $sql2="select nombre from seccion where id='".$datos[0][6]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php                
                            $sql = "SELECT id,nombre FROM seccion WHERE id != '".$datos[0][6]."'";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
    </div>
        
       <script type="text/javascript">
        $().ready(function () {
            $("#alumno").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
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
    </body>
</html>