<?php

	session_start();
	$usuario=$_SESSION['username'];
	
	if(!isset($usuario)){
		header("location: .././Index.php");
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" href="../../css/Registrar_salas.css">
	<title>Registrar salas</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
			<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div><br/><br>
					<div class="box"><br>
					<h2 align="center">Registrar salas</h2><br>
						<form method="post" autocomplete="off" action="../../Model/Salas/Registrar sala.php">
						<div class="inputBox">
								<input type="text" name="ID_sala" required id="ID_sala">
								<label for="ID_sala">ID de la sala</label>
							</div>
							<div class="inputBox">
								<input type="text" name="nombre" required id="nombre">
								<label for="nombre">Nombre</label>
							</div>
							<div class="inputBox">
								<input type="text" name="asignacion" required id="asignacion">
								<label for="asignacion">Asignacion</label>
							</div>
							<div class="inputBox">
								<label for="estado">Estado</label><br><br>
								<select name="estado">
									<option value="Habilitada">Habilitada</option>
									<option value="Inhabilitada">Inhabilitada</option>
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
	
	require_once '../../Model/Salas/Registrar sala.php';

?>
</body>
</html>