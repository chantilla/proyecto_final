<?php
$conexion = new mysqli('localhost', 'root', '', 'elecciones');
?>
<!doctype html>

<?php 
include './clases/Coneccion.php';
include './clases/ciudadano.php';
?>

<html lang="en">
<head>  
        
         <td><center><img src="1.png"></td></center>
         <td>.</td>
         
         <center><h2>Formulario De Inscripcion Ciudadano</h2></center>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="libs/validacion/jquery.validate.min.js"></script>
    <script src="libs/validacion/messages.js"></script>
    <script src="libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">
    </head>
</head>
<body>
    
<form action="manejadorciudadano.php?accion=save" method="post">
    
           <div class="col-md-3"></div>
            <div class="col-md-6">
           
                    Numero de Dui:
               
                    <input type="text" name="dui" value="" placeholder="Dui" class="form-control" required="on"/>
                   
         
                    Fotografia:
      
                    <input type="File" name="foto"  class="" required="on"/>

      
                    Nombres:

     
                   <input type="text" name="nombre" value="" placeholder="nombre" class="form-control" required="on"/>
            
                    Apellidos:

             
                    <input type="text" name="apellido" value="" placeholder="apellido" class="form-control" required="on"/>
             
                    Genero:

                     <select name="genero" class="form-control">
                    <option value="Masculino">Masculino</option>
                     <option value="Femenino">Femenino</option>
                   <option value="otro">otro</option>
                    </select>

               
              
                    Fecha Vencimiento:
               
                                  
                    <input type="text" name="fecha_nacimiento" id="fechac" class="required form-control">
                    <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
               
                    Direccion lugar de residencia:

           
                    <input type="text" name="direccion" value="" placeholder="direccion" class="form-control" required="on"/>
              
             Departamento donde recide:
          
      <select name="departamento" id="depto">
    <option value="">--------</option>

    <?php
    $result = $conexion->query("SELECT * FROM departamentos");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
    ?>


</select>
<br>


Municipio donde recide: 
  
<select name="municipio" id="municipio">
    <option value="">------</option>
</select>

     
                   <br><br><center><input type="submit" name='bot' value='Guardar datos' class="btn btn-primary"></center>
               
        </table>
        </form>
    </div>
        
       <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
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
</form>
<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
</div>
</body>
</html>
