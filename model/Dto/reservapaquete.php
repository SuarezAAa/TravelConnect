<?php

class ReservaPaquete {
    private $rpaquete_id;
    private $clientefk;
    private $paquetefk;
    
    public function getRpaqueteId() {
        return $this->rpaquete_id;
    }

    public function setRpaqueteId($rpaquete_id) {
        $this->rpaquete_id = $rpaquete_id;
    }

    public function getClienteFk() {
        return $this->clientefk;
    }

    public function setClienteFk($clientefk) {
        $this->clientefk = $clientefk;
    }

    public function getPaqueteFk() {
        return $this->paquetefk;
    }

    public function setPaqueteFk($paquetefk) {
        $this->paquetefk = $paquetefk;
    }
}
