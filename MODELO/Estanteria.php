<?php

class Estanteria {
    private $id;
    private $codigoEstanteria;
    private $material;
    private $numLejas;
    private $pasillo;
    private $numero;
    private $lejasOcupadas;
    function __construct($codigoEstanteria, $material, $numLejas, $pasillo, $numero, $lejasOcupadas) {
        $this->codigoEstanteria = $codigoEstanteria;
        $this->material = $material;
        $this->numLejas = $numLejas;
        $this->pasillo = $pasillo;
        $this->numero = $numero;
        $this->lejasOcupadas = $lejasOcupadas;
    }
    function getId() {
        return $this->id;
    }

    function getCodigoEstanteria() {
        return $this->codigoEstanteria;
    }

    function getMaterial() {
        return $this->material;
    }

    function getNumLejas() {
        return $this->numLejas;
    }

    function getPasillo() {
        return $this->pasillo;
    }

    function getNumero() {
        return $this->numero;
    }

    function getLejasOcupadas() {
        return $this->lejasOcupadas;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigoEstanteria($codigoEstanteria) {
        $this->codigoEstanteria = $codigoEstanteria;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setNumLejas($numLejas) {
        $this->numLejas = $numLejas;
    }

    function setPasillo($pasillo) {
        $this->pasillo = $pasillo;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setLejasOcupadas($lejasOcupadas) {
        $this->lejasOcupadas = $lejasOcupadas;
    }
    public function __toString() {
        $cadena="La estanteria esta hecha de ".$this->getMaterial()." tiene un código de".$this->getCodigoEstanteria()." ,tiene un número de lejas ocupadas de ".$this->getLejasOcupadas()." ,tiene ". $this->getNumLejas()." lejas,en el pasillo ".$this->getPasillo().",con el número de pasillo".$this->getNumero()."<br>"."<br>";
        return $cadena;
    }

}
