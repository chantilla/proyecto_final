<?php


class candidato{
    private $id_candidato;
    private $dui;
    private $foto;
    private $apellido;
    private $nombre;
    private $tipo_candidatura;
    private $coalicion;
    private $partido;
    private $departamento;
    private $municipio;

   
    
    public function getid_candidato() {
        return $this->id_candidato;
    }

    public function setid_candidato($id_candidato) {
        $this->id_candidato = $id_candidato;
    } 

     public function getdui() {
        return $this->dui;
    }

      public function getfoto() {
        return $this->foto;
    }
      public function getapellido() {
        return $this->apellido;
    }

      public function getnombre() {
        return $this->nombre;
    }
      public function gettipo_candidatura() {
        return $this->tipo_candidatura;
    }

      public function getcoalicion() {
        return $this->coalicion;
    }
      public function getpartido() {
        return $this->partido;
    }

      public function getdepartamento() {
        return $this->departamento;
    }

      public function getmunicipio() {
        return $this->municipio;
    }




    public function setdui($dui) {
        $this->dui = $dui;
    }
    public function setfoto($foto) {
        $this->foto = $foto;
    }

     public function setapellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }
     public function settipo_candidatura($tipo_candidatura) {
        $this->tipo_candidatura = $tipo_candidatura;
    }
    public function setcoalicion($coalicion) {
        $this->coalicion = $coalicion;
    }
     public function setpartido($partido) {
        $this->partido = $partido;
    }
    public function setdepartamento($departamento) {
        $this->departamento = $departamento;
    }
   
    public function setmunicipio($municipio) {
        $this->municipio = $municipio;
    }

}
