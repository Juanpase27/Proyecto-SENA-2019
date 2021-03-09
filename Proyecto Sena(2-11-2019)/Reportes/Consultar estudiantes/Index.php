<!DOCTYPE html>
<html>
<body id="pagina_principal">
				<h2 class="clear" align="center">Consultar estudiantes</h2>
				<br/>
				<table border=1 align=center>
					<tr align="center">
						<td>ID_estudiante</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Curso</td>
						<td>ID_Computador</td>
						<td>Fecha asignación computador</td>
						<td>Estado</td>
						<td>ID usuario</td>
					</tr>
				
				<!-------------------------Todos los estudiantes------------------------>
				<?php
						require("../../Controller/conex.php");

							////////////////////////Todos los estudiantes////////////////////////

								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes");
								while($consulta = mysqli_fetch_array($resultados)){
				?>
						
									<tr align="center" class="tr">
										<td><?php echo $consulta['ID_estudiante'] ?></a></td>
										<td><?php echo $consulta['nombre_estudiante'] ?></td>
										<td><?php echo $consulta['apellido_estudiante'] ?></td>
										<td><?php echo $consulta['curso'] ?></td>
										<td><?php echo $consulta['ID_computador'] ?></td>
										<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
										<td><?php echo $consulta['estado'] ?></td>
										<td><?php echo $consulta['ID_usuario'] ?></td>
									</tr>

				<?php
								}
				?>
				</table>
				
</body>
</html>