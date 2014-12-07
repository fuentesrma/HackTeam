
<!doctype html>
<html lang="es">
<head>
<script src=”http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js”></script>

<link rel=”stylesheet” href=”http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css”  />

	<meta charset="utf-8">
	<title>SYC</title>
	<meta name="description" content="">
	<meta name="author" content="SYC">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<style type="text/css">
		#down{
			
		}
		#mail{
			color: #FFF;
			margin-left: 4px;
			text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
			background-color: rgba(23, 191, 204, 0.65);
			background-image: linear-gradient(to bottom, rgba(13, 201, 194, 1), rgba(39, 231, 197, 0.65));
			display: inline-block;
			padding: 7px 12px;
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
			border-color: #000 #000 #050505;
			border-radius: 4px;
			box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
		}
		button, html input[type="button"], input[type="reset"], input[type="submit"] {
			color: #FFF;
			margin-left: 4px;
			text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
			background-color: rgba(185, 18, 6, 0.65);
			background-image: linear-gradient(to bottom, #ED433D, rgba(231, 13, 13, 0.65));
			display: inline-block;
			padding: 7px 12px;
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
			border-color: #000 #000 #050505;
			border-radius: 4px;
			box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
		}
	</style>
</head>
<body>

	<!--Inicia nav-->
	<nav>
		<ul class="menu_principal">
			<li class="logo">
				<a href="index.html"><img src="img/logo.png" alt=""></a>
			</li>
			<li class="">
				<a href="index.html"><strong>Buscando tu Carrera</strong></a>
			</li>
		</ul>
	</nav>
	<!--Termina nav-->

	<div class="max_details_proy">
		<div class="min_content">
			
			<?php

			$conexion = mysql_connect('localhost','root','');
			$db= mysql_select_db('universidades',$conexion);
			mysql_query("SET NAMES 'utf8'");  
			$inst = $_GET['CV'];


			$query = "SELECT * FROM carreras WHERE CLAVEINSTIC10='".$inst."'";
			mysql_query("SET NAMES 'utf8'");  
			$respuesta = mysql_query ($query) or die(mysql_error());
			mysql_query("SET NAMES 'utf8'");  
			if (mysql_fetch_assoc ($respuesta)<=0) {
				
			echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'<b>'.".";
			}else {
			$respuesta = mysql_query ($query) or die(mysql_error());
			
					while($row = mysql_fetch_array($respuesta)){
						$cod=$row['CLAVEINSTIC10'];
					$nombreuni=$row['NOMINSTIC100'];
					$carrera=$row['NOMBRECARC100'];
					$direccion=$row['DOMICILIOC100'];
					$nomb_dir=$row['RESP_CAPC100'];	//
					$cp=$row['CODPOSTN110'];	 
					$tel=$row['TELEFONOC15'];
					$correo=$row['correoc100'];//
					$pagina=$row['pagina_webc100'];	 //
			}
}
			 ?>


			<article class="proyecto">
				
				<div class="nombre">
					<a href="">Nombre de la Universidad</a><br>
					<label><?php echo "$nombreuni"; ?></label>
				</div>
				<div class="categoria">
					<a href="">Carrera</a><br>
					<label><?php echo "$carrera"; ?></label>
				</div>
				<div class="descripcion">
					<p class="tag">Ubicacion GPS</p>
					<p>
					   <?php //include "mapa.js"; ?>
						<script type="text/javascript">
							var map = L.map(‘map’).setView([43.2980 , -1.9887], 13);

							L.tileLayer(‘http://{s}.tile.osm.org/{z}/{x}/{y}.png’, {
							attribution: ‘&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors’
							}).addTo(map);
						</script>
						<iframe width='100%' height='520' frameborder='0' src='http://pepegut.cartodb.com/viz/ca705b70-7dc2-11e4-9b32-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>   
					</p>
				</div>
				<div class="habilidades">
					<p class="tag">Datos de la Universidad</p>
				</div>
				
				<div class="telefono">
					<p class="tag">Direccion</p><br>
					<label><?php echo "$direccion"; ?></label>
				</div>
				<div class="propuestas">
					<p class="tag">Nombre del director</p>
					<strong>Julio Iglesias</strong>
				</div>
				<div class="status">
					<p class="tag">codigo postal</p><br>
					<label><?php echo "$cp"; ?></label>
				</div>
				<div class="metodo_cobro">
					<p class="tag">Telefono</p><br>
					<label><?php echo "$tel"; ?></label>

				</div>
				<div class="valor_hora">
					<p class="tag">Correo electronico</p><br>
					<label><?php echo "$correo"; ?></label>
				</div>
				<div class="presupuesto">
					<p class="tag">pagina web</p><br>
					<label><?php echo "$pagina"; ?></label>
					
				</div>
				<div class="telefono">
					<p class="tag">Mas+</p><br>
					<form method="post" action="rpt.php">
						<input type="hidden" name="nom_uni" value="<?php echo $nombreuni; ?>">
						<input type="hidden" name="carrera" value="<?php echo $carrera; ?>">
						<input type="hidden" name="dir" value="<?php echo $direccion; ?>">
						<input type="hidden" name="email" value="<?php echo $correo; ?>">
						<input type="hidden" name="pagina" value="<?php echo $pagina; ?>">
						<input type="hidden" name="telefono" value="<?php echo $tel; ?>">
						<input type="submit" name="" value="Descargar Archivo">	
					</form>
					<br>
					<!--<a href=""></a><button id="mail">Enviar a mi correo</button></a>-->
					<form method="post" action="mail.php">
						<input type="email" name="mail" required>
						<input type="hidden" name="nom_uni" value="<?php echo $nombreuni; ?>">
						<input type="hidden" name="carrera" value="<?php echo $carrera; ?>">
						<input type="hidden" name="dir" value="<?php echo $direccion; ?>">
						<input type="hidden" name="email" value="<?php echo $correo; ?>">
						<input type="hidden" name="pagina" value="<?php echo $pagina; ?>">
						<input type="hidden" name="telefono" value="<?php echo $tel; ?>">
						<input type="submit" name="" value="Enviar a mi Correo">	
					</form>
				</div>
			</article>

			
		</div>
	</div>

	<footer>
		<ul class="about_us">
			<li><a href="index.html">Sobre nosotros</a></li>
			<li><a href="index.html">Condiciones de uso</a></li>
		</ul>
		<h3>
			<strong> 
				Powered by <strong>Ingenia Creativa</strong> </strong>
				<span class="footer_text">
					All Right Reserved 2014
				</span>
		</h3>
		</footer>
	</body>
	</html>
	