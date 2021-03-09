<?php
	////////////////////////Registrar////////////////////////
	if(isset($_POST['Enviar']))
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
		//////////Si el usuario ya existe//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE ID_usuario = '$ID'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_usuario'];
		
		if($a==$ID){
			echo "<script language='javascript'>alert('El usuario ya existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
            if(strlen($Nombre)>50){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
		}
		//////////Apellido//////////
        if(empty($Apellido)){
			echo "<script language='javascript'>alert('El apellido no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Apellido)){
				echo "<script language='javascript'>alert('El apellido debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
            if(strlen($Apellido)>50){
				echo "<script language='javascript'>alert('El apellido es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
		}
			//////////Usuario//////////
        if(empty($Usuario)){
			echo "<script language='javascript'>alert('El  nombre del usuario no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
        }else{
			if(is_numeric($Usuario)){
				echo "<script language='javascript'>alert('El nombre del usuario debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
            if(strlen($Usuario)>50){
				echo "<script language='javascript'>alert('El nombre del usuario es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
		}
		//////////Password//////////
        if(empty($Password)){
			echo "<p class='Error'>La contraseña no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			return false;
        }else{
            if(is_numeric($Password)){
				echo "<script language='javascript'>alert('La contraseña debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
			}
			if(strlen($Password)>20){
				echo "<script language='javascript'>alert('La contraseña es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
				return false;
            }
		}

		//////////////////////////////Validaciones/////////////////////////////

		switch($Estado){
			case "Habilitado":
				$Estado=True;

				$mysqli->query("INSERT INTO usuarios (ID_usuario, nombre_usuario, apellido_usuario, usuario,  Password, cargo, estado) VALUES('$ID', '$Nombre', '$Apellido', '$Usuario', '$Password', '$Cargo', '$Estado')");
		
				echo "<script language='javascript'>alert('El usuario fue registrado correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
			break;
			case "Inhabilitado":
				$Estado=False;

				$mysqli->query("INSERT INTO usuarios (ID_usuario, nombre_usuario, apellido_usuario, usuario, Password, cargo, estado) VALUES('$ID', '$Nombre', '$Apellido', '$Usuario', '$Password', '$Cargo', '$Estado')");
		
				echo "<script language='javascript'>alert('El usuario fue registrado correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Usuarios/Registrar usuarios.php';</script>";
		}
	}
	
?>