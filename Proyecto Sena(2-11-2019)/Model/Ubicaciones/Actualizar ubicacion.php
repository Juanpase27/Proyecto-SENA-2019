<?php
	
	if(isset($_POST['Actualizar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_ubicacion'];
		$Descripcion = $_POST['descripcion'];
		$Estado = $_POST['estado'];
		$ID_sala = $_POST['ID_sala'];

		//////////////////////////////Validaciones/////////////////////////////
		//////////Consultar si ya existe//////////
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
				return false;
            }
		}
		//////////Descripcion//////////
        if(empty($Descripcion)){
			echo "<script language='javascript'>alert('La descripcion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			return false;
        }else{
			if(is_numeric($Descripcion)){
				echo "<script language='javascript'>alert('La descripcion debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
				return false;
            }
            if(strlen($Descripcion)>230){
				echo "<script language='javascript'>alert('La descripcion es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
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

				$_UPDATE_SQL="UPDATE ubicacion SET ID_ubicacion='$ID', descripcion='$Descripcion', estado=$Estado, ID_sala=$ID_sala WHERE ID_ubicacion='$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);

				echo "<script language='javascript'>alert('La ubicacion fue actualizada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			break;
			case "Inhabilitada":
				$Estado=0;

				$_UPDATE_SQL="UPDATE ubicacion SET ID_ubicacion='$ID', descripcion='$Descripcion', ID_sala=$ID_sala estado=$Estado WHERE ID_ubicacion='$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);

				echo "<script language='javascript'>alert('La ubicacion fue actualizada correctamente');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			break;
		}
	}
	
	////////////////////////INHABILITAR////////////////////////
	if(isset($_POST['Inhabilitar'])){
		require_once "../Controller/conex.php";
		$ID = $_POST['ID_ubicacion'];
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			return false;
		}
		else{
			
			$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$ID'");
			$consulta = mysqli_fetch_array($resultados);
			
			switch($consulta['estado']){
			
			case True:
				$_UPDATE_SQL = "UPDATE ubicacion SET estado=False WHERE ID_ubicacion='$ID'";
				
				mysqli_query($mysqli, $_UPDATE_SQL);
				
				echo "<script language='javascript'>alert('Ubicacion inhabilitada con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			break;
			
			case False:
				$_UPDATE_SQL = "UPDATE ubicacion SET estado=True WHERE ID_ubicacion='$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);
		
				echo "<script language='javascript'>alert('Ubicacion habilitada con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Ubicaciones/Actualizar ubicaciones.php';</script>";
			break;
			}
		}
	}
	
	////////////////////////ELIMINAR////////////////////////
	
	if(isset($_POST['Eliminar'])){
		require_once "../Controller/conex.php";
		
		$ID = $_POST['ID_ubicacion'];
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar ubicaciones/Index.php';</script>";
			return false;
		}
		else{
			$_DELETE_SQL =  "DELETE FROM ubicacion WHERE ID_ubicacion = '$ID'";
			mysqli_query($mysqli, $_DELETE_SQL);
			
			echo "<script language='javascript'>alert('La ubicacion se eliminó correctamente');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar ubicaciones/Index.php';</script>";
		}
	}
?>