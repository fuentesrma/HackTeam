<?php 

class Producto{

	var $id_prod,$nomb_prod,$desc_prod,$precio_prod,$stock,$categoria,$marca,$imagen;

	function verProductos(){
			$consulta="SELECT * FROM producto";//consulta 
				$resultado=mysql_query($consulta,Conectar::conexion());//ejecutar el query
					while ($fila=mysql_fetch_array($resultado)) {//iterar el resultado de la consulta

					echo "<article class='nuevosProductos'>";
					echo "<div class='cont-img'>";
					echo "<img id='producto_img' src='".$fila['imagen']."'>";
					echo "<div>";
					 ?>
					 <button class="md-trigger" data-modal="modal-1">Ver</button>
					 <?php 
					 echo "<a href='producto_detalle.php?id=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Detalle</button></a>";
					 					 echo "<a href='producto_detalle.php?id=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Comprar</button></a>";
					echo "</article>";
				}
	}
	function detalle_producto($id_prod){
		
		$consulta="SELECT * FROM producto WHERE id_prod='$id_prod'";//consulta 
				$resultado=mysql_query($consulta,Conectar::conexion());//ejecutar el query
					while ($fila=mysql_fetch_array($resultado)) {//iterar el resultado de la consulta

					echo "<article class='productos_detalle'>";
					echo "<div class='cont-img'>";
					echo "<img id='producto_img_detalle' src='".$fila['imagen']."'>";
					echo "<table>
						<tr>
							<td>Nombre:</td><td><h1>".$fila['nomb_prod']."</h1></td>
						</tr>
						<tr>
							<td>Descripcion:</td><td>".$fila['desc_prod']."</td>
						</tr>
						<tr>
							<td>Precio:</td><td>".$fila['precio_prod']."</td>
						</tr>
						<tr>
							<td>Existencia:</td><td>".$fila['stock']."</td>
						</tr>
						<tr>
							<td>categoria:</td><td>".$fila['categoria']."</td>
						</tr>
						<tr>
							<td>Marca:</td><td>".$fila['marca']."</td>
						</tr>
						<tr>
							<td>Imagen:</td><td>".$fila['imagen']."</td>
						</tr>
						<tr>
							<td><a href='productosdetalle.php?id=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Comprar</button></a></td>
							<td><a href='productosdetalle.php?id=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Detalle</button></a></td>
							<td><button class='md-trigger'"?> data-modal="modal-1"<?php echo ">Ver</button></td>
						</tr>
					</table>";
					echo "</div>";
					echo "";
					echo "</article>";
				}
	}
	//ver todos los productos para admin
	function productos(){
		
		$consulta="SELECT * FROM producto";//consulta 
				$resultado=mysql_query($consulta,Conectar::conexion());//ejecutar el query
					while ($fila=mysql_fetch_array($resultado)) {//iterar el resultado de la consulta

					echo "<article class='productos_detalle'>";
					echo "<div class='cont-img'>";
					echo "<table>
						<tr>
						<td>Nombre</td><td>Descripcion</td><td>Precio</td><td>Existencia</td><td>categoria</td><td>Marca</td><td>imagen</td>
						<td><a href='index.php?id-kei=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Eliminar</button></a></td>
						</tr>
						<tr>
							<td><h4>".$fila['nomb_prod']."</h4></td>
						
							<td>".$fila['desc_prod']."</td>
						
							<td>".$fila['precio_prod']."</td>
						
							<td>".$fila['stock']."</td>
						
							<td>".$fila['categoria']."</td>
						
							<td>".$fila['marca']."</td>
						
							<td>".$fila['imagen']."</td>
					
							<td><a href='ac_producto.php?id-kei-ac=".$fila['id_prod']."'> <button  class='botondetalle' id='botondetalle'><i class='icon-shopping-mas'></i>Editar</button></a></td>
							
						</tr>
					</table>";
					echo "</div>";
					echo "";
					echo "</article>";
					echo "<br>";
				}
	}
	//fin de todos los productos para admin

		
	function Nuevo($id_prod,$nomb_prod,$desc_prod,$precio_prod,$stock,$categoria,$id_prod,$marca){

		$this -> id_prod=$id_prod;
		$this -> nomb_prod=$nomb_prod;
		$this -> desc_prod=$desc_prod;
		$this -> precio_prod=$precio_prod;
		$this -> stock=$stock;
		$this -> categoria=$categoria;
		$this -> marca=$marca;

		 if (isset($id_prod)) {

		//$sql="INSERT INTO categorias (id_categoria,nombre_cat,desc_cat,imagen_cat) VALUES(null,'".$nombre_cat."','".$desc_cat."','".$rutaDestino."')";
		$sql = "INSERT INTO producto(id_prod,nomb_prod,desc_prod,precio_prod,stock,categoria,marca,imagen) VALUES ('$id_prod','$nomb_prod','$desc_prod','$precio_prod','$stock','$categoria','$marca','img/apple.jpg')";
		$result= mysql_query($sql,Conectar::Conexion());
  		echo '<script type="text/javascript">
			alert("Producto Agregado");
			window.location.href="index.php";
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Ha Ocurrido un Error");
			window.location.href="index.php";
			</script>';
	}
}

	function Eliminar($id_prod){
			//delete from categorias where id_categoria=''

			$this -> id_prod=$id_prod;

			$sql="SELECT * FROM producto WHERE id_prod='".$id_prod."'";
			$result = mysql_query($sql, Conectar::conexion());
			$contar = mysql_num_rows($result);

			if($contar!=0){
				$sql2="DELETE FROM producto WHERE id_prod='".$id_prod."'";
				$result2=mysql_query($sql2,Conectar::Conexion());
				echo '<script type="text/javascript">
				alert("Producto Eliminado");
				window.location.href="index.php";
				</script>';
			}else{
				echo '<script type="text/javascript">
				alert("El producto no se ha podido Eliminar");
				window.location.href="index.php";
				</script>';
			}

			
	}
	function Actualizar($id_prod,$nomb_prod,$desc_prod,$precio_prod,$stock,$categoria,$marca,$imagen){//inicio

	 	$this -> id_prod=$id_prod;
		$this -> nomb_prod=$nomb_prod;
		$this -> desc_prod=$desc_prod;
		$this -> precio_prod=$precio_prod;
		$this -> stock=$stock;
		$this -> categoria=$categoria;
		$this -> marca=$marca;
		$this -> imagen=$imagen;

	 	$sql="SELECT * FROM producto WHERE id_prod='".$id_prod."'";
	 	$result = mysql_query($sql,Conectar::Conexion());
	 	$contar = mysql_num_rows($result);

	 	if ($contar!=0) {
		if ($_FILES['imagen']['type']=='image/jpg' || $_FILES['imagen']['type']=='image/jpeg' || $_FILES['imagen']['type']=='image/png'){


					$rutaServidor='img';
					$rutaTemporal=$_FILES['imagen']['tmp_name'];
					$nombreImagen=$_FILES['imagen']['name'];
					$rutaDestino=$rutaServidor.'/'.$nombreImagen;

					move_uploaded_file($rutaTemporal, $rutaDestino);
		
		$ac = "UPDATE producto SET nomb_prod='".$nomb_prod."',desc_prod='".$desc_prod."',precio_prod='".$precio_prod."',stock='".$stock."',categoria='".$categoria."',marca='".$marca."',imagen='admin/".$rutaDestino."' WHERE id_prod='".$id_prod."'";
			$result2=mysql_query($ac,Conectar::Conexion());
			echo '<script type="text/javascript">
			alert("Producto actualizado correctamente");
			window.location.href="index.php";
			</script>';	
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="ac_producto.php?id-kei-ac='.$id_prod.'";
			</script>';
	}	
	}
	 

	 }//fin
	 //////////////////7
	 function detalle_producto_actualizar($id_prod){
		
		$consulta="SELECT * FROM producto WHERE id_prod='$id_prod'";//consulta 
				$resultado=mysql_query($consulta,Conectar::conexion());//ejecutar el query
					while ($fila=mysql_fetch_array($resultado)) {//iterar el resultado de la consulta

					echo "<article class='productos_detalle'>";
					echo "<div class='cont-img'>";
					echo '

						<table>
					<form action="" method="POST" enctype="multipart/form-data">
					<tr>
						<td><label>ID:</label></td>
						<td><input type="text" name ="id_prod" value='."$fila[id_prod]".'></td>
					</tr>
					<tr>
						<td><label>Nombre:</label></td>
						<td><input type="text" name ="nomb_prod" value='."$fila[nomb_prod]".'></td>
					</tr>
					<tr>
						<td><label>Descripcion:</label></td>
						<td><input type="text" name ="desc_prod" value='."$fila[desc_prod]".'></td>
					</tr>
					<tr>
						<td><label>Precio</label></td>
						<td><input type="number" name ="precio_prod" value='."$fila[precio_prod]".'></td>
					</tr>
					<tr>
						<td><label>Stock:</label></td>
						<td><input type="number" name ="stock" value='."$fila[stock]".'></td>
					</tr>
					<tr>
						<td><label>Categoria</label></td>
						<td><input type="text" name ="categoria" value='."$fila[categoria]".'></td>
					</tr>
					<tr>
						<td><label>Marca</label></td>
						<td><input type="text" name ="marca" value='."$fila[marca]".'></td>
					</tr>
					<tr>
						<td><label>Imagen</label></td>
						<td><input type="file" name ="imagen" value='."$fila[imagen]".'></td>
					</tr>
						<td></td>
						<td><input type="submit" class="md-close" ></td>

					</form>
					</table>

					';
					echo "</div>";
					echo "";
					echo "</article>";
					//jajajajaja
					
					//jajaja
				}
	}


}



 ?>