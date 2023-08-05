<?php

class vuelo
{
    //properties
    private $vuelo_id,$aerolinea_fk,$origen, $destino,$precio, $fecha;


    function __construct()
    {

    }

	public function getvuelo_id() {
		return $this->vuelo_id;
	}
	
	public function setvuelo_id($vuelo_id): self {
		$this->vuelo_id = $vuelo_id;
		return $this;
	}

	
    public function getaerolinea_fk() {
		return $this->aerolinea_fk;
	}
	
	public function setaerolinea_fk($aerolinea_fk): self {
		$this->aerolinea_fk = $aerolinea_fk;
		return $this;
	}

    public function getorigen() {
		return $this->origen;
	}
	
	public function setorigen($origen): self {
		$this->origen = $origen;
		return $this;
	}
	public function getdestino() {
		return $this->destino;
	}
	
	public function setdestino($destino): self {
		$this->destino = $destino;
		return $this;
	}

    public function getprecio() {
		return $this->precio;
	}
	
	public function setprecio($precio): self {
		$this->precio = $precio;
		return $this;
	}

    public function getfecha() {
		return $this->fecha;
	}
	
	public function setfecha($fecha): self {
		$this->fecha = $fecha;
		return $this;
	}

	
}