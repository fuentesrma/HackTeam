
<?php 
require_once("dompdf/dompdf_config.inc.php");
include "func/conexion.php";

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<center><h1>Universidad</h1></center>
<div align="center">
    <table width="95%" border="1px" padding="0px">
      ';

     //$num=1;
      //$consulta="SELECT * FROM carreras WHERE NOMINSTIC100='".$_GET['no']."'";
      //$consulta="SELECT * FROM carreras WHERE CLAVEINSTIC10='".$_GET['cod']."' AND NOMINSTIC100='".$_GET['no']."'";
      //CLAVEINSTIC10='.$_GET['cod'].'";
      //$resultado = mysql_query($consulta, Conectar::conexion());//ejecutar el query
      //while ($fila=mysql_fetch_array($resultado)) {
        /*
        <input type="hidden" name="nom_uni">
            <input type="hidden" name="carrera">
            <input type="hidden" name="dir">
            <input type="hidden" name="email">
            <input type="hidden" name="pagina">
            <input type="hidden" name="telefono">
        */
      	$codigoHTML.='
        <tr>
        <td bgcolor="#0099FF"><strong>Nombre</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['nom_uni'].'"</strong></td>
        </tr>
        <tr>
        <td bgcolor="#0099FF"><strong>Direccion</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['carrera'].'"</strong></td>
        </tr>
        <tr>
        <td bgcolor="#0099FF"><strong>Direccion</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['dir'].'"</strong></td>

        </tr>
        <tr>
        <td bgcolor="#0099FF"><strong>Email</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['email'].'"</strong></td>

        </tr>
        <tr>
        <td bgcolor="#0099FF"><strong>Pagina Web</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['pagina'].'"</strong></td>

        </tr>
        <tr>
        <td bgcolor="#0099FF"><strong>Telefono</strong></td>
        <td bgcolor="#0099FF"><strong>"'.$_POST['telefono'].'"</strong></td>

        </tr>';
      //$num++;
      //}
      $codigoHTML.='
    </table>
		</div>
		<br>
		<center>
			<i>Derechos Reservados &copy; 2014-2015</i>
			<br>
			<img src="kein.png" style="width:150px">
			<i>Miguel Ángel Fuentes Ramírez</i>
		</center>
		</body>
	</html>';


$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("uni_des_.pdf");
 ?>