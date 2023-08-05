<?php

class paquete
{
    //properties
    private $paquete_id,$nombre,$Pvuelo_fk, $Photel_fk, $precio;


    function __construct()
    {

    }

	public function getpaquete_id() {
		return $this->paquete_id;
	}
	
	public function setpaquete_id($paquete_id): self {
		$this->paquete_id = $paquete_id;
		return $this;
	}

	
    public function getnombre() {
		return $this->nombre;
	}
	
	public function setnombre($nombre): self {
		$this->nombre = $nombre;
		return $this;
	}

    public function getPvuelo_fk() {
		return $this->Pvuelo_fk;
	}
	
	public function setPvuelo_fk($Pvuelo_fk): self {
		$this->Pvuelo_fk = $Pvuelo_fk;
		return $this;
	}
    public function getPhotel_fk() {
		return $this->Photel_fk;
	}
	
	public function setPhotel_fk($Photel_fk): self {
		$this->Photel_fk = $Photel_fk;
		return $this;
	}
    public function getprecio() {
		return $this->precio;
	}
	
	public function setprecio($precio): self {
		$this->precio = $precio;
		return $this;
	}
}