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
	<meta charset="utf-8">
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" type="text/css" href="css/pagina principal_1.css">
	<title>Página Principal</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
				<div id="escudo" onclick='location.href="Página principal.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div>
				<div id="caja_del_menu_desplegable">
					<ul class="menu">
						<li><a href="#">Computadores</a>
							<ul class="desplegable_1_administrador">
								<li><a href="View/Computadores/Registrar computadores.php">Registrar computadores</a></li>
								<li><a href="View/Computadores/Actualizar computadores.php">Actualizar computadores</a></li>
								<li><a href="View/Computadores/Consultar computadores.php">Consultar computadores</a></li>
							</ul>
						</li>
						<li><a href="#">Estudiantes</a>
							<ul class="desplegable_2_administrador">
								<li><a href="View/Estudiantes/Registrar estudiantes.php">Registrar estudiantes</a></li>
								<li><a href="View/Estudiantes/Actualizar estudiantes.php">Actualizar estudiantes</a></li>
								<li><a href="View/Estudiantes/Consultar estudiantes.php">Consultar estudiantes</a></li>
							</ul>
						</li>
						<li><a href="#">Salas</a>
							<ul class="desplegable_3_administrador">
								<li><a href="View/Salas/Registrar salas.php">Registrar salas</a></li>
								<li><a href="View/Salas/Actualizar salas.php">Actualizar salas</a></li>
								<li><a href="View/Salas/Consultar salas.php">Consultar salas</a></li>
							</ul>
						</li>
						
						<li><a href="#">Ubicaciones</a>
							<ul class="desplegable_4_administrador">
								<li><a href="View/Ubicaciones/Registrar ubicaciones.php">Registrar ubicaciones</a></li>
								<li><a href="View/Ubicaciones/Actualizar ubicaciones.php">Actualizar ubicaciones</a></li>
								<li><a href="View/Ubicaciones/Consultar ubicaciones.php">Consultar ubicaciones</a></li>
							</ul>
						</li>
						<li><a href="#" aling="center">Usuarios</a>
							<ul class="desplegable_5_administrador">
								<li><a href="View/Usuarios/Registrar usuarios.php">Registrar usuarios</a></li>
								<li><a href="View/Usuarios/Actualizar usuario.php">Actualizar usuarios</a></li>
								<li><a href="View/Usuarios/Consultar usuarios.php">Consultar usuarios</a></li>
							</ul>
						</li>
						<li><a href="Login/Salir.php">Cerrar sesión</a></li>
					</ul>
				</div>
			</article>
		</section>
	</nav>
</body>
</html>