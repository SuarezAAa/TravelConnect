<?php

class reservashotel {
    private $RHotel_id;
    private $cliente_FK;
    private $RHhotel_fk;

    public function getRHotelId() {
        return $this->RHotel_id;
    }

    public function setRHotelId($RHotel_id) {
        $this->RHotel_id = $RHotel_id;
    }

    public function getClienteFK() {
        return $this->cliente_FK;
    }

    public function setClienteFK($cliente_FK) {
        $this->cliente_FK = $cliente_FK;
    }

    public function getRHhotelFk() {
        return $this->RHhotel_fk;
    }

    public function setRHhotelFk($RHhotel_fk) {
        $this->RHhotel_fk = $RHhotel_fk;
    }
}



  
    