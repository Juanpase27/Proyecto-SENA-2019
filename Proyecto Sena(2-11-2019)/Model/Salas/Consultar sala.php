<?php
	if(isset($_POST['Consulta'])){
		require("../../Controller/conex.php");
		$eleccion = $_POST['eleccion'];
		$busqueda = $_POST['busqueda'];
					
		////////////////////////switch case////////////////////////
						
		switch ($eleccion){
			////////////////////////Todas las salas////////////////////////
			case "Todas":
				$resultados = mysqli_query($mysqli, "SELECT * FROM salas");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitada";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitada";
					}
?>
		
					<tr align="center" class="tr">
						<td><?php echo $consulta['ID_sala'] ?></a></td>
						<td><?php echo $consulta['nombre'] ?></td>
						<td><?php echo $consulta['asignacion'] ?></td>
						<td><?php echo $consulta['estado'] ?></td>
					</tr>

<?php
				}
			break;
			////////////////////////Buscar por ID////////////////////////
			case "ID":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('La sala no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Salas/Consultar salas.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_sala'] ?></a></td>
							<td><?php echo $consulta['nombre'] ?></td>
							<td><?php echo $consulta['asignacion'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Nombre////////////////////////
			case "Nombre":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE nombre = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('La sala no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Salas/Consultar salas.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE nombre = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_sala'] ?></a></td>
							<td><?php echo $consulta['nombre'] ?></td>
							<td><?php echo $consulta['asignacion'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Asignacion////////////////////////
			case "Asignacion":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE asignacion = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('La sala no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Salas/Consultar salas.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE asignacion like '%$busqueda%'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_sala'] ?></a></td>
							<td><?php echo $consulta['nombre'] ?></td>
							<td><?php echo $consulta['asignacion'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Estado////////////////////////
			case "Estado":
				switch($busqueda){
					case "Habilitada":
						$busqueda=1;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE estado = $busqueda");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay salas habilitadas');</script>";
							echo "<script language='javascript'>location.href='../../View/Salas/Consultar salas.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE estado = $busqueda");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitada";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitada";
								}
?>
						
								<tr align="center" class="tr">
									<td><?php echo $consulta['ID_sala'] ?></a></td>
									<td><?php echo $consulta['nombre'] ?></td>
									<td><?php echo $consulta['asignacion'] ?></td>
									<td><?php echo $consulta['estado'] ?></td>
								</tr>
<?php
							}
						}
					break;
					case "Inhabilitada":
						$busqueda=0;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE estado = $busqueda");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay salas inhabilitadas');</script>";
							echo "<script language='javascript'>location.href='../../View/Salas/Consultar salas.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE estado = $busqueda");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitada";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitada";
								}
?>
						
								<tr align="center" class="tr">
									<td><?php echo $consulta['ID_sala'] ?></a></td>
									<td><?php echo $consulta['nombre'] ?></td>
									<td><?php echo $consulta['asignacion'] ?></td>
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