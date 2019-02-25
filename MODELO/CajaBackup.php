<?php

class CajaBackup {
    private $id;
    private $codigoCaja;
    private $color;
    private $altura;
    private $anchura;
    private $profundidad;
    private $material;
    private $contenido;
    private $fechaAlta;
    private $fechaBaja;
    private $CodEstanteria;
    private $LejaQueOcupaba;
    
    function __construct($codigoCaja, $color, $altura, $anchura, $profundidad, $material, $contenido, $fechaAlta, $fechaBaja, $CodEstanteria, $LejaQueOcupaba) {
        $this->codigoCaja = $codigoCaja;
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
        $this->profundidad = $profundidad;
        $this->material = $material;
        $this->contenido = $contenido;
        $this->fechaAlta = $fechaAlta;
        $this->fechaBaja = $fechaBaja;
        $this->CodEstanteria = $CodEstanteria;
        $this->LejaQueOcupaba = $LejaQueOcupaba;
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

    function getFechaBaja() {
        return $this->fechaBaja;
    }

    function getCodEstanteria() {
        return $this->CodEstanteria;
    }

    function getLejaQueOcupaba() {
        return $this->LejaQueOcupaba;
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

    function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }

    function setCodEstanteria($CodEstanteria) {
        $this->CodEstanteria = $CodEstanteria;
    }

    function setLejaQueOcupaba($LejaQueOcupaba) {
        $this->LejaQueOcupaba = $LejaQueOcupaba;
    }


}
