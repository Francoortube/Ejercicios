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
		<h2>Registro</h2>
		<form action="componentes/cargarusuario.php" method="POST">
			<input type="mail" name="usuario" placeholder="Usuario">
			<input type="password" name="contrasenia" placeholder="Contraseña" maxlength="8" minlength="5">
			<input type="submit" value="Registrarse">
		</form>
		<?php 
		if (isset($_GET['reg_ok'])) {
			echo '<p class="eli">Usuario Registrado</p>';
		}
		?>

		<h2>Ingreso</h2>
			<form action="componentes/verificarusuario.php" method="POST">
			<input type="mail" name="usuario" placeholder="Usuario">
			<input type="password" name="contrasenia" placeholder="Contraseña" maxlength="8" minlength="5">
			<input type="submit" value="Ingresar">
		</form>
		<?php if(isset($_GET['error'])) {
            echo "<p class='color'>Usuario y/o Contraseña incorrecto</p>";
            }  
            if(isset($_GET['verificado'])) {
            echo "<p class='colorverde'>Verificado, bienvenido!</p>";
            } ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>