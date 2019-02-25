<?php

session_start();
include_once '../DAO/Operaciones.php';
//LLAMADA A OPERACIONES--> QUE MONTA EL OBJETO INVENTARIO Y LO DEVUELVE
$inventario = Operaciones::obtenerInventario();

//SE SUBE A SESSION EL OBJETO QUE NOS DEVUELVE obtenerInventario();
$_SESSION['Inventario']=$inventario;
//print_r($inventario);

//REDIRECCIONAR A LA VISTA INVENTARIO
header('Location:../Vista/Inventario.php');

