<?php

	session_start();
	$usuario=$_SESSION['username'];
	
	if(!isset($usuario)){
		header("location: Index.php");
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" href="../../css/Registrar_ubicaciones_1.css">
	<title>Registrar ubicacion</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
			<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div><br/><br/><br/>
				
					<div class="box">
						<form method="post" autocomplete="off" action="../../Model/Ubicaciones/Registrar ubicacion.php">
						<h2 align="center">Registrar ubicaciones</h2><br>
							<div class="inputBox">
								<input type="text" name="ID_ubicacion" required id="ID_laboratorio">
								<label for="ID_ubicacion">ID de la ubicacion</label>
							</div>
							<div class="inputBox">
								<input type="text" name="descripcion" required id="nombre">
								<label for="descripcion">Descripcion</label>
							</div>
							<div class="inputBox">
								<label for="estado">Estado</label><br><br>
								<select name="estado">
									<option value="Habilitada">Habilitada</option>
									<option value="Inhabilitada">Inhabilitada</option>
								</select><br><br>
							</div>
							<div class="inputBox">
								<input type="text" name="ID_sala" required id="ID_sala">
								<label for="ID_sala">ID sala</label>
							</div>
								<input type="button" value="Cancelar" id="Cancelar" class="cancelar" onclick='location.href="../../Página principal.php";'>
								<input type="submit" value="Registrar" name="Enviar" class="aceptar">
						</form>
					</div>
				</article>
			</section>
		</nav>
<?php
	
	require_once '../../Model/Ubicaciones/Registrar ubicacion.php';

?>
</body>
</html>