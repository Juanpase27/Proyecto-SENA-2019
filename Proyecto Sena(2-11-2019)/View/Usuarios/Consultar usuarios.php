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
<link rel="stylesheet" type="text/css" href="../../css/Consultar_usuario.css">
<title>Consultar usuarios</title>
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
				<h2 class="clear" align="center">Consultar usuarios</h2>
				<br/>
				<form method="post" action="Consultar usuarios.php" >
					<label>Consultar por: </label>
					<select name="eleccion">
						<option>Todos</option>
						<option>ID</option>
						<option>Nombre</option>
						<option>Apellido</option>
						<option>Usuario</option>
						<option>Password</option>
						<option>Cargo</option>
						<option>Estado</option>
					</select>
					<input type="text" name="busqueda">
					<br>
					<input type="submit" value="Consultar" name="Consulta">
				</form>
				<br>
				<form action="../../Reportes/Consultar usuarios/Crear_pdf.php" method="post">
					<input type="submit" value="Generar reporte" name="Reporte">
				</form>
				<table>
					<tr align="center">
						<td>ID</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Usuario</td>
						<td>Password</td>
						<td>Cargo</td>
						<td>Estado</td>
					</tr>
					<?php
						require_once('../../Model/Usuarios/Consultar usuario.php');
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