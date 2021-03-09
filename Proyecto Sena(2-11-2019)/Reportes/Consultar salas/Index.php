<!DOCTYPE html>
<html>
<body>
				<h2 class="clear" align="center">Consultar salas</h2>
				<br/>

				<table border=1 align=center>
					<tr align="center">
						<td>ID_sala</td>
						<td>Nombre</td>
						<td>Asignacion</td>
						<td>Estado</td>
					</tr>
					<?php
					require("../../Controller/conex.php");
					$resultados = mysqli_query($mysqli, "SELECT * FROM salas");
					
					while($consulta = mysqli_fetch_array($resultados)){
						
					
					?>
					<tr align="center" class="tr">
						<td><?php echo $consulta['ID_sala'] ?></td>
						<td><?php echo $consulta['nombre'] ?></td>
						<td><?php echo $consulta['asignacion'] ?></td>
						<td><?php echo $consulta['estado'] ?></td>
					</tr>
					<?php
					}
					?>
				</table>
</body>
</html>