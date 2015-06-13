<?php
class aperturaControlador extends apertura{
   
    public function guardarDatos($con,$objapertura) {
        $variableSql = "INSERT INTO apertura ";
        $variableSql .= "(id_apertura,tipo_apertura,";
        $variableSql .= "ano_apertura) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objapertura[0]."',";
        $variableSql.="'".$objapertura[1]."',";
        $variableSql.="'".$objapertura[2]."');";   

        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objapertura) {
        $variableSql = "UPDATE apertura SET  ";
        $variableSql .= "  ,tipo_apertura = '".$objapertura[1]."'";
        $variableSql .= "  ,ano_apertura = '".$objapertura[2]."'";
        $variableSql .= " WHERE id_apertura = ".$objapertura[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
