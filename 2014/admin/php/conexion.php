<?php 

	
class Conectar{

	public static function Conexion(){
		$server='localhost';
		$user='root';
		$password='';
		$db='tenda_ce_kei';

		$con=mysql_connect($server,$user,$password,$db)or die("Error en la conexion");
		mysql_select_db($db);

		return $con;
	}

}




 ?>