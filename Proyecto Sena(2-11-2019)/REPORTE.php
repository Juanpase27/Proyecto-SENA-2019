<!DOCTYPE html>
<html>
<body id="pagina_principal">
	<h2 class="clear" align="center">Consultar usuarios</h2>
	<br/>
	<table border=1 style="color:blue">
		<tr align="center">
			<td>ID_usuario</td>
			<td>Nombre</td>
			<td>Password</td>
			<td>Estado</td>
		</tr>
	<?php
		require("Controller/conex.php");
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
			<td><?php echo $consulta['ID_usuario'] ?></td>
			<td><?php echo $consulta['nombre'] ?></td>
			<td><?php echo $consulta['password'] ?></td>
			<td><?php echo $consulta['estado'] ?></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</html>