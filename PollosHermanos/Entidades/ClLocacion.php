<?php
   class ClLocacion{
    private $ID_LOCACION;
    private $DIRECCION;
    private $ID_COMUNA;

    function ClLocacion($ID_LOCACION,$DIRECCION,$ID_COMUNA){
       $this->setID_LOCACION($ID_LOCACION);
       $this->setDIRECCION($DIRECCION);
       $this->setID_COMUNA($ID_COMUNA);
    }

    public function setID_LOCACION($ID_LOCACION){
        $this->ID_LOCACION=$ID_LOCACION;
    }
    public function getID_LOCACION(){
        return $this->ID_LOCACION;
    }
    public function setDIRECCION($DIRECCION){
        $this->DIRECCION=$DIRECCION;
    }
    public function getDIRECCION(){
        return $this->DIRECCION;
    }
    public function setID_COMUNA($ID_COMUNA){
        $this->ID_COMUNA=$ID_COMUNA;
    }
    public function getID_COMUNA(){
        return $this->ID_COMUNA;
    }
   }
?>
