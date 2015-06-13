<?php


class apertura {
    private $id_apertura;
    private $tipo_apertura;
    private $ano_apertura;
   
    
    public function getid_apertura() {
        return $this->id_apertura;
    }

    public function setid_apertura($id_apertura) {
        $this->id_apertura = $id_apertura;
    } 

     public function gettipo_apertura() {
        return $this->tipo_apertura;
    }

      public function getano_apertura() {
        return $this->ano_apertura;
    }


    public function settipo_apertura($tipo_apertura) {
        $this->tipo_apertura = $tipo_apertura;
    }
    public function setano_apertura($ano_apertura) {
        $this->ano_apertura = $ano_apertura;
    }

}
