<?php

class EstanteriaConCajas {
    private $estanteria;
    private $cajas=array();
    private $lejas=array();
    
    function __construct($estanteria, $cajas, $lejas) {
        $this->estanteria = $estanteria;
        $this->cajas = $cajas;
        $this->lejas = $lejas;
    }

    function getEstanteria() {
        return $this->estanteria;
    }

    function getCajas() {
        return $this->cajas;
    }

    function getLejas() {
        return $this->lejas;
    }
    
    function setEstanteria($estanteria) {
        $this->estanteria = $estanteria;
    }

    function setCajas($cajas) {
        $this->cajas = $cajas;
    }

    function setLejas($lejas) {
        $this->lejas = $lejas;
    }
    
    function addCaja($caja){
        $this->cajas[] = $caja;
    }
    function addLeja($leja){
        $this->lejas[] = $leja;
    }

}
