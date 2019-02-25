<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu Entrada</title>
        <meta charset="UTF-8">
    </head>
    <style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

html {
	background: #333 url(http://subtlepatterns.com/patterns/tex2res4.png) 0 0 repeat;
	min-height: 100%;
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
	color: #FFF;
}

body, html {
	height: 100%;
	margin: 0;
	padding: 0;
}

a {
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
}

	a:hover, li:hover > a {
		color: #FFF;
	}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

li {
	margin: 0;
	padding: 0;
}

#menu {
	border-left: 1px solid #FFF;
	border-right: 1px solid #FFF;
	background: rgba(0, 0, 0, 0.5);
	float: left;
	font-size: 1.5em;
	min-height: 100%;
	margin-left: 1em;
}

#menu li {
	position: relative;
	z-index: 1;
}

#menu li a {
	display: block;
	padding: 0.5em 1em;
	white-space: nowrap;
}

	#menu li ul {
		position: absolute;
		overflow: hidden;
		display: none;
		left: 100%;
		top: 0.5em;
		float: none;
		background-image: -moz-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
		background-image: -webkit-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
		background-image: radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
	}
	
	#menu li:hover ul {
		display: block;
	}
	
	#menu li ul a {
		position: relative;
		font-size: 0.8em;
	}
	
	#menu li ul a:hover:before {
		content: "";
		display: block;
		width: 1em;
		height: 1em;
		background: rgba(0,0,0,0.75);
		border: 1px solid #FFF;
		position: absolute;
		top: 0.5em;
		left: -0.75em;
		-moz-transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
	}
        img{
            top:1%;
            left: 1%;
            width: 650px;
            height: 600px;
        }
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul id="menu">
                            <li><a href="vistaLogin.php">LOGIN</a></li>
				<li><a href="">Estanterías</a>
					<ul>
						<li><a href="AltaEstanterias.php">Alta Estantería</a></li>
						<li><a href="../CONTROLADOR/controlListadoEstanteria.php">Listado Estantería</a></li>
					</ul>
				</li>
                                <li><a href="">Cajas</a>
					<ul>
						<li><a href="vistaAltaCajas.php">Alta Caja</a></li>
						<li><a href="../CONTROLADOR/controlListadoCaja.php">Listado Caja</a></li>
					</ul>
				</li>
                                <li><a href="">Gestión de Almacen</a>
					<ul>
                                            <li><a href="../CONTROLADOR/ControladorInventario.php">Inventario</a></li>
                                            <li><a href="../VISTA/SalidaCajas.php">Salida de Cajas</a></li>
                                            <li><a href="../VISTA/DevolucionCajas.php">Devolucion de Cajas</a></li>
				</li>
                                </ul>
			</ul>
		</div>
            <img src="img/cajas.png" alt=""/>
	</body>
        <?php
        
        ?>
</html>
