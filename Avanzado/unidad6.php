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
		<h2>Usuarios</h2>
		 <!-- <form action="unidad6.php" method="POST">
			<input type="text" name="Nombre" placeholder="Nombre">
			<input type="text" name="Apellido" placeholder="Apellido">
			<input type="date" name="Edad" placeholder="Fecha de Nacimiento">
			<input type="submit" value="Cargar">
		</form> -->

		    <?php 
	 include('clases/usuario.php');
     // if ($_POST) {
	 $usu = new Usuario('Matias','Gimenez','1996-12-15');

     $usu->imprime_caracteristicas();
	 $edadusu = $usu ->calcular_edad();

	 echo "Edad: $edadusu";
	 // }
	   ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>