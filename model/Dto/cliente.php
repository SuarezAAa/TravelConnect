<?php

class cliente {
    private $cliente_id;
    private $nombre;
    private $Apellido;
    private $Correo;
    private $cedula;
    private $telefono;
    private $Direccion;
    private $Ciudad_fk;

    public function getClienteId() {
        return $this->cliente_id;
    }

    public function setClienteId($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->Apellido;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    public function getCiudadFk() {
        return $this->Ciudad_fk;
    }

    public function setCiudadFk($Ciudad_fk) {
        $this->Ciudad_fk = $Ciudad_fk;
    }
}
