<?php

class Inventario {
    private $estanteriasConCajas;
    private $fecha;
    
    function __construct($estanteriasConCajas, $fecha) {
        $this->estanteriasConCajas = $estanteriasConCajas;
        $this->fecha = $fecha;
    }

    function getEstanteriasConCajas() {
        return $this->estanteriasConCajas;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setEstanteriasConCajas($estanteriasConCajas) {
        $this->estanteriasConCajas = $estanteriasConCajas;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
