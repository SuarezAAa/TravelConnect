<?php

class hotel
{
    //properties
    private $hotel_id,$nombre_hotel,$direccion, $valoracion,$precioNoche, $ciudadhotel;


    function __construct()
    {

    }

	public function gethotel_id() {
		return $this->hotel_id;
	}
	
	public function sethotel_id($hotel_id): self {
		$this->hotel_id = $hotel_id;
		return $this;
	}

	
    public function getnombre_hotel() {
		return $this->nombre_hotel;
	}
	
	public function setnombre_hotel($nombre_hotel): self {
		$this->nombre_hotel = $nombre_hotel;
		return $this;
	}

    public function getvaloracion() {
		return $this->valoracion;
	}
	
	public function setvaloracion($valoracion): self {
		$this->valoracion = $valoracion;
		return $this;
	}
	public function getdireccion() {
		return $this->direccion;
	}
	
	public function setdireccion($direccion): self {
		$this->direccion = $direccion;
		return $this;
	}

    public function getprecioNoche() {
		return $this->precioNoche;
	}
	
	public function setprecioNoche($precioNoche): self {
		$this->precioNoche = $precioNoche;
		return $this;
	}

    public function getciudadhotel() {
		return $this->ciudadhotel;
	}
	
	public function setciudadhotel($ciudadhotel): self {
		$this->ciudadhotel = $ciudadhotel;
		return $this;
	}

	
}