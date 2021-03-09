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
	<meta charset="UTF-8">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" href="../../css/Registrar_estudiantes.css">
	<title>Registrar estudiantes</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
			<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div><br><br><br><br>
					<div class="box">
					<h2 align="center">Registrar estudiantes y sus datos</h2>
						<form method="post" autocomplete="off" action="../../Model/Estudiantes/Registrar estudiante.php">
							<div class="inputBox">
								<input type="text" name="ID_estudiante" required id="ID_estudiante">
								<label for="ID_estudiante">ID del estudiante</label>
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
								<input type="text" name="curso" required id="curso">
								<label for="Tipo">Curso</label>
							</div>
							<div class="inputBox">
								<input type="text" name="ID_computador" required id="ID_computador">
								<label for="ID_computador">ID del computador</label>
							</div>
							<div class="inputBox">
								Fecha asignación computador
								<br><br>
								<input type="date" name="fecha" required id="fecha">
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
	
		require_once '../../Model/Estudiantes/Registrar estudiante.php';
	
	?>

</body>
</html>