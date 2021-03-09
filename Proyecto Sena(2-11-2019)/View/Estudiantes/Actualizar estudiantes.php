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
	<link rel="stylesheet" href="../../css/Actualizar_estudiantes_1.css">
	<title>Actualizar estudiantes</title>
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
					<div class="box">
						<form method="post" autocomplete="off">
						<h2 align="center">Actualizar estudiantes y sus datos</h2><br>
							<label>ID del estudiante</label>
							<input type="text" name="ID" id="seleccione" required id="ID" autofocus>
							<input type="submit" name="Enviar" value="Seleccionar estudiante" class="eleccion">
						</form>
						
						<form method="post" autocomplete="off" action="../../Model/Estudiantes/Actualizar estudiante.php">
						<?php
								if(isset($_POST['Enviar'])){
									require_once "../../Controller/conex.php";

									$eleccion = $_POST['ID'];
									
									$existe=0;
									
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$eleccion'");
									while($consulta=mysqli_fetch_array($resultados)){
										$existe++;
									}
									
									if($existe==0){
										echo "<script language='javascript'>alert('El estudiante no existe');</script>";
										echo "<script language='javascript'>location.href='Actualizar estudiantes.php';</script>";
									}
									else{
										$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$eleccion'");
										$consulta = mysqli_fetch_array($resultados);
							?>
							
									<!--Luego de oprimir el boton. Si el estudiante existe-->
										<div class="inputBox">
											<input type="text" name="ID_estudiante" required id="ID_estudiante" value="<?php echo $consulta[0]; ?>">
											<label for="ID_estudiante">ID estudiante</label>
										</div>
										<div class="inputBox">
											<input type="text" name="nombre" required id="nombre" value="<?php echo $consulta[1]?>">
											<label for="nombre">Nombre</label>
										</div>
										<div class="inputBox">
											<input type="text" name="apellido" required id="apellido" value="<?php echo $consulta[2]?>">
											<label for="apellido">Apellido</label>
										</div>
										<div class="inputBox">
											<input type="text" name="curso" required id="curso" value="<?php echo $consulta[3]?>">
											<label for="curso">Curso</label>
										</div>
										<div class="inputBox">
											<input type="text" name="ID_computador" required id="ID_computador" value="<?php echo $consulta[4]?>">
											<label for="ID_computador">ID del computador</label>
										</div>
										<div class="inputBox">
											Fecha asignación computador
											<br><br>
											<input type="date" name="fecha" required id="fecha" value="<?php echo $consulta[5]?>">
										</div>

										<!---------------Si el estudiante esta habilitado--------------->
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="estado">
											<?php
												if($consulta[6]==True){
											?>
												<option value="Habilitado">Habilitado</option>
												<option value="Inhabilitado">Inhabilitado</option>
											<?php
												}
												else{
											?>
										<!---------------Si el estudiante está inhabilitado--------------->
												<option value="Inhabilitado">Inhabilitado</option>
												<option value="Habilitado">Habilitado</option>
											<?php
												}
											?>
											</select><br><br>
										</div>
								
							<?php
									}
								}
								else{
							?>
									<div class="inputBox">
										<input type="text" name="ID_estudiante" required id="ID_estudiante">
										<label for="ID_estudiante">ID estudiante</label>
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
										<label for="curso">Curso</label>
									</div>
									<div class="inputBox">
										<input type="text" name="ID_computador" required id="ID_computador">
										<label for="ID_computador">ID del computador</label>
									</div>
									<div class="inputBox">
										Fecha asignación computador
										<br><br>
										<input type="fecha" name="fecha" required id="fecha">
									</div>
									<div class="inputBox">
										<label for="estado">Estado</label><br><br>
										<select name="estado">
											<option value="Habilitado">Habilitado</option>
											<option value="Inhabilitado">Inhabilitado</option>
										</select><br><br>
									</div>
							<?php
								}
							?>
						

							
							<input type="button" value="Cancelar" id="Cancelar" class="cancelar" onclick='location.href="../../Página principal.php";'>
							<!--<input type="submit" value="Eliminar estudiante" name="Eliminar" class="submit">-->
							<input type="Submit" value="Actualizar" name="Actualizar" class="submit">
					</form>
				</div>
			</article>
		</section>
	</nav>	
<?php
	
	require_once '../../Model/Estudiantes/Actualizar estudiante.php';

?>
</body>
</html>