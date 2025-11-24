<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php");
		include("clases/agregado.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>

		<form action="clases/introducir_producto.php" method="POST">
			<br><input type="text" name="nombre" placeholder="Nombre"><br>
			<br><textarea name="descripcion" placeholder="Descripcion"></textarea><br>
			<br><input type="number" name="precio" placeholder="Precio"><br>
			<br><input type="submit" name="Cargar Producto"><br>
		</form>
		<?php 
		if(isset($_GET['resgistrado'])) {
			echo "<p class='colorverde'>Producto Cargado!</p>";
		}
		?>
		<table border="1"width="90%">
         <tr><th class="color">Nombre</th><th class="color">Descripcion</th><th class="color">Precio</th><br>
		 </tr>
		
	
			<?php 
		
			$mostrarProducto = $productos->listar_Producto();
			for($i=0; $i<count($mostrarProducto); $i++){
			?>
			
			<tr>
            <td><?php echo $mostrarProducto[$i]["nombre"]; ?></td>
			<td><?php echo $mostrarProducto[$i]["descripcion"];  ?></td>
			<th><?php echo $mostrarProducto[$i]["precio"]; ?></th>
			<th><a href="clases/eliminar.php?nombre=<?php echo $mostrarProducto[$i]["nombre"]; ?>" class="eli">Eliminar</a></th></tr>
		    
			<?php
			} 
			?>
	     </table>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>