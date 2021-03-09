<!DOCTYPE html>
<html>
<body id="pagina_principal">
				<h2 class="clear" align="center">Consultar ubicaciones</h2>
				<br/>

				<table border=1 align=center>
					<tr align="center">
						<td>ID_ubicacion</td>
						<td>Descripcion</td>
						<td>Estado</td>
						<td>ID sala</td>
					</tr>
					<?php
					require("../../Controller/conex.php");
					$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion");
					
					while($consulta = mysqli_fetch_array($resultados)){
						if($consulta['estado']==True){
							$consulta['estado']="Habilitado";
						}
						else if($consulta['estado']==False){
							$consulta['estado']="Inhabilitado";
						}
						
					
					?>
					<tr align="center" class="tr">
						<td><?php echo $consulta['ID_ubicacion'] ?></a></td>
						<td><?php echo $consulta['descripcion'] ?></td>
						<td><?php echo $consulta['estado'] ?></td>
						<td><?php echo $consulta['ID_sala'] ?></td>
					</tr>
					<?php
					}
					?>
				</table>
</body>
</html>