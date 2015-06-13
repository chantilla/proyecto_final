<?php
$conexion = new mysqli('localhost', 'root', '', 'elecciones');
?>
<!doctype html>

<?php 
include './clases/Coneccion3.php';
include './clases/candidato.php';
?>

<html lang="en">
<head>  
         <td><center><img src="1.png"></td></center>
         
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
    
<form action="manejadorcandidato.php?accion=save" method="post">
    
           <div class="col-md-3"></div>
            <div class="col-md-6">
           
                    Numero de Dui:
               
                    <input type="text" name="dui" value="" placeholder="Dui" class="form-control" required="on"/><br>
                   
         
                    Foto Candidato:
      
                    <input type="File" name="foto"  class="" required="on"/><br>
                    
                     Apellido:

     
                   <input type="text" name="apellido" value="" placeholder="apellido" class="form-control" required="on"/><br>
             
      
                    Nombre:

     
                   <input type="text" name="nombre" value="" placeholder="nombre" class="form-control" required="on"/>
             
          <h4><center>Tipo de Candidatura</center></h4>
          <select name="tipo_candidatura" class="form-control">
             <option value="Independiente">Independiente</option>
            <option value="Partido">Partido</option>
            <option value="Cohalision">Cohalision</option>
        </select>
        <br>


             Cohalision:
          
      <select name="coalicion" id="coalicion">
    <option value="">--------</option>

    <?php
    $result = $conexion->query("SELECT * FROM coalicion");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['id_coalicion'].'">'.utf8_encode($row['nombre_coalicion']).'</option>';
        }
    }
    ?>


</select>
<br><br>
                    
             partido:
          
      <select name="partido" id="partido">
    <option value="">--------</option>

    <?php
    $result = $conexion->query("SELECT * FROM partido");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['id_partido'].'">'.utf8_encode($row['nombre_partido']).'</option>';
        }
    }
    ?>


</select>
<br><br>

 Departamento Candidatura:
          
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
<br><br>


Municipio Candidatura: 
  
<select name="municipio" id="municipio">
    <option value="">------</option>
</select>

     
                   <br> <br><br><center><input type="submit" name='bot' value='Guardar datos' class="btn btn-primary"></center>
               
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
     
                 
               
        </table>
        </form>
    </div>
        
      
</form>
</script>
</div>

</body>

</html>