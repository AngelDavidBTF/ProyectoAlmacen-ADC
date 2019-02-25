<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $conexion= new mysqli("localhost","root","1234");
       // print $conexion->server_info."<br>"."<br>";
        
        if($conexion){
           // echo "conexion establecida"."<br>"."<br>";
        }
        else{
           echo "no se establece conexion";
        }
     $conexion->select_db("bd_almacen_adc") or die ("base de detos no encontrada");
     //   echo "conexion establecida con la base de datos";
        
        ?>
    </body>
</html>


