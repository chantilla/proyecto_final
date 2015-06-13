<?php
class partidoControlador extends partido{
   
    public function guardarDatos($con,$objpartido) {
        $variableSql = "INSERT INTO partido ";
        $variableSql .= "(id_partido,nombre_partido,bandera_partido,dui_representante,";
        $variableSql .= "representante_partido) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objpartido[0]."',";
        $variableSql.="'".$objpartido[1]."',";
        $variableSql.="'".$objpartido[2]."',";
        $variableSql.="'".$objpartido[3]."',";
        $variableSql.="'".$objpartido[4]."');";   

        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objpartido) {
        $variableSql = "UPDATE partido SET  ";
        $variableSql .= "  ,nombre_partido = '".$objpartido[1]."'";
        $variableSql .= "  ,bandera_partido= '".$objpartido[2]."'";
        $variableSql .= "  ,dui_representante= '".$objpartido[3]."'";
        $variableSql .= " ,representante_partido = '".$objpartido[4]."'";
        $variableSql .= " WHERE id_partido = '".$objpartido[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
