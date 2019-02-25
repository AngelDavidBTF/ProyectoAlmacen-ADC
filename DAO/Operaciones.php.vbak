<?php

include "conexionBBDD.php";
include "../VISTA/EXCEPCIONES/ControlException.php";

class Operaciones {
    public function añadirEstanteria($_ObjEstanteria){
        $codigo=$_ObjEstanteria->getCodigoEstanteria();
        $material=$_ObjEstanteria->getMaterial();
        $numeroLejas=$_ObjEstanteria->getNumLejas();
        $pasillo=$_ObjEstanteria->getPasillo();
        $numeroP=$_ObjEstanteria->getNumero();
        
        $ordenSQL="INSERT INTO estanteria VALUES(null,'$codigo','$material','$numeroLejas','$pasillo','$numeroP',0)";

        global $conexion;
        $resultado=$conexion->query($ordenSQL);

            if($resultado==null){
                return false;
            }else {
                return true;   
            }
    }
    
    public function añadirCaja($_ObjCaja,$_Ocupacion){
        $codigo=$_ObjCaja->getCodigoCaja();
        $color=$_ObjCaja->getColor();
        $altura=$_ObjCaja->getAltura();
        $profundidad=$_ObjCaja->getProfundidad();
        $anchura=$_ObjCaja->getAnchura();
        $material=$_ObjCaja->getMaterial();
        $contenido=$_ObjCaja->getContenido();
        $fechaAlta=$_ObjCaja->getFechaAlta();
        
        $idEstanteria=$_Ocupacion->getIdEstanteria();
        $lejaOcupada=$_Ocupacion->getLeja_Ocupada();
        
        $ordenSQL1="INSERT INTO caja VALUES(default,'$codigo','$color',$altura,$anchura,$profundidad,'$material','$contenido','$fechaAlta');";
        
        global $conexion;
      
        $conexion->autocommit(false);
        $operacion1 = mysqli_query($conexion, $ordenSQL1);
        $idCaja = mysqli_insert_id($conexion);
        if($operacion1){
            $ordenSQL2 = "UPDATE estanteria SET LejasOcupadas = LejasOcupadas + 1 WHERE ID = $idEstanteria ;";
            $operacion2 = mysqli_query($conexion, $ordenSQL2);
            if($operacion2){
                $ordenSQL3="INSERT INTO ocupacion VALUES(null,$idCaja,$idEstanteria,$lejaOcupada);";
                $operacion3 = mysqli_query($conexion, $ordenSQL3);
                }
            }
        if ($operacion3) {
                $conexion->commit();
            } else {
                $conexion->rollback();
                throw new EstanteriaLlenaException("Estantería Llena, no se pueden añadir más cajas");
            }
    }
    
    public function listadoEstanterias(){

            $ordenSQL="SELECT * FROM estanteria";
            global $conexion;
            $resultado=$conexion->query($ordenSQL);
            $dimension=$resultado->num_rows;
            
            if($resultado&&$resultado->num_rows>0){
                for($i=0;$i<$dimension;$i++){
                    $arrayEstanterias[]=$resultado->fetch_array();
                    }
                }
//print_r($arrayEstanterias);
            $numero_elementos_array=count($arrayEstanterias);

            if($numero_elementos_array>0){
                for($i=0;$i<$numero_elementos_array;$i++){
                    $codigoEstanteria=$arrayEstanterias[$i]['CodigoEstanteria'];
                    $material=$arrayEstanterias[$i]['Material'];
                    $numLejas=$arrayEstanterias[$i]['NumLejas'];
                    $pasillo=$arrayEstanterias[$i]['Pasillo'];
                    $numero=$arrayEstanterias[$i]['Numero'];
                    $lejasOcupadas=$arrayEstanterias[$i]['LejasOcupadas'];

                    $_ObjEstanteria=new Estanteria($codigoEstanteria, $material, $numLejas, $pasillo, $numero,$lejasOcupadas);
                    $_ObjEstanteria->setLejasOcupadas($lejasOcupadas);

                    $arrayObjetosEstanteria[]=$_ObjEstanteria;
                    }
                }
//print_r($arrayObjetosEstanteria);
        return $arrayObjetosEstanteria;
    }
    
    public function estanteriasLibres(){
    
        $ordenSQL="SELECT * FROM estanteria WHERE LejasOcupadas<numLejas";
        global $conexion;
        $resultado=$conexion->query($ordenSQL);
        $dimension=$resultado->num_rows;

        
        if($resultado->num_rows>0){
            for($i=0;$i<$dimension;$i++){
                $arrayEstanteriasLibres[]=$resultado->fetch_array(); 
            }
        }else{
           $error=$conexion->errno;
           throw new ControlException("No hay estanterias con lejas disponibles",$error,null);
        }
        
        $numero_elementos_array=count($arrayEstanteriasLibres);

        if($numero_elementos_array>0){
            for($i=0;$i<$numero_elementos_array;$i++){
                $id=$arrayEstanteriasLibres[$i]['ID'];
                $codigoEstanteria=$arrayEstanteriasLibres[$i]['CodigoEstanteria'];
                $material=$arrayEstanteriasLibres[$i]['Material'];
                $numLejas=$arrayEstanteriasLibres[$i]['NumLejas'];
                $pasillo=$arrayEstanteriasLibres[$i]['Pasillo'];
                $numero=$arrayEstanteriasLibres[$i]['Numero'];
                $lejasOcupadas=$arrayEstanteriasLibres[$i]['LejasOcupadas'];

                $_ObjEstanteria=new Estanteria($codigoEstanteria, $material, $numLejas, $pasillo, $numero,$lejasOcupadas);
                $_ObjEstanteria->setLejasOcupadas($lejasOcupadas);
                $_ObjEstanteria->setId($id);

                $arrayObjetosEstanteria[]=$_ObjEstanteria;
            }
        }
//print_r($arrayObjetosEstanteria);
        return $arrayObjetosEstanteria;   
    }
    
    public function lejasDisponibles($idEstanteria){
    
        $ordenSQL="SELECT Leja_Ocupada FROM ocupacion WHERE idEstanteria='$idEstanteria'";
        global $conexion;
        $resultado=$conexion->query($ordenSQL);

        $dimension=$resultado->num_rows;
            if($resultado){
                for($i=0;$i<$dimension;$i++){
                    $arrayLejasOcupadas[]=$resultado->fetch_array(); 
                }
            }
            
        $ordenSQL1="SELECT numLejas FROM estanteria WHERE id='$idEstanteria'";
        $resultado1=$conexion->query($ordenSQL1);
        $dimension1=$resultado1->num_rows;
        
            if($resultado1){
                for($i=0;$i<$dimension1;$i++){
                    $arrayNumeroLejas[]=$resultado1->fetch_array(); 
                }
            }
//print_r($arrayNumeroLejas);

        $numeroLejas=$arrayNumeroLejas[0][0];
            for($i=0;$i<$numeroLejas;$i++){
                $arrayTodasLejas[]=$i+1;
            }
        $numero=count($arrayLejasOcupadas);
            for($i=0;$i<$numero;$i++){
                unset($arrayTodasLejas[($arrayLejasOcupadas[$i][0])-1]);  
            }
        array_multisort($arrayTodasLejas);
    return $arrayTodasLejas;
    }
    
    public function listadoCajas(){   
        
    $ordenSQL="SELECT * FROM caja";
    global $conexion;
    $resultado=$conexion->query($ordenSQL);
    $dimension=$resultado->num_rows;

    if($resultado->num_rows>0){
        for($i=0;$i<$dimension;$i++){
            $arrayCajas[]=$resultado->fetch_array(); 
        }

    }
//print_r($arrayEstanterias);
    $numero_elementos_array=count($arrayCajas);

    if($numero_elementos_array>0){
        for($i=0;$i<$numero_elementos_array;$i++){
            $codigocaja=$arrayCajas[$i]['CodigoCaja'];
            $color=$arrayCajas[$i]['Color'];
            $altura=$arrayCajas[$i]['Altura'];
            $anchura=$arrayCajas[$i]['Anchura'];
            $profundidad=$arrayCajas[$i]['Profundidad'];
            $material=$arrayCajas[$i]['Material'];
            $contenido=$arrayCajas[$i]['Contenido'];
            $fecha_alta=$arrayCajas[$i]['Fecha_alta'];

            $_ObjCaja=new Caja($codigocaja, $color, $altura, $anchura, $profundidad, $material, $contenido,$fecha_alta);
            $arrayObjetosCaja[]=$_ObjCaja;
        }
    }
//print_r($arrayObjetosCaja);
return $arrayObjetosCaja;
    }
    
    public function obtenerInventario(){
        global $conexion;
        
        include_once '../Modelo/Inventario.php';
        include_once '../Modelo/EstanteriaConCajas.php';
        include_once '../Modelo/Ocupacion.php';
        include_once '../Modelo/Caja.php';
        include_once '../Modelo/Estanteria.php';
        
        $ordenSQL1 = "select * from estanteria order by id";
        $estanterias = array();
        $resultado1 = mysqli_query($conexion, $ordenSQL1);

        $cont = 0;
        
        //Estanterias
        
        foreach ($resultado1 as $fila) {

            $estanterias[] = new Estanteria($fila['CodigoEstanteria'], $fila['Material'],$fila['NumLejas'], $fila['Pasillo'], $fila['Numero'],$fila['LejasOcupadas']);
//            $idEstanteria = $fila['id'];
            $estanterias[$cont]->setId($fila['ID']);
            $estanterias[$cont]->setLejasOcupadas($fila['LejasOcupadas']);
            $cont++;
        }
        
        //OCUPACION
        $ordenSQL2 = "select * from ocupacion order by IdEstanteria, Leja_Ocupada";
        $ocupaciones = array();
        $resultado2 = mysqli_query($conexion, $ordenSQL2);

        $cont = 0;
        foreach ($resultado2 as $fila) {

            $ocupaciones[] = new Ocupacion($fila['IdCaja'], $fila['IdEstanteria'], $fila['Leja_Ocupada']);
            $idOcupacion = $fila['ID'];
            $ocupaciones[$cont]->setId($idOcupacion);
            $cont++;
        }
        
        //Cajas
        
        $ordenSQL3 = "select * from caja order by Id";
        $cajas = array();
        $resultado3 = mysqli_query($conexion, $ordenSQL3);

        $cont = 0;
        foreach ($resultado3 as $fila) {

            $cajas[] = new Caja($fila['CodigoCaja'], $fila['Color'], $fila['Altura'],$fila['Anchura'],$fila['Profundidad'], $fila['Material'],$fila['Contenido'],$fila['Fecha_alta']);
            $idCaja = $fila['ID'];
            $cajas[$cont]->setId($idCaja);
            $cont++;
        }
        
        //Inventario
        $estanteriaConCajas=array();
         for ($i = 0; $i < count($estanterias); $i++) {
            //INTRODUCIMOS LA ESTANTERIA EN EL OBJETO $estanteriasConCajas
            $estanteriasConCajas[$i] = new EstanteriaConCajas(NULL, null, NULL);
            $estanteriasConCajas[$i]->setEstanteria($estanterias[$i]);
            for ($j = 0; $j < count($ocupaciones); $j++) {
                //SI LA ID_ESTANTERIA = ID_ESTANTERIA_OCUPACION
                if ($ocupaciones[$j]->getIdEstanteria() === $estanterias[$i]->getId()) {
                        for ($k = 0; $k < count($cajas); $k++) {
                            if ($ocupaciones[$j]->getIdCaja() === $cajas[$k]->getId()) {
                                $estanteriasConCajas[$i]->addCaja($cajas[$k]);
                                $estanteriasConCajas[$i]->addLeja($ocupaciones[$j]->getLeja_Ocupada());
                                
                            }
                        }
                    }
                }
            }
        $fecha = date("d-m-Y");
        return new Inventario($estanteriasConCajas, $fecha);
    }
    
    public function listadoCajaBorar($_codigo){   
        
    $ordenSQL="SELECT * FROM caja WHERE CodigoCaja='$_codigo'";
    global $conexion;
    $resultado=$conexion->query($ordenSQL);
    if (mysqli_num_rows($resultado) === 1) {
        foreach ($resultado as $fila) {
                $caja = new Caja($fila['CodigoCaja'], $fila['Color'], $fila['Altura'], $fila['Anchura'], $fila['Profundidad'], $fila['Material'], $fila['Contenido'],$fila['Fecha_alta']);
                $caja->setId($fila['ID']);
                }
                return $caja;
            } else {
                return FALSE;
            }
}
    public function borrarCaja($codigo) {
        global $conexion;
        include_once '../Modelo/Caja.php';
        
            $ordenSQL1="DROP TRIGGER IF EXISTS InsertarEnBackup;";
            $ordenSQL2="CREATE TRIGGER `InsertarEnBackup` BEFORE DELETE ON `caja` FOR EACH ROW BEGIN
                            INSERT INTO CAJA_BACKUP VALUES(NULL,OLD.CODIGOCAJA,OLD.COLOR,OLD.ALTURA,OLD.ANCHURA,OLD.PROFUNDIDAD,OLD.MATERIAL,OLD.CONTENIDO,OLD.FECHA_ALTA,CURDATE(),(SELECT CODIGOESTANTERIA FROM ESTANTERIA WHERE ID=(SELECT IDESTANTERIA FROM OCUPACION WHERE IDCAJA=OLD.ID)),(SELECT LEJA_OCUPADA FROM OCUPACION WHERE IDCAJA=OLD.ID));
                            UPDATE ESTANTERIA SET LEJASOCUPADAS=(LEJASOCUPADAS-1) WHERE ID=(SELECT IDESTANTERIA from OCUPACION where IDCAJA=(SELECT ID FROM CAJA WHERE CODIGOCAJA=OLD.CODIGOCAJA));
                            DELETE FROM OCUPACION WHERE IDCAJA=(SELECT ID FROM CAJA WHERE CODIGOCAJA=OLD.CODIGOCAJA);
                            END";        
            $resultado1=$conexion->query($ordenSQL1);
            $resultado2=$conexion->query($ordenSQL2);
            
            if($resultado1 && $resultado2){
                $ordenSQL3 = "delete from caja "
                    . "where codigoCaja='$codigo';";
                $resultado3=$conexion->query($ordenSQL3);
                return $resultado3;
            }
    }
    public function listadoCajaDevolver($codigo) {
        global $conexion;
        include_once '../Modelo/CajaBackup.php';

            $ordenSQL = "select * from caja_backup "
                    . "where codigoCaja='$codigo';";
            $resultado1=$conexion->query($ordenSQL);
            if (mysqli_num_rows($resultado1) === 1) {
                foreach ($resultado1 as $fila) {
                    $caja = new CajaBackup($fila['CodigoCaja'], $fila['Color'], $fila['Altura'], $fila['Anchura'], $fila['Profundidad'], $fila['Material'], $fila['Contenido'], $fila['FechaAlta'], $fila['FechaBaja'], $fila['CodEstanteriaOcupada'], $fila['LejaQueOcupaba']);
                    $caja->setId($fila['ID']);
                    return $caja;
                }
            } else {
                return FALSE;
            }
    }
    public function devolverCaja($cajaEncontradaDevolver, $leja, $idEstanteria) {
        global $conexion;
        include_once '../Modelo/CajaBackup.php';
        include_once '../Modelo/Caja.php';
        
        $idCaja = $cajaEncontradaDevolver->getId();
        $codigoCaja = $cajaEncontradaDevolver->getCodigoCaja();

//         $conexion->autocommit(false);
            $ordenSQL1 = "DROP TRIGGER IF EXISTS devolucionCaja;";
            $ordenSQL2 = "
                CREATE
                TRIGGER devolucionCaja
                BEFORE  DELETE ON caja_backup 
                FOR EACH ROW

                BEGIN
                
                INSERT INTO caja VALUES(
                OLD.ID,
                OLD.CODIGOCAJA,
                OLD.COLOR,
                OLD.ALTURA,
                OLD.ANCHURA,
                OLD.PROFUNDIDAD,
                OLD.MATERIAL,
                OLD.CONTENIDO,
                OLD.FECHAALTA        
                );

                update estanteria 
                set lejasocupadas = lejasocupadas + 1
                where id= $idEstanteria ;
            
                INSERT INTO ocupacion VALUES (
                null,
                OLD.ID , 
                $idEstanteria , 
                $leja);
                END";
            $resultado1=$conexion->query($ordenSQL1);
            $resultado2=$conexion->query($ordenSQL2);
            session_start();
            $codigo=$_SESSION['codigoCajaDevolver'];
            if ($resultado1&&$resultado2) {
                $ordenSQL3 = "delete from caja_backup "
                    . "where CodigoCaja='$codigo';";
                $resultado3=$conexion->query($ordenSQL3);
                return $resultado3;
            }
                $resultado = $conexion->query($query) or die('ERROR: Disparador no creado. ');
                
//        if ($resultado) {
//                $conexion->commit();
//            } else {
//                $conexion->rollback();
//            }
        return $resultado;
    }
    public function logIn($nombreUsuario, $contraseña) {
        global $conexion;
        $sql = "SELECT nombre FROM USUARIO  WHERE nombre ='$nombreUsuario' AND contrasena=AES_ENCRYPT('$contraseña','AngelDavid')";
        $resultados = mysqli_query($conexion, $sql);
        $dimension =$resultados->num_rows;

        if ($dimension == 1) {
            return true;
        } else {
            return false;
        }
    }

}


