<?php
	if(isset($_POST['Enviar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_ubicacion'];
		$Descripcion = $_POST['descripcion'];
		$Estado = $_POST['estado'];
		$ID_sala = $_POST['ID_sala'];

		//////////////////////////////Validaciones/////////////////////////////
		//////////Si la ubicacion ya existe//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$ID'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_ubicacion'];
			
		if($a==$ID){
			echo "<script language='javascript'>alert('La ubicacion ya existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
				return false;
            }
		}
		//////////Descripcion//////////
        if(empty($Descripcion)){
			echo "<script language='javascript'>alert('La descripcion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
			return false;
        }else{
			if(is_numeric($Descripcion)){
				echo "<script language='javascript'>alert('La descripcion debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
				return false;
            }
            if(strlen($Descripcion)>230){
				echo "<script language='javascript'>alert('La descripcion es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
				return false;
            }
		}
		//////////Si la sala que escogió si existe//////////

		$existe=0;

		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = $ID_sala");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
		}


		//////////////////////////////Validaciones/////////////////////////////
		switch($Estado){
			case "Habilitada":
				$Estado=True;

				$mysqli->query("INSERT INTO ubicacion (ID_ubicacion, descripcion, estado, ID_sala) VALUES('$ID', '$Descripcion', $Estado, $ID_sala)");
			
				echo "<script language='javascript'>alert('La ubicacion fue registrada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
			break;
			case "Inhabilitada":
				$Estado=0;

				$mysqli->query("INSERT INTO ubicacion (ID_ubicacion, descripcion, estado, ID_sala) VALUES('$ID', '$Descripcion', $Estado, $ID_sala)");
			
				echo "<script language='javascript'>alert('La ubicacion fue registrada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Registrar ubicaciones.php';</script>";
			break;
		}	
	}
?>