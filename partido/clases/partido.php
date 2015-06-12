<?php
class partido {
	private $id_partido;
	private $dui_responsable;
	private $responsable;
	private $partido;
    private $bandera;
	private $iniciales;

	
	public function getId_partido() {
		return $this->id_partido;
    }

    public function setId_partido($id_partido){
    	$this->id_partido = $id_partido;
    }

    public function getDui_responsable() {
        return $this->dui_responsable;	
    }

    public function getResponsable() {
    	return $this->responsable;
    }

    public function getPartido() {
    	return $this->partido;
    }

    public function getBandera() {
        return $this->bandera;
    }


    public function getIniciales() {
    	return $this->iniciales;
    }

   
    
    public function setDui_responsable($dui_responsable) {
        $this->dui_responsable = $dui_responsable;
    }

    
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    public function setPartido($partido) {
        $this->partido = $partido;
    }

    public function setBandera($bandera) {
        $this->bandera = $bandera;
    }

    public function setIniciales($iniciales) {
        $this->iniciales= $iniciales;
    }

    
}