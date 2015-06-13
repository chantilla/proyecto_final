<?php
$conexion = new mysqli('localhost', 'root', '', 'elecciones');


$id_candidato = $_POST['id_candidato'];

$result = $conexion->query("SELECT id_candidato,nombre_partido FROM municipio
                            WHERE id_candidato = ".$id_candidato." ORDER BY id_candidato ASC");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<option value="'.$row['id_candidato'].'">'.utf8_encode($row['nombre_partido']).'</option>';
    }
}
echo $html;
