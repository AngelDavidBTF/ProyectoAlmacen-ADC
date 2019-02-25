<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
   
    </head>
    <?php
    include_once '../Modelo/Inventario.php';
    include_once '../Modelo/Caja.php';
    include_once '../Modelo/EstanteriaConCajas.php';
    include_once '../Modelo/Estanteria.php';
    include_once '../Modelo/Ocupacion.php';
    session_start();
    ?>
    <body>
        <style type="text/css">
    html {
	background: #333 url(http://subtlepatterns.com/patterns/tex2res4.png) 0 0 repeat;
	min-height: 100%;
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
	color: #FFF;}

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
a{
    text-decoration: none;
}
.button{
            text-align:center;
            text-decoration: none;
      font-family: 'Helvetica Neue', Helvetica, sans-serif;
      display:inline-block;
            color: #FFF;
            background: #7F8C8D;
            padding: 15px 30px;
            white-space: nowrap;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin: 10px 5px;
            -webkit-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
}
      
.azul{
  background: #3498DB;
}
</style>
        <div class="container">
            <?php
            $inventario = $_SESSION['Inventario'];
//        print_r($inventario);
            ?>   



            <div class="well well-lg row">
                <div class="col-sm-8">
                    <strong>Fecha actual: 
                    <?php
                    echo $inventario->getFecha();
                    ?>
                    
                </strong>
                </div>
                <div class="col-sm-2">
                    <a href="MenuEntrada.php" style="position: fixed; float: left; top:30px; right: 30px;" ><button class="button">Volver al menú principal</button></a>
                </div>
                
            </div>
            


            <!--ESTANTERIAS CON CAJAS********************************************-->
            <?php
            $estanteriasConCajas = $inventario->getEstanteriasConCajas();
            for ($i = 0; $i < count($estanteriasConCajas); $i++) {
                ?>

                <div class="container-fluid">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Estantería <?php echo$i + 1; ?></h3>
                            <table class="container">
                                <thead>
                                    <tr class="success">
                                        <!--<th>ID</th>-->
                                        <th>Código</th>
                                        <th>Material</th>
                                        <th>Pasillo</th>
                                        <th>Número</th>
                                        <th>Lejas (ocupadas)</th>
                                        <th>Capacidad (total)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <!--<td>-->
                                            <?php
//                                            echo $estanteriasConCajas[$i]->getEstanteria()->getId();
                                            ?>
                                        <!--</td>-->
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getCodigoEstanteria();
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getMaterial();
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getPasillo();
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getNumero();
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getLejasOcupadas();
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $estanteriasConCajas[$i]->getEstanteria()->getNumLejas();
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-body" <?php if($estanteriasConCajas[$i]->getCajas()===NULL){ echo "hidden='hidden'"; } ?> >
                            <h4>Cajas</h4>
                            <table class="container">
                                <thead>
                                    <tr class="info">
                                        <!--<th>ID</th>-->
                                        <th>Codigo</th>
                                        <th>Anchura</th>
                                        <th>Profundidad</th>
                                        <th>Altura</th>
                                        <th>Color</th>
                                        <th>Leja que ocupa</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
//                                print_r($estanteriasConCajas[$i]->getCajas());
                                    $cajas = $estanteriasConCajas[$i]->getCajas();
                                    $lejas = $estanteriasConCajas[$i]->getLejas();
//                                echo $cajas[0]->getId();
                                    for ($j = 0; $j < count($cajas); $j++) {
//                                    $cajas = $estanteriasConCajas[$i]->getCajas();
                                        ?>
                                        <tr class="active">
                                            <!--<td>-->
                                                <?php // echo $cajas[$j]->getId(); ?>
                                            <!--</td>-->
                                           
                                            <td>
                                                <?php
                                                echo $cajas[$j]->getCodigoCaja();
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cajas[$j]->getAnchura();
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cajas[$j]->getProfundidad();
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cajas[$j]->getAltura();
                                                ?>
                                            </td>
                                            <td style="background-color: 
                                                <?php $color=$cajas[$j]->getColor();
                                                echo $color.";"; ?>">
                                            </td>
                                            <td>
                                                <?php 
                                                echo $lejas[$j];
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            
        </div>
    </body>
</html>


