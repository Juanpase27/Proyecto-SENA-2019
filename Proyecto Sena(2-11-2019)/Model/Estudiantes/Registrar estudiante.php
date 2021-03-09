<?php
	if(isset($_POST['Enviar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_estudiante'];
		$Nombre = $_POST['nombre'];
		$Apellido = $_POST['apellido'];
		$Curso = $_POST['curso'];
		$Estado = $_POST['estado'];
		$ID_compu = $_POST['ID_computador'];
		$Fecha = $_POST['fecha'];

		//////////////////////////////Validaciones/////////////////////////////
		//////////Si el estudiante ya existe//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE ID_estudiante = '$ID'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_estudiante'];
			
		if($a==$ID){
            echo "<script language='javascript'>alert('El estudiante ya existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../View/Registrar estudiantes/Index.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
            if(strlen($Nombre)>60){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Apellido//////////
        if(empty($Apellido)){
			echo "<p class='Error'>El apellido no puede estar vacio</p>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
        }else{
			if(is_numeric($Apellido)){
				echo "<script language='javascript'>alert('La marca debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
            if(strlen($Apellido)>60){
				echo "<script language='javascript'>alert('La marca es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
		}
		//////////Curso//////////
        if(empty($Curso)){
			echo "<p class='Error'>El curso no puede estar vacio</p>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
        }else{
            if(is_numeric($Curso)){
				echo "<script language='javascript'>alert('El curso debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
			}
			if(strlen($Curso)>60){
				echo "<script language='javascript'>alert('El curso es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
            }
		}
		//////////ID computador//////////
		if(empty($ID_compu)){
			echo "<script language='javascript'>alert('El ID de la ubicacion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID_compu)){
				echo "<script language='javascript'>alert('El ID del computador debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
			}
			if(strlen($ID_compu)>20){
				echo "<script language='javascript'>alert('El ID del computador es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
				return false;
			}
		}
		//////////Fecha de asignacion//////////
        if(empty($Fecha)){
			echo "<p class='Error'>La fecha no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
        }
		//////////Comprobar que el computador si existe//////////

		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = $ID_compu");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = $ID_compu");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['estado'];
		

		if($existe==0){
			echo "<script language='javascript'>alert('El computador que eligió no está registrado');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
		}
		else if($consulta['estado']==False){
			echo "<script language='javascript'>alert('El computador no está disponible');</script>";
			echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			return false;
		}
		//////////////////////////////Validaciones/////////////////////////////

		switch($Estado){
			case "Habilitado":
				$Estado=True;

				$mysqli->query("INSERT INTO estudiantes (ID_estudiante, nombre_estudiante, apellido_estudiante, curso, ID_computador, fecha_asignacion_computador, estado, ID_usuario)
				VALUES($ID, '$Nombre', '$Apellido', '$Curso', '$ID_compu', '$Fecha', $Estado, 1)");
				
				echo "<script language='javascript'>alert('Estudiante registrado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			break;
			case "Inhabilitado":
				$Estado=0;

				$mysqli->query("INSERT INTO estudiantes (ID_estudiante, nombre_estudiante, apellido_estudiante, curso, ID_computador, fecha_asignacion_computador, estado, ID_usuario)
				VALUES($ID, '$Nombre', '$Apellido', '$Curso', '$ID_compu', '$Fecha', $Estado, 1)");
				
				echo "<script language='javascript'>alert('Estudiante registrado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Estudiantes/Registrar estudiantes.php';</script>";
			break;
		}
	}
?>