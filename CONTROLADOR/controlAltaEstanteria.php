<?php

$codigo=$_REQUEST['codigoEstanteria'];
$material=$_REQUEST['material'];
$numeroLejas=$_REQUEST['numLejas'];
$pasillo=$_REQUEST['pasillo'];
$numeroPasillo=$_REQUEST['numeroP'];

include_once "../MODELO/Estanteria.php";
include_once "../DAO/Operaciones.php";

$ObjEstanteria=new Estanteria($codigo,$material,$numeroLejas,$pasillo,$numeroPasillo,0);

$operacion=Operaciones::añadirEstanteria($ObjEstanteria);

if($operacion==false){
    $_SESSION['falloEstantería']="No se ha podido insertar la estantería";
    header('Location:../Vista/MensajeErrores.php');
}else{
   $mensaje="Insertar Estanteria Correctamente";
    header('Location:../Vista/MensajeCorrecto.php?mensaje='.$mensaje);
}

