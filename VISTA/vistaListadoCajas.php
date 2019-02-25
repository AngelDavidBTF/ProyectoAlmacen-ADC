<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
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
a{
    text-decoration: none;
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
        </style>
        <?php
         include_once "../MODELO/Caja.php";
         session_start();
        
        $arrayCajas=$_SESSION['arrayCaja'];
      // print_r($arrayCajas);
        $numero_Objetos_Caja= count($arrayCajas);
        ?>
        <div class="container">
            <table width="1200" border="1" align="center">
              <tr>
                <td colspan="8" align="center"><h1>Estos son tus datos registrados de Cajas </h1></td>
              </tr>
              <tr>
                  <td>CÓDIGO CAJA</td>
                  <td>FECHA DE ALTA</td>
                  <td>MATERIAL</td>
                  <td>ALTURA</td>
                  <td>ANCHURA</td>
                  <td>PROFUNDIDAD</td>
                  <td>COLOR</td>
                  <td>CONTENIDO</td>
              </tr>
            <?php
                for($i=0;$i<$numero_Objetos_Caja;$i++){    
            ?>
                <tr>
                    <td><?php echo $arrayCajas[$i]->getCodigoCaja(); ?> </td>
                    <td><?php echo $arrayCajas[$i]->getFechaAlta(); ?> </td>     
                    <td><?php echo $arrayCajas[$i]->getMaterial(); ?> </td>
                    <td><?php echo $arrayCajas[$i]->getAltura(); ?> </td>         
                    <td><?php echo $arrayCajas[$i]->getAnchura(); ?> </td>       
                    <td><?php echo $arrayCajas[$i]->getProfundidad(); ?> </td>                
                    <td style="background-color: <?php echo $arrayCajas[$i]->getColor(); ?>"></td>                     
                    <td><?php echo $arrayCajas[$i]->getContenido(); ?> </td>
                </tr>
            <?php
                }
            ?>
                <tr>
                  <td colspan="8" rowspan="3" align="center"><a href="MenuEntrada.php">Volver al inicio</a></td>
                </tr>
        </div>
    </body>
</html>
