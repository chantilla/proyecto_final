<?php


class ciudadano {
    private $id_ciudadano;
    private $dui;
    private $foto;
    private $nombre;
    private $apellido;
    private $genero;
    private $fecha_nacimiento;
    private $direccion;
    private $departamento;
    private $municipio;
    
    public function getid_ciudadano() {
        return $this->id_ciudadano;
    }

    public function setid_ciudadano($id_ciudadano) {
        $this->id_ciudadano = $id_ciudadano;
    } 

     public function getDui() {
        return $this->dui;
    }

      public function getFoto() {
        return $this->foto;
    }


        public function getnombre() {
        return $this->nombre;
    }

    public function getapellido() {
        return $this->apellido;
    }
     public function getgenero() {
        return $this->genero;
    }

    public function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getDireccion() {
        return $this->direccion;
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

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setgenero($genero) {
        $this->genero = $genero;
    }

    public function setfecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setdireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setdepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function setmunicipio($municipio) {
        $this->municipio = $municipio;
    }


}
