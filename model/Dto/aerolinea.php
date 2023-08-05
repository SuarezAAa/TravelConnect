<?php

class aerolinea
{
    //properties
    private $aerolinea_id,$nombre,$aeropuerto;


    function __construct()
    {

    }

	public function getaerolinea_id() {
		return $this->aerolinea_id;
	}
	
	public function setaerolinea_id($aerolinea_id): self {
		$this->aerolinea_id = $aerolinea_id;
		return $this;
	}

	
    public function getnombre() {
		return $this->nombre;
	}
	
	public function setnombre($nombre): self {
		$this->nombre = $nombre;
		return $this;
	}

    public function getaeropuerto() {
		return $this->aeropuerto;
	}
	
	public function setaeropuerto($aeropuerto): self {
		$this->aeropuerto = $aeropuerto;
		return $this;
	}
}