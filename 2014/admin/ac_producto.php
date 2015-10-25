
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
    .nuevosProductos{
    	width: 300px;
    	height: 267px;
    	padding:18px;
    	background: rgba(255, 255, 255, 0.33);
    	display: inline-block;
    	/*background-image: url(img/5.jpg);*/
    	border-radius: 2px;
    	margin-bottom: 15px;
    	margin-right: 10px;


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
    #producto_img{
    	width: 250px;
    	height:200px;
    	border-radius: 4px;
    }
    /*article>div.cont-img{
    	width: auto;
    	height: 100px;
    	margin: auto;
    	background-color:white; 
    }*/
    td{
    	width: 200px;
    }
body > div > section > div > div > div.container > header > article > div > table > tbody > tr:nth-child(9) > td:nth-child(2) > input,
#modal-1 > div > div > table > tbody > tr:nth-child(9) > td:nth-child(2) > input[type="submit"]{
	color: #FFF;
background-color: #51A351;
text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
background-color: #5BB75B;
background-image: linear-gradient(to bottom, #62C462, #51A351);
background-repeat: repeat-x;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
display: inline-block;
padding: 3px 12px;
margin-bottom: 0px;
font-size: 14px;
line-height: 20px;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-repeat: repeat-x;
border-width: 1px;
border-style: solid;
-moz-border-top-colors: none;
-moz-border-right-colors: none;
-moz-border-bottom-colors: none;
-moz-border-left-colors: none;
border-image: none;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #B3B3B3;
border-radius: 4px;
box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
}
    </style>
</head>
<body>
	<div class="contenido">
		<br>
		<br>
		<div class="fonca">
			<nav class="menu">
				<?php include "php/menu.php"; ?>
			</nav>
		</div>
		
		<br>
		<section class="todo">
			<div class="con">
				
				<div class="contenedorProductos">




		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Agregar Nuevo Producto</h3>
				<div>
				<table>
					<form action="#" method="POST">
					<tr>
						<td><label>ID:</label></td>
						<td><input type="text" name="id_prod"></td>
					</tr>
					<tr>
						<td><label>Nombre:</label></td>
						<td><input type="text" name="nomb_prod"></td>
					</tr>
					<tr>
						<td><label>Descripcion:</label></td>
						<td><textarea name="desc_prod"></textarea></td>
					</tr>
					<tr>
						<td><label>Precio</label></td>
						<td><input type="number" name="precio_prod"></td>
					</tr>
					<tr>
						<td><label>Stock:</label></td>
						<td><input type="number" name="stock"></td>
					</tr>
					<tr>
						<td><label>Categoria</label></td>
						<td><input type="text" name="categoria"></td>
					</tr>
					<tr>
						<td><label>Marca</label></td>
						<td><input type="text" name="marca"></td>
					</tr>
					<tr>
						<td><label>Imagen</label></td>
						<td><input type="file" name="imagen" required></td>
					</tr>
						<td></td>
						<td><input type="submit" class="md-close" ></td>

					</form>
					</table>
					<!--<button class="md-close">Guardar</button>-->
				</div>
			</div>
		</div>
		<!-- -->
		
		<!-- -->
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15313"><span>Login</span></a></span>
			</div>
			<button class="md-trigger" data-modal="modal-1">Nuevo Producto</button>
			 <header>
				<h1>Productos<span>Telefonos Moviles</span></h1>
				<?php 

						include_once"php/xon/conexion.php";
						include "php/func/ver.php";
						if ($_GET) {
							$id_prod=$_GET['id-kei-ac'];	
							Producto::detalle_producto_actualizar($id_prod);
						}
						

					 ?>
			</header>
			<div class="main clearfix">
				
				<div class="column">
					
					

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
<?php 

if ($_POST) {
 	
		$id_prod = $_POST['id_prod'];
		$nomb_prod = $_POST['nomb_prod'];
		$desc_prod = $_POST['desc_prod'];
		$precio_prod = $_POST['precio_prod'];
		$stock = $_POST['stock'];
		$categoria = $_POST['categoria'];
		$marca = $_POST['marca'];
		$imagen = $_POST['imagen'];

 		$Actualizar = new Producto();
 		$Actualizar -> Actualizar($id_prod,$nomb_prod,$desc_prod,$precio_prod,$stock,$categoria,$marca,$imagen);

 	}

 ?>
