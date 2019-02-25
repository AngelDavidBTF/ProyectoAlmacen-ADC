<?php

include_once '../DAO/Operaciones.php';
session_start();

$nombre = $_REQUEST['nombre'];
$contraseña = $_REQUEST['contraseña'];

$resultado = Operaciones::login($nombre, $contraseña);

if ($resultado===true) {
    header('Location:../Vista/MenuEntrada.php');
} else if($resultado ===false) {
    $_SESSION['errorLogin']="Login incorrecto";
    header('Location:../Vista/MensajeErrores.php');
}