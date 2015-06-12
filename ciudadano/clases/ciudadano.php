<?php
class Ciudadano {
	private $id_ciudadano;
	private $dui;
	private $apellidos;
	private $nombres;
    private $genero;
	private $id_departamento;
	private $id_municipio;
	private $fecha_expe;
	private $fecha_expira;
    private $direccion;

	public function getId_ciudadano() {
		return $this->id_ciudadano;
    }

    

    public function setId_ciudadano($id_ciudadano){
    	$this->id_ciudadano = $id_ciudadano;
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

    public function getGenero() {
        return $this->genero;
    }


    public function getId_departamento() {
    	return $this->id_departamento;
    }

    public function getId_municipio() {
    	return $this->id_municipio;
    }

    public function getFecha_expe() {
    	return $this->fecha_expe;
    }

    public function getFecha_expira() {
        return $this->fecha_expira;
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

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setId_departamento($id_departamento) {
        $this->id_departamento= $id_departamento;
    }

    public function setId_municipio($id_municipio) {
        $this->id_municipio = $id_municipio;
    }

    public function setFecha_expe($fecha_expe) {
        $this->fecha_expe = $fecha_expe;
    }

    public function setFecha_expira($fecha_expira) {
        $this->fecha_expira = $fecha_expira;
    }

     public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}