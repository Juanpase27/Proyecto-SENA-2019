<?php
	if(isset($_POST['Consulta'])){
		require("../../Controller/conex.php");
		$eleccion = $_POST['eleccion'];
		$busqueda = $_POST['busqueda'];

		////////////////////////switch case////////////////////////
						
		switch ($eleccion){
		////////////////////////Todos los usuarios////////////////////////
			case "Todos":
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitado";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitado";
					}
	?>
	
					<tr align="center" class="tr">
						<td><?php echo $consulta['ID_usuario'] ?></a></td>
						<td><?php echo $consulta['nombre_usuario'] ?></td>
						<td><?php echo $consulta['apellido_usuario'] ?></td>
						<td><?php echo $consulta['usuario'] ?></td>
						<td><?php echo $consulta['password'] ?></td>
						<td><?php echo $consulta['cargo'] ?></td>
						<td><?php echo $consulta['estado'] ?></td>
					</tr>
	
	<?php
					}
			break;
			////////////////////////Buscar por ID////////////////////////
			case "ID":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Nombre////////////////////////
			case "Nombre":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE nombre_usuario = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE nombre_usuario = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Apellido////////////////////////
			case "Apellido":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE apellido_usuario = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE apellido_usuario = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Usuario////////////////////////
			case "Usuario":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE usuario = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE usuario = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Password////////////////////////
			case "Password":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE password = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE password = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Cargo////////////////////////
			case "Cargo":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE cargo = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El usuario no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE cargo = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_usuario'] ?></a></td>
							<td><?php echo $consulta['nombre_usuario'] ?></td>
							<td><?php echo $consulta['apellido_usuario'] ?></td>
							<td><?php echo $consulta['usuario'] ?></td>
							<td><?php echo $consulta['password'] ?></td>
							<td><?php echo $consulta['cargo'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Estado////////////////////////
			case "Estado":
				switch($busqueda){
					case "Habilitado":
						$busqueda=1;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE estado = '$busqueda'");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay usuarios habilitados');</script>";
							echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE estado = '$busqueda'");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitado";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitado";
								}
?>
						
								<tr align="center" class="tr">
									<td><?php echo $consulta['ID_usuario'] ?></a></td>
									<td><?php echo $consulta['nombre_usuario'] ?></td>
									<td><?php echo $consulta['apellido_usuario'] ?></td>
									<td><?php echo $consulta['usuario'] ?></td>
									<td><?php echo $consulta['password'] ?></td>
									<td><?php echo $consulta['cargo'] ?></td>
									<td><?php echo $consulta['estado'] ?></td>
								</tr>
<?php								
							}
						}
					break;
					case "Inhabilitado":
						$busqueda=0;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE estado = '$busqueda'");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay usuarios inhabilitados');</script>";
							echo "<script language='javascript'>location.href='../../View/Usuarios/Consultar Usuarios.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE estado = '$busqueda'");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitado";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitado";
								}
?>
						
								<tr align="center" class="tr">
									<td><?php echo $consulta['ID_usuario'] ?></a></td>
									<td><?php echo $consulta['nombre_usuario'] ?></td>
									<td><?php echo $consulta['apellido_usuario'] ?></td>
									<td><?php echo $consulta['usuario'] ?></td>
									<td><?php echo $consulta['password'] ?></td>
									<td><?php echo $consulta['cargo'] ?></td>
									<td><?php echo $consulta['estado'] ?></td>
								</tr>

<?php
							}
						}
					break;
				}
			break;
		}
	}
?>