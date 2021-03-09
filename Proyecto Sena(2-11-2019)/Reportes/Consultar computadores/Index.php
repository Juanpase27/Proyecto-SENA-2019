<!DOCTYPE html>
<html>
<body>
				<h2 class="clear" align="center">Consultar computadores</h2>
				<br/>
				
				<table border=1 align=center>
					<tr align="center" añign=center>
						<td>ID_computador</td>
						<td>Nombre</td>
						<td>Marca</td>
						<td>Tipo</td>
						<td>Fecha de ingreso</td>
						<td>Estado</td>
						<td>ID sala</td>
						<td>ID ubicación</td>
						<td>ID usuario</td>
					</tr>
				
				<?php
						require("../../Controller/conex.php");
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
										<td><?php echo $consulta['ID_sala'] ?></td>
										<td><?php echo $consulta['ID_ubicacion'] ?></td>
										<td><?php echo $consulta['ID_usuario'] ?></td>
									</tr>

				<?php
								}
?>
				</table>
</body>
</html>