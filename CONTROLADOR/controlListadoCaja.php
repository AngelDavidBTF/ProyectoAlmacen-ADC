<?php

session_start();
include "../MODELO/Caja.php";
include_once "../DAO/Operaciones.php";

$arrayObjetosCaja=Operaciones::listadoCajas();

//print_r($arrayObjetosCaja);

$_SESSION['arrayCaja']=$arrayObjetosCaja;
header('Location:../VISTA/vistaListadoCajas.php');

