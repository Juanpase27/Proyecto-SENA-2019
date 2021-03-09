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
	<meta charset="utf-8"/>
	<meta name="author" content="Juan Pablo Segura Mejía y Sebastian Moreno Rojas">
	<link rel="stylesheet" type="text/css" href="../../css/Actualizar computador.css">
	<title>Actualizar computadores</title>
</head>
<body id="pagina_principal">
	<nav>
		<section>
			<article>
				<header>
				<div id="escudo" onclick='location.href="../../Página principal.php";'>
				</div>
					<div id="titulo">
						<p>Sistema de Información para la gestión y organización de equipos de la sala de informática de Bachillerato del colegio "Instituto San Ignacio de Loyola"</p>
					</div>
				</header>
						<div class="box">
							<form method="post" autocomplete="off">
								<h2>Actualizar computadores y sus datos</h2><br/>
								<label>ID del computador</label>
								<input type="text" name="ID" id="seleccione" autofocus>
								<input type="submit" name="Enviar" value="Seleccionar computador" class="eleccion">
							</form>
						
							<form method="post" autocomplete="off" action="../../Model/Computadores/Actualizar computador.php">
							<?php
									if(isset($_POST['Enviar'])){
										
										$eleccion = $_POST['ID'];
										
										$existe=0;
										require("../../Controller/conex.php");
										$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$eleccion'");
										while($consulta=mysqli_fetch_array($resultados)){
											$existe++;
										}
										
										if($existe==0){
											echo "<script language='javascript'>alert('El computador no existe');</script>";
											echo "<script language='javascript'>location.href='Actualizar computadores.php';</script>";
								
										}
										
										else{
										
											$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$eleccion'");
											$consulta = mysqli_fetch_array($resultados);
								?>
										<!--Luego de oprimir el boton. Si el computador existe-->
											<div class="inputBox">
												<input type="text" name="ID_computador" required id="ID_computador" value="<?php echo $consulta[0]; ?>">
												<label for="ID_computador">ID computador</label>
											</div>
											<div class="inputBox">
												<input type="text" name="nombre" required id="nombre" value="<?php echo $consulta[1]?>">
												<label for="nombre">Nombre</label>
											</div>
											<div class="inputBox">
												<input type="text" name="marca" required id="marca" value="<?php echo $consulta[2]?>">
												<label for="marca">Marca</label>
											</div>
											<div class="inputBox">
												<input type="text" name="tipo" required id="tipo" value="<?php echo $consulta[3]?>">
												<label for="tipo">Tipo</label>
											</div>
											
											<!---------------Si el computador esta habilitado--------------->
											<div class="inputBox">
												<label for="estado">Estado</label><br><br>
												<select name="estado">
												<?php
													if($consulta[5]==True){
												?>
													<option value="Habilitado">Habilitado</option>
													<option value="Inhabilitado">Inhabilitado</option>
												<?php
													}
													else{
												?>
											<!---------------Si el computador está inhabilitado--------------->
													<option value="Inhabilitado">Inhabilitado</option>
													<option value="Habilitado">Habilitado</option>
												<?php
													}
												?>
												</select><br><br>
											</div>
											<div class="inputBox">
												<input type="date" name="fecha" required id="fecha" value="<?php echo $consulta[4]?>">
												<!--<label for="fecha">Fecha de ingreso AA/MM/DD</label>-->
											</div>
											<div class="inputBox">
												<input type="text" name="ID_sala" required id="ID_sala" value="<?php echo $consulta[6]?>">
												<label for="ID_sala">ID sala</label>
											</div>
											<div class="inputBox">
												<input type="text" name="ID_ubicacion" required id="ID_ubicacion" value="<?php echo $consulta[7]?>">
												<label for="ID_ubicacion">ID ubicacion</label>
											</div>
											<div class="inputBox">
												<input type="text" name="ID_usuario" required id="ID_usuario" value="<?php echo $consulta[8]?>">
												<label for="ID_usuario">ID usuario</label>
											</div>
											<div>
												<label for="">Datos adicionales:</label>
												<textarea name="Datos" id="dav tos"></textarea>
											</div>
									
								
								<?php
										}
									}
									else{
								?>
									<!---------------Si no se oprime el boton--------------->
										<div class="inputBox">
											<input type="text" name="ID_computador" required id="ID_computador">
											<label for="ID_computador">ID computador</label>
										</div>
										<div class="inputBox">
											<input type="text" name="nombre" required id="nombre">
											<label for="nombre">Nombre</label>
										</div>
										<div class="inputBox">
											<input type="text" name="marca" required id="marca">
											<label for="marca">Marca</label>
										</div>
										<div class="inputBox">
											<input type="text" name="tipo" required id="tipo">
											<label for="tipo">Tipo</label>
										</div>
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="Estado">
												<option value="Habilitado">Habilitado</option>
												<option value="Inhabilitado">Inhabilitado</option>
											</select><br><br>
										</div>
										<div class="inputBox">
											<label for="Fecha_ingreso">Fecha de ingreso</label>
											<br><br>
											<input type="date" name="fecha" required id="fecha">
										</div>
										<div class="inputBox">
											<input type="text"  required id="ID_sala">
											<label for="ID_sala">ID sala</label>
										</div>
										<div class="inputBox">
											<input type="text"  required id="ID_ubicacion">
											<label for="ID_ubicacion">ID ubicacion</label>
										</div>
										<div class="inputBox">
											<input type="text"  required id="ID_usuario">
											<label for="ID_usuario">ID usuario</label>
										</div>
										
										<div>
											<label for="">Datos adicionales:</label>
											<textarea name="Datos" id="dav tos"></textarea>
										</div>
								<?php
									}
								?>
							
								<input type="button" value="Cancelar" id="Cancelar" onclick='location.href="../../Página principal.php";'>
								<!--<input type="submit" value="Eliminar equipo" name="Eliminar">-->
								<input type="submit" value="Actualizar" name="Actualizar">
					</form>
				</div>
			</article>
		</section>
	</nav>
<?php
	
	require_once '../../Model/Computadores/Actualizar computador.php';

?>
</body>
</html>