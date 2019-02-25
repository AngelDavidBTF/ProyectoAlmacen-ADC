<!DOCTYPE html>
<?php
    include_once '../Modelo/Caja.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
    </head>
    <body>
        <?php
        session_start();
        $cajaEncontrada = $_SESSION['cajaEncontradaBorrar'];
         
            $id = $cajaEncontrada->getId();
            $altura = $cajaEncontrada->getAltura();
            $anchura = $cajaEncontrada->getAnchura();
            $profundidad = $cajaEncontrada->getProfundidad();
            $color = $cajaEncontrada->getColor();
            $codigo = $cajaEncontrada->getCodigoCaja();
            $material =$cajaEncontrada->getMaterial();
            $contenido=$cajaEncontrada->getContenido();

//        print_r($cajaEncontrada);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <h3>Debe confirmar que es la caja correcta a borrar:</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Altura</th>
                                <th>Anchura</th>
                                <th>Profundidad</th>
                                <th>Color</th>
                                <th>Código</th>
                                <th>Material</th>
                                <th>Contenido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                    echo $id;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $altura;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $anchura;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $profundidad;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $color
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $codigo
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $material;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $contenido;
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    <form action="../Controlador/ControladorCajaBorrada.php">
                        <input class="button" type="submit" value="Borrar caja">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
