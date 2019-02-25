<?php

class Ocupacion {
    private $id;
    private $IdCaja;
    private $IdEstanteria;
    private $Leja_Ocupada;

    function __construct($IdCaja, $IdEstanteria, $Leja_Ocupada) {
        $this->IdCaja = $IdCaja;
        $this->IdEstanteria = $IdEstanteria;
        $this->Leja_Ocupada = $Leja_Ocupada;
    }
    
    function getId() {
        return $this->id;
    }

    function getIdCaja() {
        return $this->IdCaja;
    }

    function getIdEstanteria() {
        return $this->IdEstanteria;
    }

    function getLeja_Ocupada() {
        return $this->Leja_Ocupada;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCaja($IdCaja) {
        $this->IdCaja = $IdCaja;
    }

    function setIdEstanteria($IdEstanteria) {
        $this->IdEstanteria = $IdEstanteria;
    }

    function setLeja_Ocupada($Leja_Ocupada) {
        $this->Leja_Ocupada = $Leja_Ocupada;
    }
    public function __toString() {
    
        $cadena="La caja ".$this->getIdCaja()." esta en la estanteria con id ".$this->getIdEstanteria()." ,y ocupa la leja ".$this->getLeja_Ocupada();
        return $cadena;
}

}
