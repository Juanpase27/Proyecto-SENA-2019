<?php
					if(isset($_POST['Consulta'])){
						require("../../Controller/conex.php");
						$eleccion = $_POST['eleccion'];
						$busqueda = $_POST['busqueda'];
						
						////////////////////////switch case////////////////////////
						
						switch ($eleccion){
							////////////////////////Todos los estudiantes////////////////////////
							case "Todos":
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes");
								while($consulta = mysqli_fetch_array($resultados)){
									if($consulta['estado']==True){
										$consulta['estado']="Habilitado";
									}
									else if($consulta['estado']==False){
										$consulta['estado']="Inhabilitado";
									}
				?>
						
									<tr align="center" class="tr">
										<td><?php echo $consulta['ID_estudiante'] ?></a></td>
										<td><?php echo $consulta['nombre_estudiante'] ?></td>
										<td><?php echo $consulta['apellido_estudiante'] ?></td>
										<td><?php echo $consulta['curso'] ?></td>
										<td><?php echo $consulta['ID_computador'] ?></td>
										<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
										<td><?php echo $consulta['estado'] ?></td>
									</tr>

				<?php
								}
							break;
							////////////////////////Buscar por ID////////////////////////
							case "ID":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('El estudiante no existe');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
											<td><?php echo $consulta['estado'] ?></td>
										</tr>

				<?php
									}
								}
							break;
							////////////////////////Buscar por Nombre////////////////////////
							case "Nombre":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE nombre_estudiante = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('El estudiante no existe');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE nombre_estudiante = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
											<td><?php echo $consulta['estado'] ?></td>
										</tr>

				<?php
									}
								}
							break;
							////////////////////////Buscar por Apellido////////////////////////
							case "Apellido":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE apellido_estudiante = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('El estudiante no existe');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE apellido_estudiante = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
											<td><?php echo $consulta['estado'] ?></td>
										</tr>

				<?php
									}
								}
							break;
							////////////////////////Buscar por Curso////////////////////////
							case "Curso":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE curso = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('El estudiante no existe');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE curso = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
											<td><?php echo $consulta['estado'] ?></td>
										</tr>
				<?php
									}
								}
							break;
							////////////////////////Buscar por ID computador////////////////////////
							case "ID computador":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_computador = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('No hay un estudiante con ese computador asignado o no existe');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_computador = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
											<td><?php echo $consulta['estado'] ?></td>
										</tr>			

				<?php
									}
								}
							break;
							////////////////////////Buscar por fecha de asignacion////////////////////////
							case "Fecha asignación":
								$existe=0;
								$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE fecha_asignacion_computador = '$busqueda'");
								while($consulta = mysqli_fetch_array($resultados)){
									$existe++;
								}
								if($existe==0){
									echo "<script language='javascript'>alert('No hay un estudiante con esa fecha de asignacion');</script>";
								}
								else{
									$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE fecha_asignacion_computador = '$busqueda'");
									while($consulta = mysqli_fetch_array($resultados)){
										if($consulta['estado']==True){
											$consulta['estado']="Habilitado";
										}
										else if($consulta['estado']==False){
											$consulta['estado']="Inhabilitado";
										}
				?>
						
										<tr align="center" class="tr">
											<td><?php echo $consulta['ID_estudiante'] ?></a></td>
											<td><?php echo $consulta['nombre_estudiante'] ?></td>
											<td><?php echo $consulta['apellido_estudiante'] ?></td>
											<td><?php echo $consulta['curso'] ?></td>
											<td><?php echo $consulta['ID_computador'] ?></td>
											<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
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
										$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE estado = '$busqueda'");
										while($consulta = mysqli_fetch_array($resultados)){
											$existe++;
										}
											if($existe==0){
												echo "<script language='javascript'>alert('No hay estudiantes habilitados');</script>";
											}
											else{
												$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE estado = '$busqueda'");
												while($consulta = mysqli_fetch_array($resultados)){
													if($consulta['estado']==True){
														$consulta['estado']="Habilitado";
													}
													else if($consulta['estado']==False){
														$consulta['estado']="Inhabilitado";
													}
				?>
						
													<tr align="center" class="tr">
														<td><?php echo $consulta['ID_estudiante'] ?></a></td>
														<td><?php echo $consulta['nombre_estudiante'] ?></td>
														<td><?php echo $consulta['apellido_estudiante'] ?></td>
														<td><?php echo $consulta['curso'] ?></td>
														<td><?php echo $consulta['ID_computador'] ?></td>
														<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
														<td><?php echo $consulta['estado'] ?></td>
													</tr>

				<?php
												}
											}
									break;
									case "Inhabilitado":
										$busqueda=0;
										$existe=0;
										$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE estado = '$busqueda'");
										while($consulta = mysqli_fetch_array($resultados)){
											$existe++;
										}
											if($existe==0){
												echo "<script language='javascript'>alert('No hay estudiantes inhabilitados');</script>";
											}
											else{
												$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE estado = '$busqueda'");
												while($consulta = mysqli_fetch_array($resultados)){
													if($consulta['estado']==True){
														$consulta['estado']="Habilitado";
													}
													else if($consulta['estado']==False){
														$consulta['estado']="Inhabilitado";
													}
				?>
						
													<tr align="center" class="tr">
														<td><?php echo $consulta['ID_estudiante'] ?></a></td>
														<td><?php echo $consulta['nombre_estudiante'] ?></td>
														<td><?php echo $consulta['apellido_estudiante'] ?></td>
														<td><?php echo $consulta['curso'] ?></td>
														<td><?php echo $consulta['ID_computador'] ?></td>
														<td><?php echo $consulta['fecha_asignacion_computador'] ?></td>
														<td><?php echo $consulta['estado'] ?></td>
													</tr>

				<?php
												}
											}
									break;
								}				
						}
					}
				?>