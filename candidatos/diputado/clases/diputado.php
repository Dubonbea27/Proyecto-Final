<?php
class diputado{
	private $id_diputado;
	private $dui;
	private $nombre;
	private $apellido;
	private $partido;
	private $bandera;
	private $departamento;

	public function getId_diputado(){
		return $this->id_diputado;
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

	public function getDepartamento(){
		return $this->departamento;
	}

	public function setId_diputado($id_diputado){
		$this->id_diputado = $id_diputado;
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

	public function setDepartamento($departamento){
		$this->departamento = $departamento;
	}


}