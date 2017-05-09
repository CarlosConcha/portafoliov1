<?php
   class ClPaquete{
    private $ID_PAQUETE;
    private $ALTURA;
    private $ANCHO;
    private $COD_ENVIO;
    private $PESO;

    function ClPaquete($ID_PAQUETE,$ALTURA,$ANCHO,$COD_ENVIO,$PESO){
       $this->setID_PAQUETE($ID_PAQUETE);
       $this->setALTURA($ALTURA);
       $this->setANCHO($ANCHO);
       $this->setCOD_ENVIO($COD_ENVIO);
       $this->setPESO($PESO);
    }

    public function setID_PAQUETE($ID_PAQUETE){
        $this->ID_PAQUETE=$ID_PAQUETE;
    }
    public function getID_PAQUETE(){
        return $this->ID_PAQUETE;
    }
    public function setALTURA($ALTURA){
        $this->ALTURA=$ALTURA;
    }
    public function getALTURA(){
        return $this->ALTURA;
    }
    public function setANCHO($ANCHO){
        $this->ANCHO=$ANCHO;
    }
    public function getANCHO(){
        return $this->ANCHO;
    }
    public function setCOD_ENVIO($COD_ENVIO){
        $this->COD_ENVIO=$COD_ENVIO;
    }
    public function getCOD_ENVIO(){
        return $this->COD_ENVIO;
    }
    public function setPESO($PESO){
        $this->PESO=$PESO;
    }
    public function getPESO(){
        return $this->PESO;
    }
   }
?>
