<?php

include_once '../Modelo/CajaBackup.php';
include_once '../DAO/Operaciones.php';
session_start();
$leja = $_REQUEST['lejas_libres'];
$idEstanteria = $_REQUEST['estanteriasDisponibles'];
$cajaEncontradaDevolver = $_SESSION['cajaEncontradaDevolver'];

$resultado = Operaciones::devolverCaja($cajaEncontradaDevolver, $leja, $idEstanteria);
//print_r($codigo);
//
if ($resultado) {
   header('Location:../Vista/MensajeCorrecto.php');
} else {
    $_SESSION['resultadoOperacion'] = "Operación erronea";
}

header('Location:../Vista/MenuEntrada.php');

