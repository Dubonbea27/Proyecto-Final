<?php
class alcalde{
	private $id_alcalde;
	private $dui;
	private $nombre;
	private $apellido;
	private $partido;
	private $bandera;
	private $departamento;
	private $municipio;

	public function getId_alcalde(){
		return $this->id_alcalde;
	}

	public function getDui(){
		return $this->dui;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getPartido(){
		return $this->partido;
	}

	public function getBandera(){
		return $this->bandera;
	}

	public function getdepartamento(){
		return $this->departamento;
	}

	public function getMunicipio(){
		return $this->municipio;
	}

	public function setId_alcalde($id_alcalde){
		$this->id_alcalde = $id_alcalde;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setPartido($partido){
		$this->partido = $partido;
	}

	public function setBandera($bandera){
		$this->bandera = $bandera;
	}

	public function setdepartamento($departamento){
		$this->departamento = $departamento;
	}

	public function setMunicipio($municipio){
		$this->municipio = $municipio;
	}


}