<?php


class partido {
    private $id_partido;
    private $nombre_partido;
    private $bandera_partido;
    private $dui_representante;
    private $representante_partido;
   
    
    public function getid_partido() {
        return $this->id_partido;
    }

    public function setid_partido($id_partido) {
        $this->id_partido = $id_partido;
    } 

     public function getnombre_partido() {
        return $this->nombre_partido;
    }
     public function getbandera_partido() {
        return $this->bandera_partido;
    }
     public function getdui_representante() {
        return $this->dui_representante;
    }
     public function getrepresentante_partido() {
        return $this->representante_partido;
    }



    public function setnombre_partido($nombre_partido) {
        $this->nombre_partido = $nombre_partido;
    }
     public function setbandera_partido($bandera_partido) {
        $this->bandera_partido = $bandera_partido;
    }
     public function setdui_representante($dui_representante) {
        $this->dui_representante = $dui_representante;
    }
    public function setrepresentante_partido($representante_partido) {
        $this->representante_partido = $representante_partido;
    }

}