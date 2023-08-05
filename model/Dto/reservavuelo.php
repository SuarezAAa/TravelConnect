<?php

class reservavuelo {
    private $rvuelo_id;
    private $vuelo_fk;
    private $cliente_fk;

    public function getRvueloId() {
        return $this->rvuelo_id;
    }

    public function setRvueloId($rvuelo_id) {
        $this->rvuelo_id = $rvuelo_id;
    }

    public function getVueloFk() {
        return $this->vuelo_fk;
    }

    public function setVueloFk($vuelo_fk) {
        $this->vuelo_fk = $vuelo_fk;
    }

    public function getClienteFk() {
        return $this->cliente_fk;
    }

    public function setClienteFk($cliente_fk) {
        $this->cliente_fk = $cliente_fk;
    }
}
