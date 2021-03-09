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
<link rel="stylesheet" type="text/css" href="../../css/Consultar_sala.css">
<title>Consultar salas</title>
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
				<h2 class="clear" align="center">Consultar salas</h2>
				<br/>
				<form method="post" action="Consultar salas.php" >
					<label>Consultar por: </label>
					<select name="eleccion">
						<option>Todas</option>
						<option>ID</option>
						<option>Nombre</option>
						<option>Asignacion</option>
						<option>Estado</option>
					</select>
					<input type="text" name="busqueda">
					<br>
					<input type="submit" value="Consultar" name="Consulta">
				</form>
				<br>
				<form action="../../Reportes/Consultar salas/Crear_pdf.php">
					<input type="submit" value="Generar reporte" name="Reporte">
				</form>
				<table>
					<tr align="center">
						<td>ID_sala</td>
						<td>Nombre</td>
						<td>Asignacion</td>
						<td>Estado</td>
					</tr>
				<?php
					require_once '../../Model/Salas/Consultar sala.php';
				?>
					</table>
				<div align="center">
				<form method="post">
					<input type="button" id="Cancelar" value="Volver a la página principal" onclick='location.href="../../Página principal.php";'>
				</form>
				</div>
			</article>
		</section>
	</nav>
</body>
</html>