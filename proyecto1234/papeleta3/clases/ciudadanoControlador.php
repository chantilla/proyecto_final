<?php
class ciudadanoControlador extends ciudadano{
   
    public function guardarDatos($con,$objciudadano) {
        $variableSql = "INSERT INTO ciudadano ";
        $variableSql .= "(id_ciudadano,dui,foto,nombre,apellido,genero,fecha_nacimiento,";
        $variableSql .= "direccion,departamento,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objciudadano[0]."',";
        $variableSql.="'".$objciudadano[1]."',";
        $variableSql.="'".$objciudadano[2]."',";
        $variableSql.="'".$objciudadano[3]."',";
        $variableSql.="'".$objciudadano[4]."',";
        $variableSql.="'".$objciudadano[5]."',";
        $variableSql.="'".$objciudadano[6]."',";
        $variableSql.="'".$objciudadano[7]."',";
        $variableSql.="'".$objciudadano[8]."',";
        $variableSql.="'".$objciudadano[9]."');";   

        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objciudadano) {
        $variableSql = "UPDATE ciudadano SET  ";
        $variableSql .= "dui= '".$objciudadano[1]."'";
        $variableSql .= "  ,foto = '".$objciudadano[2]."'";
        $variableSql .= "  ,nombre = '".$objciudadano[3]."'";
        $variableSql .= "  ,apellido= '".$objciudadano[4]."'";
        $variableSql .= "  ,genero= '".$objciudadano[5]."'";
        $variableSql .= " ,fecha_nacimiento = '".$objciudadano[6]."'";
        $variableSql .= " ,direccion = '".$objciudadano[7]."'";
        $variableSql .= " ,departamento = '".$objciudadano[8]."'";
        $variableSql .= " ,municipio = '".$objciudadano[9]."'";
        $variableSql .= " WHERE id_ciudadano = ".$objciudadano[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
