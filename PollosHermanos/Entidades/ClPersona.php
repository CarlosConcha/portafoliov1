<?php
   class ClPersona{
	private $ID;  
    private $RUT;
    private $NOMBRE;
    private $APELLIDO;
    private $EDAD;
    private $SEXO;
    private $ID_SEDE;
    private $ID_CARGO;
    function ClPersona($RUT,$NOMBRE,$APELLIDO,$EDAD,$SEXO,$ID_SEDE,$ID_CARGO,$ID){
	   $this->setID($ID);
       $this->setRUT($RUT);
       $this->setNOMBRE($NOMBRE);
       $this->setAPELLIDO($APELLIDO);
       $this->setEDAD($EDAD);
       $this->setSEXO($SEXO);
       $this->setID_SEDE($ID_SEDE);
	   $this->setID_CARGO($ID_CARGO);
    }
     public function setID($ID){
        $this->ID=$ID;
    }
    public function getID(){
        return $this->ID;
    }
    public function setRUT($RUT){
        $this->RUT=$RUT;
    }
    public function getRUT(){
        return $this->RUT;
    }
    public function setNOMBRE($NOMBRE){
        $this->NOMBRE=$NOMBRE;
    }
    public function getNOMBRE(){
        return $this->NOMBRE;
    }
    public function setAPELLIDO($APELLIDO){
        $this->APELLIDO=$APELLIDO;
    }
    public function getAPELLIDO(){
        return $this->APELLIDO;
    }
    public function setEDAD($EDAD){
        $this->EDAD=$EDAD;
    }
    public function getEDAD(){
        return $this->EDAD;
    }
    public function setSEXO($SEXO){
        $this->SEXO=$SEXO;
    }
    public function getSEXO(){
        return $this->SEXO;
    }
    public function setID_SEDE($ID_SEDE){
        $this->ID_SEDE=$ID_SEDE;
    }
    public function getID_SEDE(){
        return $this->ID_SEDE;
    }
	public function setID_CARGO($ID_CARGO){
        $this->ID_CARGO=$ID_CARGO;
    }
    public function getID_CARGO(){
        return $this->ID_CARGO;
    }
   }
?>
