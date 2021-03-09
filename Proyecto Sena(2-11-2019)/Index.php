<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="description" description="Sistema de información para la gestión de inventario y organización de equipos de la sala de informática de bachillerato del colegio “Instituto San Ignacio de Loyola">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" type="text/css" href="css/Index.css" />
	<title>Inicio</title>
</head>
<body background="Imagenes/fondo.PNG"> <!--<body class="oprimirboton">-->
	<nav>
		<section>
			<article>
					<div align="center">
						<header><p class="titulo1">Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p></header><br /><br /><br /><br />
						<!--<img src="Captura.PNG" alt="escudo" />-->
						<form autocomplete="off" method="POST" action="Login/Loguear.php"><br><br><br>
								<!--<input class="casillas"  id="id_user" name="id_user" type="text" placeholder="ID" required autofocus><br /><br /><br />-->							
								<br><br>
								<input class="casillas"  id="user" name="usuario" type="text" placeholder="Usuario" required autofocus><br><br><br><br><br>
								<input class="casillas"  id="pass"  name="password" type="password" placeholder="Contraseña" required> <br><br><br>
							<input type="submit" id="Ingresar" value="Ingresar"><br><br>
							<!--<p><a onclick="validation()">Ingresar</a></p><br /><br />-->
						</form>
					</div>
			</article>
		</section>
	</nav>
</body>
</html>
