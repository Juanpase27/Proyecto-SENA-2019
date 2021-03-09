<?php

	session_start();
	$usuario=$_SESSION['username'];
	
	if(!isset($usuario)){
		header("location: ../../Index.php");
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" type="text/css" href="../../css/Registrar usuarios.css">
	<title>Registrar usuario</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
				<header>
				<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
					<div id="titulo">
						<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
					</div>
				</header>
					<div class="box">
						<form method="post" autocomplete="off" action="../../Model/Usuarios/Registrar usuario.php">
						<h2 align="center">Registrar usuarios</h2>
							<div class="inputBox">
								<input type="text" name="ID_usuario" required id="ID_usuario">
								<label for="ID_usuario">ID del usuario</label>
							</div>
							<div class="inputBox">
								<input type="text" name="nombre" required id="nombre">
								<label for="nombre">Nombre</label>
							</div>
							<div class="inputBox">
								<input type="text" name="apellido" required id="apellido">
								<label for="apellido">Apellido</label>
							</div>
							<div class="inputBox">
								<input type="text" name="usuario" required id="usuario">
								<label for="usuario">Nombre usuario</label>
							</div>
							<div class="inputBox">
								<input type="text" name="password" required id="password">
								<label for="password">Password</label>
							</div>
							<div class="inputBox">
								<label for="cargo">Cargo</label><br><br>
								<select name="cargo">
									<option value="Administrador">Administrador</option>
									<option value="Profesor">Profesor</option>
								</select><br><br>
							</div>
							<div class="inputBox">
								<label for="estado">Estado</label><br><br>
								<select name="estado">
									<option value="Habilitado">Habilitado</option>
									<option value="Inhabilitado">Inhabilitado</option>
								</select><br><br>
							</div>
								<input type="button" value="Cancelar" id="Cancelar" class="cancelar" onclick='location.href="../../Página principal.php";'>
								<input type="submit" value="Registrar" name="Enviar" class="aceptar">
						</form>
					</div>
				</article>
			</section>
		</nav>
<?php
	
	require_once '../../Model/Usuarios/Registrar usuario.php';

?>
</body>
</html>
