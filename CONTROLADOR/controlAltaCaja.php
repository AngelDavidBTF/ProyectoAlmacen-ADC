<?php

$codigo=$_REQUEST['codigoCaja'];
$color=$_REQUEST['color'];
$altura=$_REQUEST['altura'];
$anchura=$_REQUEST['anchura'];
$profundidad=$_REQUEST['profundidad'];
$material=$_REQUEST['material'];
$contenido=$_REQUEST['contenido'];
$fecha_alta=$_REQUEST['fecha_alta'];

$estanterias=$_REQUEST['estanteriasDisponibles'];
$leja=$_REQUEST['lejas_libres'];

include_once "../MODELO/Caja.php";
include_once "../MODELO/Ocupacion.php";
include_once "../DAO/Operaciones.php";

$ObjCaja=new Caja($codigo, $color, $altura, $anchura, $profundidad, $material, $contenido, $fecha_alta);
$ObjOcupacion= new Ocupacion($ObjCaja->getId(), $estanterias, $leja);

Operaciones::añadirCaja($ObjCaja,$ObjOcupacion);
    
header('Location:../Vista/MenuEntrada.php');


