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
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/Pagina principal_1.css">
	<title>Página Principal</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
				<div id="escudo" onclick='location.href="Página principal_profesor.php";'>
				</div>
				<div id="titulo">
					<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
				</div>
				<div id="caja_del_menu_desplegable">
					<ul class="menu">
						<li><a href="#">Computadores</a>
							<ul class="desplegable_1_profesor">
								<li><a href="View/Computadores/Actualizar computadores_profesor.php">Actualizar computadores</a></li>
								<li><a href="View/Computadores/Consultar computadores_profesor.php">Consultar computadores</a></li>
							</ul>
						</li>
						<li><a href="#">Estudiantes</a>
							<ul class="desplegable_2_profesor">
								<li><a href="View/Estudiantes/Consultar estudiantes_profesor.php">Consultar estudiantes</a></li>
							</ul>
						</li>
						<li><a href="index.php">Cerrar sesión</a></li>
						</ul>
					</div>
			</article>
		</section>
	</nav>


</body>
</html>
