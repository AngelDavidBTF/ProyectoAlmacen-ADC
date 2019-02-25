<?php

session_start();
 
include_once "../DAO/Operaciones.php";


$lejasDisponibles=Operaciones::lejasDisponibles(5);

print_r($lejasDisponibles);

