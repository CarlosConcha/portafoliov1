<?php
   class ClVehiculo{
	private $ID_VEHICULO;   
    private $PATENTE;
    private $ID_SEDE;
    private $ID_MODELO;

    function ClVehiculo($ID_VEHICULO,$PATENTE,$ID_SEDE,$ID_MODELO){
	   $this->setID_VEHICULO($ID_VEHICULO);
       $this->setPATENTE($PATENTE);
       $this->setID_SEDE($ID_SEDE);
       $this->setID_MODELO($ID_MODELO);
    }
     public function setID_VEHICULO($ID_VEHICULO){
        $this->ID_VEHICULO=$ID_VEHICULO;
    }
    public function getID_VEHICULO(){
        return $this->ID_VEHICULO;
    }
    public function setPATENTE($PATENTE){
        $this->PATENTE=$PATENTE;
    }
    public function getPATENTE(){
        return $this->PATENTE;
    }
    public function setID_SEDE($ID_SEDE){
        $this->ID_SEDE=$ID_SEDE;
    }
    public function getID_SEDE(){
        return $this->ID_SEDE;
    }
    public function setID_MODELO($ID_MODELO){
        $this->ID_MODELO=$ID_MODELO;
    }
    public function getID_MODELO(){
        return $this->ID_MODELO;
    }
   }
?>
