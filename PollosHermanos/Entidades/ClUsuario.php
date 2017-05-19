<?php
   class ClUsuario{
	private $ID;    
    private $RUT;
    private $NOMBRE;
    private $APELLIDO;
    private $CODIGO;
    function ClUsuario($id,$RUT,$NOMBRE,$APELLIDO,$codigo){
	   $this->setID($id);
       $this->setRUT($RUT);
       $this->setNOMBRE($NOMBRE);
       $this->setAPELLIDO($APELLIDO);
	   $this->setCODIGO($codigo);
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
	 public function setCODIGO($CODIGO){
        $this->CODIGO=$CODIGO;
    }
    public function getCODIGO(){
        return $this->CODIGO;
    }
   }
?>
