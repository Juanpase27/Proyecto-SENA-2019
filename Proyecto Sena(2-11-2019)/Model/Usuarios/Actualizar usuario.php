<?php
	
	////////////////////////ACTUALIZAR////////////////////////
	
	if(isset($_POST['Actualizar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_usuario'];
		$Cargo = $_POST['cargo'];
		$Nombre = $_POST['nombre'];
		$Apellido = $_POST['apellido'];
		$Usuario = $_POST['usuario'];
		$Password = $_POST['password'];
		$Estado = $_POST['estado'];
		
		//////////////////////////////Validaciones/////////////////////////////

		//////////Consultar si ya existe//////////
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = $ID");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El usuario no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
		}
		//////////ID//////////

		if(empty($ID)){
			//echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			//echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
            if(strlen($Nombre)>50){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
		}
		//////////Apellido//////////
        if(empty($Apellido)){
			//echo "<script language='javascript'>alert('El Apellido no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Apellido)){
				echo "<script language='javascript'>alert('El Apellido debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
            if(strlen($Apellido)>50){
				echo "<script language='javascript'>alert('El Apellido es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
		}
		//////////Usuario//////////
        if(empty($Usuario)){
			//echo "<script language='javascript'>alert('El nombre del usuario no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Usuario)){
				echo "<script language='javascript'>alert('El nombre del usuario debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
            if(strlen($Usuario)>50){
				echo "<script language='javascript'>alert('El nombre del usuario es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
		}
		//////////Password//////////
        if(empty($Password)){
			//echo "<p class='Error'>La contraseña no puede estar vacia</p>";
			//echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			return false;
        }else{
            if(is_numeric($Password)){
				echo "<script language='javascript'>alert('La contraseña debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
			}
			if(strlen($Password)>20){
				echo "<script language='javascript'>alert('La contraseña es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
				return false;
            }
		}
		//////////////////////////////Validaciones/////////////////////////////
		
		if($Estado=="Habilitado"){
			$Estado=1;

			$_UPDATE_SQL="UPDATE usuarios SET ID_usuario='$ID', nombre_usuario='$Nombre', apellido_usuario='$Apellido', usuario='$Usuario', password='$Password', cargo='$Cargo', estado=$Estado WHERE ID_usuario='$ID'";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Los datos del usuario fueron actualizados correctamente');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
		}
		else if($Estado=="Inhabilitado"){
			$Estado=0;

			$_UPDATE_SQL="UPDATE usuarios SET ID_usuario='$ID', nombre_usuario='$Nombre', apellido_usuario='$Apellido', usuario='$Usuario', password='$Password', cargo='$Cargo', estado=$Estado WHERE ID_usuario='$ID'";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Los datos del usuario fueron actualizados correctamente');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
		}
	}
	
	////////////////////////INHABILITAR////////////////////////
	if(isset($_POST['Inhabilitar'])){
		require_once "../../Controller/conex.php";
		$ID = $_POST['ID_usuario'];
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El usuario no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
		}
		else{
			
			$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$ID'");
			$consulta = mysqli_fetch_array($resultados);
			
			switch($consulta['estado']){
			
			case True:
				$_UPDATE_SQL = "UPDATE usuarios SET estado=False WHERE ID_usuario = '$ID'";
				
				mysqli_query($mysqli, $_UPDATE_SQL);
				
				echo "<script language='javascript'>alert('Usuario inhabilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			break;
			
			case False:
				$_UPDATE_SQL = "UPDATE usuarios SET estado=True WHERE ID_usuario = '$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);
		
				echo "<script language='javascript'>alert('Usuario habilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Actualizar usuarios.php';</script>";
			break;
			}
		}
	}
	
	////////////////////////ELIMINAR////////////////////////
	
	if(isset($_POST['Eliminar'])){
		require_once "../Controller/conex.php";
		
		$ID = $_POST['ID_usuario'];
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El usuario no existe');</script>";
		}
		else{
			$_DELETE_SQL =  "DELETE FROM usuarios WHERE ID_usuario = '$ID'";
			mysqli_query($mysqli, $_DELETE_SQL);
			
			echo "<script language='javascript'>alert('El usuario se eliminó correctamente');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar usuarios/Index.php';</script>";
		}
	}
?>