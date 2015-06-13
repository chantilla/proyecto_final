<?php
$conexion = new mysqli('localhost', 'root', '', 'elecciones');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script language="javascript" src="js/jquery.js"></script>
</head>
<body>
<center><form action="algo" method="get">
    <div class="row">
          
                <div class="col-xs-6">
                    Dui:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="carnet" class="required digits form-control">
                </div>
            </div>
        </center>
            <div class="row">
          
                <div class="col-xs-6">
                    Foto:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="nombre" class="required form-control">

                </div>
                
            </div>
            <div class="row">
            
                <div class="col-xs-6">
                    Nombre:

                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control">
                </div>
            </div>
             <div class="row">
            
                <div class="col-xs-6">
                    Apellido:

                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control">
                </div>
            </div>
             <div class="row">
            
                <div class="col-xs-6">
                    Genero:

                </div>
                <div class="col-xs-2">
                    <input type="text" name="genero" class="required form-control"> 
             
                </div>
            </div>
          
          
            <div class="row">
            
                <div class="col-xs-6">
                    Nacimiento:

                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control">
                </div>
            </div>
             <div class="row">
            
                <div class="col-xs-6">
                    Direccion:

                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control">
                </div>
            </div>
Departamento: <select name="depto" id="depto">
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
Municipio: <select name="municipio" id="municipio">
    <option value="">------</option>
</select>
    <button type="submit">Enviar</button>
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
</center>
</body>
</html>
