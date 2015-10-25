<?php 


class Clientes{
	
	function eliminar($id_cli){
		//delete from categorias where id_categoria=''

		$this -> id_cli=$id_cli;

		$sql="SELECT * FROM clientes WHERE id_cli='".$id_cli."'";
		$result = mysql_query($sql, Conectar::conexion());
		$contar = mysql_num_rows($result);

		if($contar!=0){
			$sql2="DELETE FROM clientes WHERE id_cli='".$id_cli."'";
			$result2=mysql_query($sql2,Conectar::Conexion());
		}else{
			echo '<script type="text/javascript">
			alert("El usuario ya ha sido eliminado");
			window.location.href="clientes.php";
			</script>';
		}

		
	}
}



 ?>