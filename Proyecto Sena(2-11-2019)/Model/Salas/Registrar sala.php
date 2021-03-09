<?php
	if(isset($_POST['Enviar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_sala'];
		$Nombre = $_POST['nombre'];
		$Asignacion = $_POST['asignacion'];
		$Estado = $_POST['estado'];

		//////////////////////////////Validaciones/////////////////////////////
		//////////Si la sala ya existe//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = $ID");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_sala'];
			
		if($a==$ID){
			echo "<script language='javascript'>alert('La sala ya existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
            }
            if(strlen($Nombre)>50){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
            }
		}
		//////////Asignacion//////////
        if(empty($Asignacion)){
			echo "<p class='Error'>La asignacion no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
			return false;
        }else{
			if(is_numeric($Asignacion)){
				echo "<script language='javascript'>alert('La asignacion debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
            }
            if(strlen($Asignacion)>60){
				echo "<script language='javascript'>alert('La asignacion es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
				return false;
            }
		}
		//////////////////////////////Validaciones/////////////////////////////
		switch($Estado){
			case "Habilitada":
				$Estado=True;

				$mysqli->query("INSERT INTO salas (ID_sala, nombre, asignacion, estado) VALUES($ID, '$Nombre', '$Asignacion', '$Estado')");
				
				echo "<script language='javascript'>alert('La sala fue registrada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
			break;
			case "Inhabilitada":
				$Estado=False;

				$mysqli->query("INSERT INTO salas (ID_sala, nombre, asignacion, estado) VALUES($ID, '$Nombre', '$Asignacion', '$Estado')");

				echo "<script language='javascript'>alert('La sala fue registrada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Registrar salas.php';</script>";
		}
				
	}
?>