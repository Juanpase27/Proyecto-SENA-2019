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
	<link rel="stylesheet" href="../../css/Actualizar_ubicaciones_1.css">
	<title>Actualizar ubicacion</title>
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
					<h2 align="center">Actualizar ubicación</h2>
						<form method="post" autocomplete="off">
							<label>ID de la ubicacion</label>
							<input type="text" name="ID" id="seleccione" autofocus>
							<input type="submit" name="Enviar" value="Seleccionar ubicacion" class="eleccion">
						</form method="post" autocomplete="off">
						
						
						<form method="post" autocomplete="off" action="../../Model/Ubicaciones/Actualizar ubicacion.php">
							<?php
								if(isset($_POST['Enviar'])){
									require_once "../../Controller/conex.php";
									
									$eleccion = $_POST['ID'];
									
									$existe=0;
		
									$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$eleccion'");
									while($consulta=mysqli_fetch_array($resultados)){
										$existe++;
									}
									
									if($existe==0){
										echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
										echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
									}
									else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$eleccion'");
									$consulta = mysqli_fetch_array($resultados);
							
							?>
									<!--Luego de oprimir el boton. Si la ubicacion existe-->
										<div class="inputBox">
											<input type="text" name="ID_ubicacion" required id="ID_laboratorio" value="<?php echo $consulta[0]; ?>">
										</div>
										<div class="inputBox">
											<input type="text" name="descripcion" required id="Descripcion" value="<?php echo $consulta[1]; ?>">
										</div>
							

										<!---------------Si la ubicacion esta habilitada--------------->
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="estado">
											<?php
												if($consulta[2]==True){
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
										<div class="inputBox">
											<input type="text" name="ID_sala" required id="ID_sala" value="<?php echo $consulta[3]; ?>">
											<label for="ID_sala">ID sala</label>
										</div>
							
							<?php
									}
								}
								else{
							?>
										<!---------------Si no se oprime el boton--------------->
										<div class="inputBox">
											<input type="text" name="ID_ubicacion" required id="ID_ubicacion">
											<label for="ID_ubicación">ID_ubicación</label>
										</div>
										<div class="inputBox">
											<input type="text" name="Descripcion" required id="descripcion">
											<label for="descripcion">Descripción</label>
										</div>
										<div class="inputBox">
											<label for="estado">Estado</label><br><br>
											<select name="estado">
												<option value="Habilitada">Habilitada</option>
												<option value="Inhabilitada">Inhabilitada</option>
											</select><br><br>
										</div>
										<div class="inputBox">
											<input type="text" name="ID_sala" required id="ID_sala">
												<label for="ID_sala">ID sala</label>
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
	
	require_once '../../Model/Ubicaciones/Actualizar ubicacion.php';
	
?>

</body>
</html>