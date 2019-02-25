<?php

include_once '../Modelo/Caja.php';
include_once '../DAO/Operaciones.php';
session_start();


//REQUEST DE TIPO Y CODIGO DE CAJA
$codigo = $_REQUEST['CodigoCaja'];
$_SESSION['codigoCajaDevolver'] = $codigo;

//SI ESTA EN BBDD SE BORRA
$cajaEncontradaDevolver = Operaciones::listadoCajaDevolver($codigo);

if ($cajaEncontradaDevolver === FALSE) {
    header('Location:../Vista/MenuEntrada.php');
} else  {
    /* Mostrar caja */
    $_SESSION['cajaEncontradaDevolver'] = $cajaEncontradaDevolver;
    
    header('Location:../Vista/ConfirmacionCajaDevolver.php');
    
}
