<?php

class reserva {
    private $reserva_id;
    private $cliente_FK;
    private $agente_fk;
    
    
        public function getReservaId() {
            return $this->reserva_id;
        }
    
        public function setReservaId($reserva_id) {
            $this->reserva_id = $reserva_id;
        }
    
        public function getClienteFK() {
            return $this->cliente_FK;
        }
    
        public function setClienteFK($cliente_FK) {
            $this->cliente_FK = $cliente_FK;
        }
    
        public function getAgenteFK() {
            return $this->agente_fk;
        }
    
        public function setAgenteFK($agente_fk) {
            $this->agente_fk = $agente_fk;
        }
    }
    