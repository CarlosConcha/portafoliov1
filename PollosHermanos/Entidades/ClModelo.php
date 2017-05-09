<?php
   class ClModelo{
    private $ID_MODELO;
    private $NOMBRE_MODELO;
    private $CAPACIDAD;

    function ClModelo($ID_MODELO,$NOMBRE_MODELO,$CAPACIDAD){
       $this->setID_MODELO($ID_MODELO);
       $this->setNOMBRE_MODELO($NOMBRE_MODELO);
       $this->setCAPACIDAD($CAPACIDAD);
    }

    public function setID_MODELO($ID_MODELO){
        $this->ID_MODELO=$ID_MODELO;
    }
    public function getID_MODELO(){
        return $this->ID_MODELO;
    }
    public function setNOMBRE_MODELO($NOMBRE_MODELO){
        $this->NOMBRE_MODELO=$NOMBRE_MODELO;
    }
    public function getNOMBRE_MODELO(){
        return $this->NOMBRE_MODELO;
    }
    public function setCAPACIDAD($CAPACIDAD){
        $this->CAPACIDAD=$CAPACIDAD;
    }
    public function getCAPACIDAD(){
        return $this->CAPACIDAD;
    }
   }
?>
