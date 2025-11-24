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
		<h2>Comentarios</h2>
      <form action="componentes/comentarios.php" method="POST">
         <br><input type="text" name="nombre" placeholder="Nombre" require><br>
		 <br><input type="text" name="apellido" placeholder="Apellido" require><br>
		 <br><input type="email" name="mail" placeholder="Correo Electronico" require><br>
		 <br><textarea name="comentarios"  id="comentarios" placeholder="Comentarios"></textarea><br>
		 <br><input type="submit"  name="enviar_com"><br>
	  </form>
       <?php 

	    $archivo = fopen('componentes/comentario.txt','r');
		fpassthru($archivo);
		fclose($archivo);
        
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