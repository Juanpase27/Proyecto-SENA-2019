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
	<link rel="stylesheet" href="../../css/Actualizar_salas.css">
	<title>Actualizar salas</title>
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
						<form method="post" autocomplete="off">
							<h2 align="center">Actualizar salas</h2><br>
							<label>ID de la sala</label>
							<input type="text" name="ID" id="seleccione" autofocus>
							<input type="submit" name="Enviar" value="Seleccionar sala" class="eleccion">
						</form method="post" autocomplete="off">
						
						
						<form method="post" autocomplete="off" action="../../Model/Salas/Actualizar sala.php">
						<?php
								if(isset($_POST['Enviar'])){
									require_once "../../Controller/conex.php";

									$eleccion = $_POST['ID'];
									
									$existe=0;
		
									$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$eleccion'");
									while($consulta=mysqli_fetch_array($resultados)){
										$existe++;
									}
									
									if($existe==0){
										echo "<script language='javascript'>alert('La sala no existe');</script>";
										
							?>	
									<!--Luego de oprimir el boton. Si la sala no existe-->
										<div class="inputBox">
											<input type="text" name="ID_sala" required id="ID_sala">
											<label for="ID_sala">ID sala</label>
										</div>
										<div class="inputBox">
											<input type="text" name="nombre" required id="nombre">
											<label for="nombre">Nombre</label>
										</div>
										<div class="inputBox">
											<input type="text" name="asignacion" required id="asignacion">
											<label for="asignacion">Asignación</label>
										</div>
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="estado">
												<option value="Habilitada">Habilitada</option>
												<option value="Inhabilitada">Inhabilitada</option>
											</select><br><br>
										</div>
									
							<?php
									}
									else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$eleccion'");
									$consulta = mysqli_fetch_array($resultados);
							
							?>
										<!--Luego de oprimir el boton. Si la sala existe-->
										<div class="inputBox">
											<input type="text" name="ID_sala" required id="ID_sala" value="<?php echo $consulta[0]; ?>">
											<label for="ID_sala">ID sala</label>
										</div>
										<div class="inputBox">
											<input type="text" name="nombre" required id="nombre" value="<?php echo $consulta[1]; ?>">
											<label for="nombre">Nombre</label>
										</div>
										<div class="inputBox">
											<input type="text" name="asignacion" required id="asignacion" value="<?php echo $consulta[2]; ?>">
											<label for="asignacion">Asignación</label>
										</div>

										<!---------------Si la sala esta habilitada--------------->
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="estado">
											<?php
												if($consulta[3]==True){
											?>
												<option value="Habilitada">Habilitada</option>
												<option value="Inhabilitada">Inhabilitada</option>
											<?php
												}
												else{
											?>
										<!---------------Si la sala esta inhabilitada--------------->
												<option value="Inhabilitada">Inhabilitada</option>
												<option value="Habilitada">Habilitada</option>
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
										<input type="text" name="ID_sala" required id="ID_sala">
										<label for="ID_sala">ID sala</label>
									</div>
									<div class="inputBox">
										<input type="text" name="nombre" required id="nombre">
										<label for="nombre">Nombre</label>
									</div>
									<div class="inputBox">
										<input type="text" name="asignacion" required id="asignacion">
										<label for="asignacion">Asignación</label>
									</div>
									<div class="inputBox">
										<label for="estado">Estado</label><br><br>
										<select name="estado">
											<option value="Habilitada">Habilitada</option>
											<option value="Inhabilitada">Inhabilitada</option>
										</select><br><br>
									</div>
							<?php
								}
							?>
								<input type="button" value="Cancelar" id="Cancelar" onclick='location.href="../../Página principal.php";'>
								<!--<input type="submit" value="Eliminar sala" name="Eliminar">-->
								<input type="submit" value="Actualizar" name="Actualizar">
						</form>
					</div>
			</article>
		</section>
	</nav>
<?php
	
	require_once '../../Model/Salas/Actualizar sala.php';

?>
</body>
</html>