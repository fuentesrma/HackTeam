
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>MyPhonex.com</title>
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">

    <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>






		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Nifty Modal Window Effects</title>
		<meta name="description" content="Nifty Modal Window Effects with CSS Transitions and Animations" />
		<meta name="keywords" content="modal, window, overlay, modern, box, css transition, css animation, effect, 3d, perspective" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>




    <style type="text/css">

    body{
    	background: url("//assets.ubuntu.com/sites/ubuntu/latest/u/img/backgrounds/image-background-paper.png") repeat-y center top #f7f7f7;
		color: #333;
		font-family: Ubuntu, Arial, "libra sans", sans-serif;
		font-weight: 300;

    }
    .contenido{
		margin: auto;
		width: 984px;
		height:auto; 

		-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;

		border-radius: 4px;
		padding-bottom: 20px;

		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		clear: both;
		display: block;



		padding-bottom: 20px;
		position: relative;
		z-index: 1;

		box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }
    .cabecera{
    	margin: auto;
    	top:35px; 
    	width: 98%;
    	height: 250px;
    	-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;
		background-image: url(img/iphonecolores130613.jpg);
    }
    .menu{
    	top:50px;
    	margin: auto;
    	width: 98%;
    	height: 45px;
    }
    .todo{
    	background: #dd4814;
    	width: 98%;
    	height: 100%;
    	margin: auto;
    	-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;
		display: block;
    }
    .pie{
    	margin: auto;
    	background-color: rgba(80, 198, 185, 0.89);
    	
		display: block;
		height: 47px;
		width: 98%;
		
	}
    .productos_detalle{
    	width: 600px;
		height: 540px;
		padding: 18px;
		background: rgba(255, 255, 255, 0.33);
		/* display: inline-block; */
		/* background-image: url(img/5.jpg); */
		border-radius: 2px;
		margin-bottom: 15px;
		/* margin-right: 10px; */
		margin: auto;
		-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		clear: both;
		box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }
    .contenedorProductos{
    	width: 100%;
    	height: auto;
    	margin: auto;
    }.con{
    	display: block;
    }
    .otropie
    {
    	font-size: 12px;
    	color: white;
    	
    	margin: auto;
    	text-align: center;
    }
    div.otropie{
    }
    #producto_img_detalle{
    	width: 400px;
    	height:300px;
    	border-radius: 4px;
    }
    article>div.cont-img{
    	width: 400px;
    	height: 300px;
    	margin: auto;
    }

    </style>
</head>
<body>
	<div class="contenido">
		<br>
		
		<header class="cabecera">
			
		</header>
		<br>
		<div class="fonca">
			<nav class="menu">
				<?php include "php/menu.php"; ?>
			</nav>
		</div>
		
		<br>
		<section class="todo">
			<div class="con">
				<h1>Nuevos Productos</h1>
				<div class="contenedorProductos">




		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Sony</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<article class="nuevosProductos">
					<p>This is a modal window. You can do the following things with it:</p>
					</article>
					<p>This is a modal window. You can do the following things with it:</p>
					<p>This is a modal window. You can do the following things with it:</p>
					<button class="md-close">Cerrar</button>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/DynamicGrid/"><span>Login</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15313"><span>Login</span></a></span>
			</div>
			<header>
				<h1>Detalles 
				<span>Aqdquiere tu mejor amigo</span></h1>
			</header>
			<div class="main clearfix">
				
				<div class="column">
					
					<?php 

						include_once"php/xon/conexion.php";
						include "php/func/ver.php";
						Producto::detalle_producto($_GET['id']);

					 ?>

				</div>
			</div>
		</div><!-- /container -->
		<div class="md-overlay"></div><!-- the overlay element -->

				
				</div>
				<br>
			</div>
		</section>
		<footer class="pie">
			<div class="otropie"><br>
				<i class="otropie">Derechos reservados &copy Phonex.com</i>
			</div>
		</footer>

	</div>


	<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>



</body>
</html>