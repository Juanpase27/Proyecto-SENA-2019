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
	<link rel="stylesheet" href="../../css/actualizar_usuario.css">
	<title>Actualizar usuarios</title>
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
					<h2 align="center">Actualizar usuarios y sus datos</h2>
						<form method="post" autocomplete="off" class="form1">
							<label>ID del usuario</label>
							<input type="text" name="ID" id="seleccione" autofocus>
							<input type="submit" name="Enviar" value="Seleccionar usuario" class="eleccion">
						</form method="post" autocomplete="off">
						
						
						<form method="post" autocomplete="off" class="form2" action="../../Model/Usuarios/Actualizar usuario.php">
							<?php
								if(isset($_POST['Enviar'])){

									require_once "../../Controller/conex.php";

									$eleccion = $_POST['ID'];
									
									$existe=0;
		
									$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$eleccion'");
									while($consulta=mysqli_fetch_array($resultados)){
										$existe++;
									}
									
									if($existe==0){
										echo "<script language='javascript'>alert('El usuario no existe');</script>";
										echo "<script language='javascript'>location.href='Actualizar usuarios.php';</script>";
							
									}
									else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$eleccion'");
									$consulta = mysqli_fetch_array($resultados);
							
							?>
							
										<div class="inputBox">
											<input type="text" name="ID_usuario" required id="ID_usuario" value="<?php echo $consulta[0]; ?>">
											<label for="ID_usuario">ID usuario</label>
										</div>
										
										<div class="inputBox">
											<input type="text" name="nombre" required id="nombre" value="<?php echo $consulta[1]; ?>">
											<label for="nombre">Nombre</label>
										</div>
										<div class="inputBox">
											<input type="text" name="apellido" required id="apellido" value="<?php echo $consulta[2]; ?>">
											<label for="apellido">Apellido</label>
										</div>
										<div class="inputBox">
											<input type="text" name="usuario" required id="usuario" value="<?php echo $consulta[3]; ?>">
											<label for="usuario">Nombre usuario</label>
										</div>
										<div class="inputBox">
											<input type="text" name="password" required id="password" value="<?php echo $consulta[4]; ?>">
											<label for="password">Password</label>
										</div>
										<div class="inputBox">
											<label for="cargo">Cargo</label><br><br>
											<select name="cargo">
												<?php
													if($consulta[5]=="Administrador"){
												?>
													<option value="Administrador">Administrador</option>
													<option value="Profesor">Profesor</option>
												<?php
													}
													else{
												?>
													<option value="Profesor">Profesor</option>
													<option value="Administrador">Administrador</option>
												<?php
													}
												?>
												
											</select><br><br>
										</div>
										<!---------------Si el usuario esta habilitado--------------->
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
										<!---------------Si el usuario esta inhabilitado--------------->
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
										<input type="text" name="ID_usuario" required id="ID_usuario">
										<label for="ID_usuario">ID del usuario</label>
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
										<input type="text" name="usuario" required id="usuario">
										<label for="usuario">Nombre usuario</label>
									</div>
									<div class="inputBox">
										<input type="text" name="password" required id="password">
										<label for="password">Password</label>
									</div>
									<div class="inputBox">
										<label for="cargo">Cargo</label><br><br>
										<select name="cargo">
											<option value="Administrador">Administrador</option>
											<option value="Profesor">Profesor</option>
										</select><br><br>
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
								<!--<input type="submit" value="Eliminar usuario" name="Eliminar" class="submit">-->
								<input type="submit" value="Actualizar" name="Actualizar" class="submit">
						</form>
					</div>
			</article>
		</section>
	</nav>
<?php
	
	require_once '../../Model/Usuarios/Actualizar usuario.php';

?>
</body>
</html>