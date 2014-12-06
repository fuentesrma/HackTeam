<?php 



class Usuario{

	var $id, $nombre, $email, $encryptar, $privilegios;
	
	function registrar($nombre, $email, $encryptar){
	
	$this-> nombre = $nombre;
	$this-> email = $email;
	$this-> encryptar = $encryptar;
	
	$sql="SELECT * FROM usuarios WHERE email='".$email."'";
	$result = mysql_query($sql, Conectar::conexion());
	$contar = mysql_num_rows($result);
	
	if($contar==0){
			
			//if ($_FILES['imagen']['type']=='image/jpg' || $_FILES['imagen']['type']=='image/jpeg'|| $_FILES['imagen']['type']=='image/png') {
			if ($_FILES['imagen']['type']=='image/jpg' || $_FILES['imagen']['type']=='image/jpeg' || $_FILES['imagen']['type']=='image/png'){


					$rutaServidor='imagenes';
					$rutaTemporal=$_FILES['imagen']['tmp_name'];
					$nombreImagen=$_FILES['imagen']['name'];
					$rutaDestino=$rutaServidor.'/'.$nombreImagen;

					move_uploaded_file($rutaTemporal, $rutaDestino);
					
					$sql="INSERT INTO usuarios (nombre, email, password, imagen) VALUES('".$nombre."', '".$email."', '".$encryptar."', '".$rutaDestino."')";
					$result=mysql_query($sql,Conectar::Conexion());

					echo '<script type="text/javascript">;
				alert("Registro Existoso");
				windows.location.href="index.php";
				</script>'; 

				echo '<script type="text/javascript">;
				windows.location.href="index.php";
				</script>';

				}else{
					echo '<script type="text/javascript">;
				alert("Ha ocurrido un error vuelva a intentarlo");
				windows.location.href="registro.php";
				</script>';
				}	

		}else if($contar!=0){
			echo '<script type="text/javascript">;
				alert("Este email ya ha sido registrado");
				windows.location.href="login.php";
				</script>';
		}
	}
}
class Categoria{

	var $nombre_cat,$desc_cat;
	
	function insertar($nombre_cat,$desc_cat){

		$this -> nombre_cat=$nombre_cat;
		$this -> desc_cat=$desc_cat;

		if ($_FILES['imagen_cat']['type']=='image/jpg' || $_FILES['imagen_cat']['type']=='image/jpeg' || $_FILES['imagen_cat']['type']=='image/png'){

		$rutaServidor = 'imagen/categorias'; 
		$rutaTemporal = $_FILES['imagen_cat']['tmp_name'];
		$nombreImagen = $_FILES['imagen_cat']['name']; 
		//$rutaAdmin = './administrador/usuarios/';  //
		$rutaDestino = $rutaServidor.'/'.$nombreImagen; 
		
		move_uploaded_file($rutaTemporal, $rutaDestino); 

		$sql="INSERT INTO categorias (id_categoria,nombre_cat,desc_cat,imagen_cat) VALUES(null,'".$nombre_cat."','".$desc_cat."','".$rutaDestino."')";
		$result= mysql_query($sql,Conectar::Conexion());
  		echo '<script type="text/javascript">
			alert("Producto Agregado");
			window.location.href="Categoria.php;
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="newCategoria.php;
			</script>';
	}

	}
	function eliminar($id_categoria){
		//delete from categorias where id_categoria=''

		$this -> id_categoria=$id_categoria;

		$sql="SELECT * FROM categorias WHERE id_categoria='".$id_categoria."'";
		$result = mysql_query($sql, Conectar::conexion());
		$contar = mysql_num_rows($result);

		if($contar!=0){
			$sql2="DELETE FROM categorias WHERE id_categoria='".$id_categoria."'";
			$result2=mysql_query($sql2,Conectar::Conexion());
		}else{
			echo '<script type="text/javascript">
			alert("La Categoria no existe");
			window.location.href="categoria.php;
			</script>';
		}

		
	}
	function actualizar($id_categoria,$nombre_cat,$desc_cat){
		$this -> id_categoria=$id_categoria;
		$this -> nombre_cat=$nombre_cat;
		$this -> desc_cat=$desc_cat;
		//$this -> imagen_cat=$imagen_cat;

		$sql1="SELECT * FROM categorias WHERE id_categoria='".$id_categoria."'";
		$result=mysql_query($sql1,Conectar::Conexion());
		$contar=mysql_num_rows($result);
		if ($contar!=0) {

				if ($_FILES['imagen_cat']['type']=='image/jpg' || $_FILES['imagen_cat']['type']=='image/jpeg' || $_FILES['imagen_cat']['type']=='image/png'){

		$rutaServidor = './imagen/categorias'; 
		$rutaTemporal = $_FILES['imagen_cat']['tmp_name'];
		$nombreImagen = $_FILES['imagen_cat']['name']; 
		//$rutaAdmin = './administrador/usuarios/';  //
		$rutaDestino = $rutaServidor.'/'.$nombreImagen; 
		
		move_uploaded_file($rutaTemporal, $rutaDestino); 

		//$sql="INSERT INTO categorias (id_categoria, nombre_cat,desc_cat, imagen_cat) VALUES(null, '".$nombre_cat."', '".$desc_cat."', '".$rutaDestino."')";
		$sql = "UPDATE categorias SET nombre_cat= '$nombre_cat',desc_cat='$desc_cat', imagen_cat='$rutaDestino' WHERE id_categoria='$id_categoria'";
		//DATE categorias SET nombre_cat= '$nombre_cat',desc_cat='$desc_cat', imagen_cat='$imagen_cat' WHERE id_categoria='id_categoria'
			$result2=mysql_query($sql,Conectar::Conexion());
			echo '<script type="text/javascript">
			alert("Producto actualizado correctamente");
			window.location.href="categoria.php;
			</script>';	
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="newCategoria.php;
			</script>';
	}
		}
		else{
		echo '<script type="text/javascript">
			alert("Ha ocurrido un error");
			window.location.href="categoria.php;
			</script>';	
		}

	}
}
class Producto{

	 var $id_prod,$nomb_prod,$desc_prod,$precio_prod,$peso_prod,$ancho_prod,$alto_prod,$existencia_prod,$estado_prod,$categoria;

	 function insertar($id_prod,$nomb_prod,$desc_prod,$precio_prod,$peso_prod,$ancho_prod,$alto_prod,$existencia_prod,$estado_prod,$categoria){//inicio
	 	$this -> id_prod=$id_prod;
	 	$this -> nomb_prod=$nomb_prod;
	 	$this -> desc_prod=$desc_prod;
	 	$this -> precio_prod=$precio_prod;
	 	$this -> peso_prod=$peso_prod;
	 	$this -> ancho_prod=$ancho_prod;
	 	$this -> alto_prod=$alto_prod;
	 	$this -> existencia_prod=$existencia_prod;
	 	$this -> estado_prod=$estado_prod;
	 	$this -> categoria=$categoria;

		if ($_FILES['imagen_prod']['type']=='image/jpg' || $_FILES['imagen_prod']['type']=='image/jpeg' || $_FILES['imagen_prod']['type']=='image/png'){

		$rutaServidor = './imagen/productos'; 
		$rutaTemporal = $_FILES['imagen_prod']['tmp_name'];
		$nombreImagen = $_FILES['imagen_prod']['name']; 
		//$rutaAdmin = './administrador/usuarios/';  //
		$rutaDestino = $rutaServidor.'/'.$nombreImagen; 
		
		move_uploaded_file($rutaTemporal, $rutaDestino); 

		$sql="INSERT INTO productos (id_prod,nomb_prod,desc_prod,precio_prod,peso_prod,ancho_prod,alto_prod,existencia_prod,estado_prod,imagen_prod,categoria) 
		VALUES(null, '".$nomb_prod."','".$desc_prod."','".$precio_prod."','".$peso_prod."','".$ancho_prod."','".$alto_prod."','".$existencia_prod."',
			'".$estado_prod."','".$rutaDestino."','".$categoria."')";
		$result= mysql_query($sql,Conectar::Conexion());

  		echo '<script type="text/javascript">
			alert("Producto Agregado");
			window.location.href="Categoria.php;
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="newCategoria.php;
			</script>';
	}


	 }//fin
	 function eliminar($id_prod){
	 	$this -> id_prod=$id_prod;

		$sql="SELECT * FROM productos WHERE id_prod='".$id_prod."'";
		$result = mysql_query($sql, Conectar::conexion());
		$contar = mysql_num_rows($result);

		if($contar!=0){
			$sql2="DELETE FROM productos WHERE id_prod='".$id_prod."'";
			$result2=mysql_query($sql2,Conectar::Conexion());
		}else{
			echo '<script type="text/javascript">
			alert("La Categoria no existe");
			window.location.href="categoria.php;
			</script>';
		}

	 }
	 function actualizar($id_prod,$nomb_prod,$desc_prod,$precio_prod,$peso_prod,$ancho_prod,$alto_prod,$existencia_prod,$estado_prod,$categoria){//inicio

	 	$this -> id_prod=$id_prod;
	 	$this -> nomb_prod=$nomb_prod;
	 	$this -> desc_prod=$desc_prod;
	 	$this -> precio_prod=$precio_prod;
	 	$this -> peso_prod=$peso_prod;
	 	$this -> ancho_prod=$ancho_prod;
	 	$this -> alto_prod=$alto_prod;
	 	$this -> existencia_prod=$existencia_prod;
	 	$this -> estado_prod=$estado_prod;
	 	$this -> categoria=$categoria;

	 	$sql="SELECT * FROM productos WHERE id_prod='".$id_prod."'";
	 	$result = mysql_query($sql,Conectar::Conexion());
	 	$contar2 = mysql_num_rows($result);

	 	if ($contar2!=0) {
		if ($_FILES['imagen_prod']['type']=='image/jpg' || $_FILES['imagen_prod']['type']=='image/jpeg' || $_FILES['imagen_prod']['type']=='image/png'){
		$rutaServidor = './imagen/productos'; 
		$rutaTemporal = $_FILES['imagen_prod']['tmp_name'];
		$nombreImagen = $_FILES['imagen_prod']['name']; 
		//$rutaAdmin = './administrador/usuarios/';  //
		$rutaDestino = $rutaServidor.'/'.$nombreImagen; 

		move_uploaded_file($rutaTemporal, $rutaDestino); 
		
		$ac = "UPDATE productos SET nomb_prod='".$nomb_prod."', desc_prod='".$desc_prod."',precio_prod='".$precio_prod."',peso_prod='".$peso_prod."',ancho_prod='".$ancho_prod."',alto_prod='".$alto_prod."',existencia_prod='".$existencia_prod."',estado_prod='".$estado_prod."',categoria='".$categoria."' imagen_prod='".$rutaDestino."' WHERE id_prod='".$id_prod."'";
			$result2=mysql_query($ac,Conectar::Conexion());
			echo '<script type="text/javascript">
			alert("Producto actualizado correctamente");
			window.location.href="productos.php;
			</script>';	
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="productos.php;
			</script>';
	}	
	}
	 

	 }//fin
}
 
 
 
 ?>