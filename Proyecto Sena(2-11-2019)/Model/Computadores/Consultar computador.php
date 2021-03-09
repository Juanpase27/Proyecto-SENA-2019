<?php
	if(isset($_POST['Consulta'])){
		require("../../Controller/conex.php");
		$eleccion = $_POST['eleccion'];
		$busqueda = $_POST['busqueda'];
						
		////////////////////////switch case////////////////////////
						
		switch ($eleccion){
			////////////////////////Todos los computadores////////////////////////
			case "Todos":
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitado";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitado";
					}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
								}
			break;
			////////////////////////Buscar por el laboratorio 1////////////////////////
			case "Laboratorio 1":
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador like '0%'");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitado";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitado";
					}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
			break;
			////////////////////////Buscar por el laboratorio 2////////////////////////
			case "Laboratorio 2":
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador like 'B%'");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitado";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitado";
					}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
			break;
			////////////////////////Buscar por el laboratorio 3////////////////////////
			case "Laboratorio 3":
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador like 'C%'");
				while($consulta = mysqli_fetch_array($resultados)){
					if($consulta['estado']==True){
						$consulta['estado']="Habilitado";
					}
					else if($consulta['estado']==False){
						$consulta['estado']="Inhabilitado";
					}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
			break;
			////////////////////////Buscar por ID////////////////////////
			case "ID":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El computador no existe');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Nombre////////////////////////
			case "Nombre":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE nombre_computador = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE nombre_computador = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
										}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Marca////////////////////////
			case "Marca":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE marca = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE marca = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
					
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Tipo////////////////////////
			case "Tipo":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE tipo = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE tipo = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
				
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Fecha de ingreso////////////////////////
			case "Fecha de ingreso":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE fecha_de_ingreso = '$busqueda'");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE fecha_de_ingreso = '$busqueda'");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
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
						$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE estado = $busqueda");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
							echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE estado = $busqueda");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitado";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitado";
								}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
							}
						}
					break;
					case "Inhabilitado":
						$busqueda=0;
						$existe=0;
						$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE estado = $busqueda");
						while($consulta = mysqli_fetch_array($resultados)){
							$existe++;
						}
						if($existe==0){
							echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
							echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
						}
						else{
							$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE estado = $busqueda");
							while($consulta = mysqli_fetch_array($resultados)){
								if($consulta['estado']==True){
									$consulta['estado']="Habilitado";
								}
								else if($consulta['estado']==False){
									$consulta['estado']="Inhabilitado";
								}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>

<?php
							}
						}
					break;
				}
			break;
			////////////////////////Buscar por Sala////////////////////////
			case "ID Sala":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_sala = $busqueda");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_sala = $busqueda");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
			<td><?php echo $consulta['ID_sala'] ?></td>
			<td><?php echo $consulta['ID_ubicacion'] ?></td>
		</tr>

<?php
					}
				}
			break;
			////////////////////////Buscar por Ubicacion////////////////////////
			case "ID Ubicacion":
				$existe=0;
				$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_ubicacion = $busqueda");
				while($consulta = mysqli_fetch_array($resultados)){
					$existe++;
				}
				if($existe==0){
					echo "<script language='javascript'>alert('El o los computadores no existen');</script>";
					echo "<script language='javascript'>location.href='../../View/Computadores/Consultar computadores.php';</script>";
				}
				else{
					$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_ubicacion = $busqueda");
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
?>
						
		<tr align="center" class="tr">
			<td><?php echo $consulta['ID_computador'] ?></td>
			<td><?php echo $consulta['nombre_computador'] ?></td>
			<td><?php echo $consulta['marca'] ?></td>
			<td><?php echo $consulta['tipo'] ?></td>
			<td><?php echo $consulta['fecha_de_ingreso'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
			<td><?php echo $consulta['ID_sala'] ?></td>
			<td><?php echo $consulta['ID_ubicacion'] ?></td>
		</tr>

<?php
					}
				}
			break;
		}
	}
?>