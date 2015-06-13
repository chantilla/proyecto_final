<?php
class candidatoControlador extends candidato{
   
    public function guardarDatos($con,$objcandidato) {
        $variableSql = "INSERT INTO candidato ";
        $variableSql .= "(id_candidato,dui,foto,apellido,nombre,tipo_candidatura,";
        $variableSql .= "coalicion,partido,departamento,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objcandidato[0]."',";
        $variableSql.="'".$objcandidato[1]."',";
        $variableSql.="'".$objcandidato[2]."',";
        $variableSql.="'".$objcandidato[3]."',";
        $variableSql.="'".$objcandidato[4]."',";
        $variableSql.="'".$objcandidato[5]."',";
        $variableSql.="'".$objcandidato[6]."',";
        $variableSql.="'".$objcandidato[7]."',";
        $variableSql.="'".$objcandidato[8]."',";
        $variableSql.="'".$objcandidato[9]."');";   

        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objcandidato) {
        $variableSql = "UPDATE candidato SET  ";
        $variableSql .= "dui= '".$objcandidato[1]."'";
        $variableSql .= "  ,foto = '".$objcandidato[2]."'";
        $variableSql .= "  ,apellido = '".$objcandidato[3]."'";
        $variableSql .= "  ,nombre= '".$objcandidato[4]."'";
        $variableSql .= "  ,tipo_candidatura= '".$objcandidato[5]."'";
        $variableSql .= " ,coalicion = '".$objcandidato[6]."'";
        $variableSql .= " ,partido= '".$objcandidato[7]."'";
        $variableSql .= " ,departamento = '".$objcandidato[8]."'";
        $variableSql .= " ,municipio = '".$objcandidato[9]."'";
        $variableSql .= " WHERE id_candidato = ".$objcandidato[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
