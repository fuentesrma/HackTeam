<style>
h3{color:#F8F8F8;}
#resultado > table:nth-child(2) > tbody:nth-child(1) > tr:nth-child(1){
background-color: rgba(46, 204, 113, 0.8);
}
button{
border-width: medium;
border-style: none;
-moz-border-top-colors: none;
-moz-border-right-colors: none;
-moz-border-bottom-colors: none;
-moz-border-left-colors: none;
border-image: none;
padding: 0.4em 0.9em;
color: #F8F8F8;	
font-family: "Lato",Calibri,Arial,sans-serif;
font-size: 1em;
letter-spacing: 1px;
text-transform: none;
cursor: pointer;
display: inline-block;
margin: 3px 2px;
border-radius: 6px;
text-shadow: 0px -1px 0px rgba(46, 204, 113, 0.8);
background-color: rgba(11, 13, 21, 1);
background-image: linear-gradient(to bottom, rgba(32, 48, 225, 1), rgba(55, 88, 156, 1));
background-repeat: repeat-x;
}
</style>
<?php
//include "mapa.js";
error_reporting(E_ALL ^ E_NOTICE);
//creamos la conexion a la base de datos
$conexion = mysql_connect('localhost','root','');
$db= mysql_select_db('universidades',$conexion);
mysql_query("SET NAMES 'utf8'");  
$palabra = $_GET['variable'];
if($palabra == ''){
	echo 'Escribe una palabra...';
}else{
$query = "SELECT * FROM carreras WHERE NOMBRECARC100 like '%$palabra%'";
$respuesta = mysql_query ($query) or die(mysql_error());
if (mysql_fetch_assoc ($respuesta)<=0) {
	
echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'<b>'.".";
}else {
$respuesta = mysql_query ($query) or die(mysql_error());
echo '<table border="1">';
			 echo '<tr style="background-color:rgb(39,130,210);">';
			 echo '<td>Nombre</td>';
			 echo '<td>Municipio</td>';
			 echo '<td>Detalles</td>';
			 echo '</tr>';
		while($row = mysql_fetch_array($respuesta)){

			 echo '<tr style="background-color: rgba(202, 221, 28, 0.64);">';
			 echo '<td>'.$row['NOMBRECARC100'].'</td>';
			 echo '<td>'.$row['NOMBREMUNC100'].'</td>';
			 echo '<td><a href="proydetails.php?CV='.$row['CLAVEINSTIC10'].'"><button>Detalles</button></a></td>';
			 echo '</tr>';
			 
}
echo '</table>';
}mysql_free_result($respuesta);
}
?>


