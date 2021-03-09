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
<link rel="stylesheet" type="text/css" href="../../css/Consultar_computador.css">
<title>Consultar computadores</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
			<div id="escudo" onclick='location.href="../../Página principal_profesor.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div>
				<br/><br/><br/>
				<h2 class="clear" align="center">Consultar computadores</h2>
				<br/>
				<div class="form">
				<form method="post" action="Consultar computadores.php">
					<label>Consultar por: </label>
					<select name="eleccion">
						<option>Todos</option>
						<option>ID</option>
						<option>Nombre</option>
						<option>Marca</option>
						<option>Tipo</option>
						<option>Fecha de ingreso</option>
						<option>Estado</option>
						<option>ID Sala</option>
						<option>ID Ubicacion</option>
					</select>
					<input type="text" name="busqueda">
					<br>
					<input type="submit" value="Consultar" name="Consulta">
				</form>
				<form action="../../Reportes/Consultar computadores/Crear_pdf.php" method="post">
					<input type="submit" value="Generar reporte" name="Reporte">
				</form>

				<div>
				<br><br><br><br><br>
				
				<table>
					<tr align="center">
						<td>ID_computador</td>
						<td>Nombre</td>
						<td>Marca</td>
						<td>Tipo</td>
						<td>Fecha de ingreso</td>
						<td>Estado</td>
						<td>ID Sala</td>
						<td>ID Ubicacion</td>
					</tr>
				<?php
					require_once '../../Model/Computadores/Consultar computador.php'
				?>
				</table>
					
				<div align="center">
				<form method="post">
					<input type="button" id="Cancelar" value="Volver a la página principal" onclick='location.href="../../Página principal_profesor.php";'>
				</form>
				</div>
			</article>
		</section>
	</nav>
</body>
</html>
