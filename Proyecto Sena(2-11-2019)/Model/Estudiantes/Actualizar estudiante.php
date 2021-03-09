<?php
	
	////////////////////////ACTUALIZAR////////////////////////
	
	if(isset($_POST['Actualizar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_estudiante'];
		$Nombre = $_POST['nombre'];
		$Apellido = $_POST['apellido'];
		$Curso = $_POST['curso'];
		$ID_compu = $_POST['ID_computador'];
		$Fecha = $_POST['fecha'];
		$Estado = $_POST['estado'];
		
		//////////////////////////////Validaciones/////////////////////////////

		//////////Consultar si existe//////////
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = $ID");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El estudiante no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
            if(strlen($Nombre)>60){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Apellido//////////
        if(empty($Apellido)){
			echo "<script language='javascript'>alert('El apellido no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
        }else{
			if(is_numeric($Apellido)){
				echo "<script language='javascript'>alert('El apellido debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
            if(strlen($Apellido)>60){
				echo "<script language='javascript'>alert('El apellido es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Curso//////////
        if(empty($Curso)){
			echo "<script language='javascript'>alert('El curso mo puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
        }else{
            if(is_numeric($Curso)){
				echo "<script language='javascript'>alert('El curso debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
			}
			if(strlen($Curso)>60){
				echo "<script language='javascript'>alert('El curso es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
				return false;
            }
		}
		//////////ID computador//////////
		if(empty($ID_compu)){
			echo "<script language='javascript'>alert('El ID de la ubicacion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
        }else{
            if(!is_numeric($ID_compu)){
				echo "<script language='javascript'>alert('El ID del computador debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			}
			if(strlen($ID_compu)>20){
				echo "<script language='javascript'>alert('El ID del computador es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			}
		}
		//////////Fecha de asignacion//////////
        if(empty($Fecha)){
			echo "<script language='javascript'>alert('La fecha no puede estar vacia');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
			return false;
        }
		//////////////////////////////Validaciones/////////////////////////////

		if($Estado=="Habilitado"){
			$Estado=1;
			$ID_usuario=1;

			$_UPDATE_SQL="UPDATE estudiantes
			SET ID_estudiante='$ID', nombre_estudiante='$Nombre', apellido_estudiante='$Apellido', curso='$Curso', ID_computador=$ID_compu, fecha_asignacion_computador='$Fecha', estado=$Estado, ID_usuario=$ID_usuario WHERE ID_estudiante='$ID'";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Estudiante actualizado con éxito');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
		}
		else if($Estado=="Inhabilitado"){
			$Estado=0;
			$ID_usuario=1;

			$_UPDATE_SQL="UPDATE estudiantes
			SET ID_estudiante='$ID', nombre_estudiante='$Nombre', apellido_estudiante='$Apellido', curso='$Curso', ID_computador=$ID_compu, fecha_asignacion_computador='$Fecha', estado=$Estado, ID_usuario=$ID_usuario WHERE ID_estudiante='$ID'";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Estudiante actualizado con éxito');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes.php';</script>";
		}

		/*switch($Estado){
			case "Habilitado":
			$ID_usuario=1;
				$Estado=True;
				
				$_UPDATE_SQL="UPDATE estudiantes
				SET ID_estudiante='$ID', nombre_estudiante='$Nombre', apellido_estudiante='$Apellido', curso='$Curso', ID_computador=$ID_compu, fecha_asignacion_computador=$Fecha, ID_usuario=$ID_usuario WHERE ID_estudiante='$ID'";
			
                echo "<script language='javascript'>alert('El computador y sus datos fueron registrados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
					
			break;
			case "Inhabilitado":
			$ID_usuario=1;
				$Estado=False;
					
				$_UPDATE_SQL="UPDATE estudiantes
				SET ID_estudiante='$ID', nombre_estudiante='$Nombre', apellido_estudiante='$Apellido', curso='$Curso', ID_computador=$ID_compu, fecha_asignacion_computador=$Fecha, ID_usuario=$ID_usuario WHERE ID_estudiante='$ID'";
				
                echo "<script language='javascript'>alert('El computador y sus datos fueron registrados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
					
			break;
		}*/
	}
		


	///////////////////////INHABILITAR////////////////////////
	if(isset($_POST['Inhabilitar'])){
		require_once "../../Controller/conex.php";
		$ID = $_POST['ID_estudiante'];
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El estudiante no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes/Index.php';</script>";
			return false;
		}
		else{
			
			$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$ID'");
			$consulta = mysqli_fetch_array($resultados);
			
			switch($consulta['estado']){
			
			case True:
				$_UPDATE_SQL = "UPDATE estudiantes SET estado=False WHERE ID_estudiante='$ID'";
				
				mysqli_query($mysqli, $_UPDATE_SQL);
				
				echo "<script language='javascript'>alert('Estudiante inhabilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes/Index.php';</script>";
			break;
			
			case False:
				$_UPDATE_SQL = "UPDATE estudiantes SET estado=True WHERE ID_estudiante='$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);
		
				echo "<script language='javascript'>alert('Estudiante habilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes/Index.php';</script>";
			break;
			}
		}
	}

	////////////////////////ELIMINAR////////////////////////
	
	if(isset($_POST['Eliminar'])){
		require_once "../Controller/conex.php";
		
		$ID = $_POST['ID_estudiante'];
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El estudiante no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes/Index.php';</script>";
			return false;
		}
		else{
			$_DELETE_SQL =  "DELETE FROM estudiantes WHERE ID_estudiante = '$ID'";
			mysqli_query($mysqli, $_DELETE_SQL);
			
			echo "<script language='javascript'>alert('El estudiante se eliminó correctamente');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Actualizar estudiantes/Index.php';</script>";
		}
	}
?>