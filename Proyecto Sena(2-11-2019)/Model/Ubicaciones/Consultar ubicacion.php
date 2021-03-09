<?php
	if(isset($_POST['Consulta'])){
		require("../../Controller/conex.php");
		$eleccion = $_POST['eleccion'];
		$busqueda = $_POST['busqueda'];

		////////////////////////switch case////////////////////////
						
		switch ($eleccion){
		////////////////////////Todas las ubicaciones////////////////////////
			case "Todas":
				$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
					$consulta['estado']="Habilitada";
				}
				else if($consulta['estado']==False){
					$consulta['estado']="Inhabilitada";
				}
?>

				<tr align="center" class="tr">
					<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
					<td><?php echo $consulta['descripcion'] ?></td>
					<td><?php echo $consulta['estado'] ?></td>
				</tr>

<?php
				}
			break;
			////////////////////////Buscar por ID////////////////////////
			case "ID":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Ubicaciones/Consultar ubicaciones.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitada";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitada";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
							<td><?php echo $consulta['descripcion'] ?></td>
							<td><?php echo $consulta['estado'] ?></td>
						</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Descripcion////////////////////////
			case "Descripcion":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE descripcion = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Ubicaciones/Consultar ubicaciones.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE descripcion = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitada";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitada";
						}
?>
						
						<tr align="center" class="tr">
							<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
							<td><?php echo $consulta['descripcion'] ?></td>
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
						$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE estado = '$busqueda'");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay ubicaciones habilitadas');</script>";
							echo "<script language='javascript'>location.href='../../View/Ubicaciones/Consultar ubicaciones.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE estado = '$busqueda'");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitada";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitada";
								}
?>
						
								<tr align="center" class="tr">
									<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
									<td><?php echo $consulta['descripcion'] ?></td>
									<td><?php echo $consulta['estado'] ?></td>
								</tr>
<?php
							}
						}
					break;
					case "Inhabilitada":
						$busqueda=0;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE estado = '$busqueda'");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('No hay ubicaciones inhabilitadas');</script>";
							echo "<script language='javascript'>location.href='../../View/Ubicaciones/Consultar ubicaciones.php';</script>";
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
									<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
									<td><?php echo $consulta['descripcion'] ?></td>
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