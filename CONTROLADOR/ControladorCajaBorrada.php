<?php

include_once '../Modelo/Caja.php';
include_once '../DAO/Operaciones.php';
session_start();
    $caja=$_SESSION['cajaEncontradaBorrar'];
    $codigo = $caja->getCodigoCaja();
    $resultado=Operaciones::borrarCaja($codigo);
    if($resultado){
        $mensaje="Borrado de caja correcto";
        header('Location:../Vista/MensajeCorrecto.php?mensaje='.$mensaje);
    }

    header('Location:../Vista/MenuEntrada.php');

