<?php 
session_start();
 ?>
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
		<h2>Consultas</h2>
     <?php 
function codCaptcha() {

    $texto = '1234567890#';
    $codigo = '';
    for ($i=0; $i<6; $i++) {
        $codigo .= $texto [rand(0,9)];
    }
    return $codigo;
}
$_SESSION['captcha'] = codCaptcha();

?>
		<form method="POST" action="componentes/codigoCaptcha.php">
			<br><input type="text" name="nombre" placeholder="Nombre" require><br>
			<br><input type="text" name="apellido" placeholder="Apellido" require><br>
			<br><input type="email" name="email" placeholder="Correo Electronico" require><br>
			<br><textarea name="consulta" placeholder="Consulta"></textarea><br>
			<h2><br><label for="captcha">Codigo Captcha</label><br></h2>
			<br><img src="componentes/cargar.php" alt="Captcha" class="Captcha"><br>
			<br><input type="text" name="codigo" placeholder="Codigo captcha" required maxlength="6"><br>
			<?php 
	       if(isset($_GET["okey"])) {
			echo "<p>Consulta realizada</p>";
		   }
		   if(isset($_GET["error"])) {
			echo "<p class='color'>El codigo ingresado es incorrecto. Vuelva a cargar los datos</p>";
		   }
          
			?>
			<br><input type="submit" value="Verificar"><br>

		</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>