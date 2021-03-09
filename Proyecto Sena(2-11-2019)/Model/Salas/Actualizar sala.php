
<?php
	
	////////////////////////ACTUALIZAR////////////////////////
	
	if(isset($_POST['Actualizar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_sala'];
		$Nombre = $_POST['nombre'];
		$Asignacion = $_POST['asignacion'];
		$Estado = $_POST['estado'];
		
		//////////////////////////////Validaciones/////////////////////////////
		
		//////////Consultar si existe//////////
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			//echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			//echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			//echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
            }
            if(strlen($Nombre)>50){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
            }
		}
		//////////Asignacion//////////
        if(empty($Asignacion)){
			//echo "<p class='Error'>La asignacion no puede estar vacia</p>";
			//echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
			return false;
        }else{
			if(is_numeric($Asignacion)){
				echo "<script language='javascript'>alert('La asignacion debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
            }
            if(strlen($Asignacion)>60){
				echo "<script language='javascript'>alert('La asignacion es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
				return false;
            }
		}
		
		//////////////////////////////Validaciones////////////////////////////

		if($Estado=="Habilitada"){
			$Estado=1;

			$_UPDATE_SQL="UPDATE salas SET ID_sala=$ID, nombre='$Nombre', asignacion='$Asignacion', estado=$Estado WHERE ID_sala=$ID";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Los datos de la sala fueron actualizados correctamente');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
		}
		else if($Estado=="Inhabilitada"){
			$Estado=0;

			$_UPDATE_SQL="UPDATE salas SET ID_sala=$ID, nombre='$Nombre', asignacion='$Asignacion', estado=$Estado WHERE ID_sala=$ID";
		
			mysqli_query($mysqli, $_UPDATE_SQL);
	
			echo "<script language='javascript'>alert('Los datos de la sala fueron actualizados correctamente');</script>";
			echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas.php';</script>";
		}


		/*$_UPDATE_SQL="UPDATE salas SET ID_sala=$ID, nombre='$Nombre', asignacion='$Asignacion' WHERE ID_sala='$ID'";
		
		mysqli_query($mysqli, $_UPDATE_SQL);
	
		echo "<script language='javascript'>alert('Los datos de la sala fueron actualizados correctamente');</script>";
		echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas/Index.php';</script>";*/
		
	}
	
	////////////////////////INHABILITAR////////////////////////
	if(isset($_POST['Inhabilitar'])){
		require_once "../../Controller/conex.php";
		$ID = $_POST['ID_sala'];
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar salas/Index.php';</script>";
		}
		else{
			
			$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$ID'");
			$consulta = mysqli_fetch_array($resultados);
			
			switch($consulta['estado']){
			
			case True:
				$_UPDATE_SQL = "UPDATE salas SET estado=False WHERE ID_sala = '$ID'";
				
				mysqli_query($mysqli, $_UPDATE_SQL);
				
				echo "<script language='javascript'>alert('Sala inhabilitada con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas/Index.php';</script>";
			break;
			
			case False:
				$_UPDATE_SQL = "UPDATE salas SET estado=True WHERE ID_sala = '$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);
		
				echo "<script language='javascript'>alert('Sala habilitada con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Salas/Actualizar salas/Index.php';</script>";
			break;
			}
		}
	}
	
	////////////////////////ELIMINAR////////////////////////
	
	if(isset($_POST['Eliminar'])){
		require_once "../Controller/conex.php";
		
		$ID = $_POST['ID_sala'];
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar salas/Index.php';</script>";
			return false;
		}
		else{
			$_DELETE_SQL =  "DELETE FROM salas WHERE ID_sala = '$ID'";
			mysqli_query($mysqli, $_DELETE_SQL);
			
			echo "<script language='javascript'>alert('La sala se eliminó correctamente');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar salas/Index.php';</script>";
		}
	}
?>