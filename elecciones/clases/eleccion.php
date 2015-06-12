<?php
class eleccion {
	private $id_eleccion;
	private $presidenciales;
	private $alcaldes;
	private $diputados;
	private $anio;

	public function getId_eleccion(){
		return $this->id_eleccion;
	}

	public function setId_eleccion($id_eleccion){
		$this->id_eleccion = $id_eleccion;
	}

	public function getPresidenciales(){
		return $this->presidenciales;
	}

	public function getAlcaldes(){
		return $this->alcaldes;
	}

	public function getDiputados(){
		return $this->diputados;
	}

	public function getAnio(){
		return $this->anio;
	}

	public function setPresidenciales($presidenciales){
		$this->presidenciales = $presidenciales;
	}

	public function setAlcaldes($alcaldes){
		$this->alcaldes = $alcaldes;
	}

	public function setDiputados($diputados){
		$this->diputados = $diputados;
	}

	public function setAnio($anio){
		$this->anio = $anio;
	}


}