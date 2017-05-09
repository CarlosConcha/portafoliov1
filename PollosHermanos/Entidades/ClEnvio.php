<?php
   class ClEnvio{
    private $CODIGO;
    private $REG_FECHA;
    private $ID_SEDE_O;
    private $ID_SEDE_D;

    function ClEnvio($CODIGO,$REG_FECHA,$ID_SEDE_O,$ID_SEDE_D){
       $this->setCODIGO($CODIGO);
       $this->setREG_FECHA($REG_FECHA);
       $this->setID_SEDE_O($ID_SEDE_O);
       $this->setID_SEDE_D($ID_SEDE_D);
    }

    public function setCODIGO($CODIGO){
        $this->CODIGO=$CODIGO;
    }
    public function getCODIGO(){
        return $this->CODIGO;
    }
    public function setREG_FECHA($REG_FECHA){
        $this->REG_FECHA=$REG_FECHA;
    }
    public function getREG_FECHA(){
        return $this->REG_FECHA;
    }
    public function setID_SEDE_O($ID_SEDE_O){
        $this->ID_SEDE_O=$ID_SEDE_O;
    }
    public function getID_SEDE_O(){
        return $this->ID_SEDE_O;
    }
    public function setID_SEDE_D($ID_SEDE_D){
        $this->ID_SEDE_D=$ID_SEDE_D;
    }
    public function getID_SEDE_D(){
        return $this->ID_SEDE_D;
    }
   }
?>
