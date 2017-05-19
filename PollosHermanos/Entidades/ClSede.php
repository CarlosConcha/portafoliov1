<?php
   class ClSede{
    private $ID_SEDE;
    private $ID_LOCACION;
    private $NOMBRE_SEDE;

    function ClSede($ID_SEDE,$ID_LOCACION,$NOMBRE_SEDE){
       $this->setID_SEDE($ID_SEDE);
       $this->setID_LOCACION($ID_LOCACION);
       $this->setNOMBRE_SEDE($NOMBRE_SEDE);
    }

    public function setID_SEDE($ID_SEDE){
        $this->ID_SEDE=$ID_SEDE;
    }
    public function getID_SEDE(){
        return $this->ID_SEDE;
    }
    public function setID_LOCACION($ID_LOCACION){
        $this->ID_LOCACION=$ID_LOCACION;
    }
    public function getID_LOCACION(){
        return $this->ID_LOCACION;
    }
    public function setNOMBRE_SEDE($NOMBRE_SEDE){
        $this->NOMBRE_SEDE=$NOMBRE_SEDE;
    }
    public function getNOMBRE_SEDE(){
        return $this->NOMBRE_SEDE;
    }
   }
?>
