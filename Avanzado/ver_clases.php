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
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Agenda de clases</h2>

       <?php 
       include('componentes/conexion.php');
       $consulta_datos = mysqli_query($datosConexion, "SELECT * FROM clases ORDER BY unidad");

       while($lista_datos=mysqli_fetch_assoc($consulta_datos)) {
    ?>

     <div class="ver_datos">
     <h3>Unidad <?php  echo $lista_datos['unidad']; ?></h3>
     <p>Fecha: <?php echo $lista_datos ['fecha'];  ?> </p>
    
	 <?php  }  ?>
</div>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>