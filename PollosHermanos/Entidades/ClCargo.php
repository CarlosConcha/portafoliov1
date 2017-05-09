<?php
   class ClCargo{
    private $CARGO;
    private $ID;
    
    function ClCargo($CARGO,$ID){
       $this->setCARGO($CARGO);
       $this->setID($ID);
    }

    public function setCARGO($CARGO){
        $this->CARGO=$CARGO;
    }
    public function getCARGO(){
        return $this->CARGO;
    }
    public function setID($ID){
        $this->ID=$ID;
    }
    public function getID(){
        return $this->ID;
    }
   }
?>
