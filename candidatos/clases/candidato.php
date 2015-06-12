<?php
class Candidato {
	private $id_candidato;
	private $dui;
	private $apellidos;
	private $nombres;
    private $tipodecan;
	private $id_departamento;
	private $id_municipio;
	private $id_partido;
	private $participacion;
	private $direccion;

	public function getId_candidato() {
		return $this->id_candidato;
    }

    public function setId_candidato($id_candidato){
    	$this->id_candidato = $id_candidato;
    }

    public function getDui() {
        return $this->dui;	
    }

    public function getApellidos() {
        return $this->apellidos;

    }

    public function getNombres() {
        return $this->nombres;	
    }

    public function getTipodecan() {
        return $this->tipodecan;	
    }

    public function getId_departamento() {
        return $this->id_departamento;	
    }

    public function getId_municipio() {
        return $this->id_municipio;	
    }
    

    public function getId_partido() {
        return $this->id_partido;	
    }

   

    public function getParticipacion() {
        return $this->participacion;	
    }

    

    public function getDireccion() {
        return $this->direccion;	
    }

     public function setDui($dui) {
        $this->dui = $dui;
    }

     public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

     public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

     public function setTipodecan($tipodecan) {
        $this->tipodecan = $tipodecan;
    }

     public function setId_departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }

     public function setId_municipio($id_municipio) {
        $this->id_municipio = $id_municipio;
    }

      public function setId_partido($id_partido) {
        $this->id_partido = $id_partido;
    }

     public function setParticipacion($participacion) {
        $this->participacion = $participacion;
    }
    
     

     public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

}













