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
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="../../css/Consultar_computadores.css">
<title>Consultar computadores</title>
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
				<h2 class="clear" align="center">Reporte computadores</h2>
				<br/>
				<div class="form">
				<form method="post" action="../../Reportes/Consultar computadores/Crear_pdf.php">
					<label>Generar reporte por: </label>
					<select name="eleccion">
						<option>Todos</option>
						<option>Laboratorio 1</option>
						<option>Laboratorio 2</option>
						<option>Laboratorio 3</option>
						<option>ID</option>
						<option>Nombre</option>
						<option>Marca</option>
						<option>Tipo</option>
						<option>Fecha de ingreso</option>
						<option>Estado</option>
					</select>
					<input type="text" name="busqueda">
					<br>
					<input type="submit" value="Generar reporte" name="Reporte">
				</form>
				</div>
			</article>
		</section>
	</nav>
</body>
</html>
