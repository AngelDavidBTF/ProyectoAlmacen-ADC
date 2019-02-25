<?php

class Caja {
    private $id;
    private $codigoCaja;
    private $color;
    private $altura;
    private $anchura;
    private $profundidad;
    private $material;
    private $contenido;
    private $fechaAlta;
    
    function __construct($codigoCaja, $color, $altura, $anchura, $profundidad, $material, $contenido, $fechaAlta) {
        $this->codigoCaja = $codigoCaja;
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
        $this->profundidad = $profundidad;
        $this->material = $material;
        $this->contenido = $contenido;
        $this->fechaAlta = $fechaAlta;
    }
    function getId() {
        return $this->id;
    }

    function getCodigoCaja() {
        return $this->codigoCaja;
    }

    function getColor() {
        return $this->color;
    }

    function getAltura() {
        return $this->altura;
    }

    function getAnchura() {
        return $this->anchura;
    }

    function getProfundidad() {
        return $this->profundidad;
    }

    function getMaterial() {
        return $this->material;
    }

    function getContenido() {
        return $this->contenido;
    }

    function getFechaAlta() {
        return $this->fechaAlta;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigoCaja($codigoCaja) {
        $this->codigoCaja = $codigoCaja;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setAnchura($anchura) {
        $this->anchura = $anchura;
    }

    function setProfundidad($profundidad) {
        $this->profundidad = $profundidad;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }
    public function __toString() {
    
        $cadena="La estanteria esta hecha de ".$this->getMaterial()." tiene un código de".$this->getCodigoCaja()." ,con una anchura de ".$this->getAnchura()." ,una altura de ". $this->getAltura()." lejas,en el pasillo ".$this->getPasillo().",con el número de pasillo".$this->getNumero()."<br>"."<br>";
        return $cadena;
}
}
