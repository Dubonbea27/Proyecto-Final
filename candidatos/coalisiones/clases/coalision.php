<?php
class Coalision{
	private $id_coalisiones;
	private $partidoA;
	private $partidoB;
	private $partidoC;
	private $partidoD;
	private $partidoE;
	private $nombre;
	private $id_departamento;
	private $id_municipio;

	public function getId_coalisiones(){
		return $this->id_coalisiones;
	}

	public function setId_coalisiones($id_coalisiones){
		$this->id_coalisiones = $id_coalisiones;
	}

	public function getPartidoA(){
		return $this->partidoA;
	}

	public function getPartidoB(){
		return $this->partidoB;
	}

	public function getPartidoC(){
		return $this->partidoC;
	}

	public function getPartidoD(){
		return $this->partidoD;
	}

	public function getPartidoE(){
		return $this->partidoE;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getId_departamento(){
		return $this->id_departamento;
	}

	public function getId_municipio(){
		return $this->id_municipio;
    }



    public function setPartidoA($partidoA){
    	$this->partidoA = $partidoA;
    }


    public function setPartidoB($partidoB){
    	$this->partidoB = $partidoB;
    }

    public function setPartidoC($partidoC){
    	$this->partidoC = $partidoC;
    }

    public function setPartidoD($partidoD){
    	$this->partidoD = $partidoD;
    }

    public function setPartidoE($partidoE){
    	$this->partidoE = $partidoE;
    }

    public function setNombre($nombre){
    	$this->nombre = $nombre;
    }

    public function setId_departamento($id_departamento){
    	$this->id_departamento = $id_departamento;
    }

    public function setId_municipio($id_municipio){
    	$this->id_municipio= $id_municipio;
    }
}