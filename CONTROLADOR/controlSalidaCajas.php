<?php
$codigo=$_REQUEST['CodigoCaja'];

include_once '../Modelo/Caja.php';
include_once '../DAO/Operaciones.php';
session_start();

$cajaEncontrada=Operaciones::listadoCajaBorar($codigo);
if ($cajaEncontrada !== FALSE) {
    /* Mostrar caja */
    $_SESSION['cajaEncontradaBorrar'] = $cajaEncontrada;
    header('Location:../Vista/ConfirmacionSalidaCaja.php');
} else {
    header('Location:../VISTA/MenuEntrada.php');
}

