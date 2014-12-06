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

					
					//echo "<button value='".$fila['id_prod']."' class='botoncomprar' id='boton_producto'><i class='icon-shopping-cart'></i>Agregar Carrito</button>";
					/*echo "

					<form action='procesar/carrito3.php' method='POST'>

						<input type='hidden' name ='id_prod' value='".$fila['id_prod']."'>	
						<input type='hidden' name ='nomb_prod' value='".$fila['nomb_prod']."'>
						<input type='hidden' name ='desc_prod' value='".$fila['desc_prod']."'>
						<input type='hidden' name ='precio_prod' value='".$fila['precio_prod']."'>
						<input type='hidden' name ='peso_prod' value='".$fila['peso_prod']."'>
						<input type='hidden' name ='ancho_prod' value='".$fila['ancho_prod']."'>
						<input type='hidden' name ='alto_prod' value='".$fila['alto_prod']."'>
						<input type='hidden' name ='existencia_prod' value='".$fila['existencia_prod']."'>
						<input type='hidden' name ='estado_prod' value='".$fila['estado_prod']."'>

						<input type='hidden' name ='imagen_prod' value='admin/".$fila['imagen_prod']."'>

						<input type='hidden' name ='categoria' value='".$fila['categoria']."'>
						<input type='hidden' name ='cantidad' value='1'>
						
						<a href='procesar/carrito3.php'>
						<button value='".$fila['id_prod']."' class='botoncomprar' id='boton_producto'>
						<i class='icon-shopping-cart'></i>Agregar Carrito
						</button>
						</a>
					</form>
					";
					echo "</article>";*/
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
}



 ?>