<?php

include "../MODELO/Estanteria.php";
include_once "../DAO/Operaciones.php";
$ListaEstanterias=Operaciones::listadoEstanterias();
//print_r($ListaEstanterias);
session_start();
$_SESSION["ListaEstanterias"]=$ListaEstanterias;
header("Location:..\VISTA\ListadoEstanterias.php");
