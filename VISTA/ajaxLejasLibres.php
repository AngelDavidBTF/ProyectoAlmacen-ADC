<!DOCTYPE html>

<html>
    <?php
        session_start();
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    </head>
    <body>
        <?php  
            include_once "../DAO/Operaciones.php";
            //OBTENEMOS LA VARIABLE Origen
            $idestanteria=$_REQUEST['estanteriasDisponibles'];
 
/* Se hace la consulta oportuna */
            try{   
            $arrayLejasDisponibles=Operaciones::lejasDisponibles($idestanteria);
            } catch (EstanteriaLlenaException $ex) {
                echo $ex->errorMessage();
            }

            foreach($arrayLejasDisponibles as $leja){
        ?>
           <option value="<?php echo $leja?>" ><?php echo $leja?> </option>
        <?php
            }// for
 //nfilas
        ?>
    </body>
</html>
