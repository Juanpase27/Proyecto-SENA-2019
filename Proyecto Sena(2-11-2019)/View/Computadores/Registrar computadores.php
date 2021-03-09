<?php

	session_start();
	$usuario=$_SESSION['username'];
	
	if(!isset($usuario)){
		header("location: ../../Index.php");
	}
	else{
		
	}

?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" href="../../css/Registrar_computador.css">
	<title>Registrar computadores</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
				<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div>
				<br/><br/><br/>
					<div class="box">
						<form method="post" autocomplete="off" action="../../Model/Computadores/Registrar computador.php">
							<h2>Registrar computadores y sus datos</h2><br>
							<div class="inputBox">
								<input type="text" name="ID_computador" required value="" autofocus>
								<label for="ID_computador">ID_computador</label>
							</div>
							<div class="inputBox">
								<input type="text" name="Nombre" required id="Nombre">
								<label for="Nombre">Nombre</label>
							</div>
							<div class="inputBox">
								<input type="text" name="Marca" required id="Marca">
								<label for="Marca">Marca</label>
							</div>
							<div class="inputBox">
								<input type="text" name="Tipo" required id="Tipo">
								<label for="Tipo">Tipo</label>
							</div>
							<div class="inputBox">
								<label for="estado">Estado</label><br><br>
								<select name="Estado">
									<option value="Habilitado">Habilitado</option>
									<option value="Inhabilitado">Inhabilitado</option>
								</select><br><br>
							</div>
							<div class="inputBox">
								<label for="fecha">Fecha de ingreso</label>
								<br><br>
								<input type="date" name="fecha" required id="fecha">
							</div>
							<div class="inputBox">
								<input type="text" name="ID_sala" required id="ID_sala">
								<label for="ID_sala">ID sala</label>
							</div>
							<div class="inputBox">
								<input type="text" name="ID_ubicacion" required id="ID_ubicacion">
								<label for="ID_ubicacion">ID ubicacion</label>
							</div>
								<input type="button" value="Cancelar" id="Cancelar" class="cancelar" onclick='location.href="../../../Página principal.php";'>
								<input type="submit" value="Registrar" name="Enviar">
						</form>
					</div>
				</article>
			</section>
		</nav>
	<?php
	
		require_once '../../Model/Computadores/Registrar computador.php';
	
	?>
</body>
</html>