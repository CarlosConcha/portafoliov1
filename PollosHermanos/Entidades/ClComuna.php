<?php
   class ClComuna{
    private $ID_COMUNA;
    private $NOMBRE_COMUNA;

    function ClComuna($ID_COMUNA,$NOMBRE_COMUNA){
       $this->setID_COMUNA($ID_COMUNA);
       $this->setNOMBRE_COMUNA($NOMBRE_COMUNA);
    }

    public function setID_COMUNA($ID_COMUNA){
        $this->ID_COMUNA=$ID_COMUNA;
    }
    public function getID_COMUNA(){
        return $this->ID_COMUNA;
    }
    public function setNOMBRE_COMUNA($NOMBRE_COMUNA){
        $this->NOMBRE_COMUNA=$NOMBRE_COMUNA;
    }
    public function getNOMBRE_COMUNA(){
        return $this->NOMBRE_COMUNA;
    }
   }
?>
