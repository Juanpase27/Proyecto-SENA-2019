<?php
	
	////////////////////////ACTUALIZAR////////////////////////
	
	if(isset($_POST['Actualizar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_computador'];
		$Nombre = $_POST['nombre'];
		$Marca = $_POST['marca'];
		$Tipo = $_POST['tipo'];
		$Estado = $_POST['estado'];
		$Fecha = $_POST['fecha'];
		$ID_sala = $_POST['ID_sala'];
		$ID_ubicacion = $_POST['ID_ubicacion'];

		//////////////////////////////Validaciones/////////////////////////////
		//////////Comprobar si existe//////////

		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El computador no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
		}
		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
            if(strlen($Nombre)>60){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
		}
		//////////Marca//////////
        if(empty($Marca)){
			echo "<p class='Error'>La marca no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
        }else{
			if(is_numeric($Marca)){
				echo "<script language='javascript'>alert('La marca debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
            if(strlen($Marca)>60){
				echo "<script language='javascript'>alert('La marca es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
		}
		//////////Tipo//////////
        if(empty($Tipo)){
			echo "<p class='Error'>El tipo no puede estar vacio</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
        }else{
            if(is_numeric($Tipo)){
				echo "<script language='javascript'>alert('El tipo debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
			}
			if(strlen($Tipo)>60){
				echo "<script language='javascript'>alert('El tipo es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
				return false;
            }
		}
		//////////Fecha de ingreso//////////
        if(empty($Fecha)){
			echo "<p class='Error'>La fecha no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
        }
		//////////ID sala//////////
		if(empty($ID_sala)){
			echo "<script language='javascript'>alert('El ID de la sala no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
        }else{
            if(!is_numeric($ID_sala)){
				echo "<script language='javascript'>alert('El ID de la sala debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			}
			if(strlen($ID_sala)>20){
				echo "<script language='javascript'>alert('El ID de la sala es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
            }
		}
		//////////ID ubicacion//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_ubicacion != '$ID_ubicacion'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_ubicacion'];
		if(empty($ID_ubicacion)){
			echo "<script language='javascript'>alert('El ID de la ubicacion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
        }else{
            if(!is_numeric($ID_ubicacion)){
				echo "<script language='javascript'>alert('El ID de la ubicacion debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			}
			if(strlen($ID_ubicacion)>20){
				echo "<script language='javascript'>alert('El ID de la ubicacion es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			}
			if($a==$ID_ubicacion){
				echo "<script language='javascript'>alert('Otro computador ya está en esta ubicación');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			}
		}
		//////////Comprobar que la sala que escoge si existe//////////
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = $ID_sala");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
		}else{
			if($consulta['estado']==False){
				echo "<script language='javascript'>alert('La sala no está disponible');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
		}
		//////////Comprobar que la ubicacion que escoge si existe//////////
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = $ID_ubicacion");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
			return false;
		}else{
			if($consulta['estado']==False){
				echo "<script language='javascript'>alert('La ubicacion no está disponible');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
		}
		//////////////////////////////Validaciones/////////////////////////////

		//////////////////////////////ACTUALIZAR/////////////////////////////

		switch($Estado){
			case "Habilitado":
				$Estado=True;
				
				$_UPDATE_SQL="UPDATE computadores
				SET ID_computador=$ID, nombre_computador='$Nombre', marca='$Marca', tipo='$Tipo', fecha_de_ingreso='$Fecha', estado='$Estado',  ID_sala='$ID_sala', ID_ubicacion='$ID_ubicacion', ID_usuario=1 WHERE ID_computador='$ID'";

				mysqli_query($mysqli, $_UPDATE_SQL);
			
                echo "<script language='javascript'>alert('El computador y sus datos fueron actualizados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
					
			break;
			case "Inhabilitado":
				$Estado=False;
					
				$_UPDATE_SQL="UPDATE computadores
				SET ID_computador=$ID, nombre_computador='$Nombre', marca='$Marca', tipo='$Tipo', fecha_de_ingreso='$Fecha', estado='$Estado',  ID_sala='$ID_sala', ID_ubicacion='$ID_ubicacion', ID_usuario=1 WHERE ID_computador='$ID'";

				mysqli_query($mysqli, $_UPDATE_SQL);
				
                echo "<script language='javascript'>alert('El computador y sus datos fueron actualizados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores.php';</script>";
					
			break;
		}
	}
	
	
	////////////////////////INHABILITAR////////////////////////
	if(isset($_POST['Inhabilitar'])){
		require_once "../../Controller/conex.php";
		$ID = $_POST['ID_computador'];
		
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El computador no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores/Index.php';</script>";
			return false;
		}
		
		else{
			
			$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$ID'");
			$consulta = mysqli_fetch_array($resultados);
			
			switch($consulta['estado']){
			
			case True:
				$_UPDATE_SQL = "UPDATE computadores SET estado=False WHERE ID_computador='$ID'";
				
				mysqli_query($mysqli, $_UPDATE_SQL);
				
				echo "<script language='javascript'>alert('Computador inhabilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores/Index.php';</script>";
			break;
			
			case False:
				$_UPDATE_SQL = "UPDATE computadores SET estado=True WHERE ID_computador='$ID'";
		
				mysqli_query($mysqli, $_UPDATE_SQL);
		
				echo "<script language='javascript'>alert('Computador habilitado con éxito');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Actualizar computadores/Index.php';</script>";
			break;
			}
		}
	}
	
	
	
	////////////////////////ELIMINAR////////////////////////
	
	if(isset($_POST['Eliminar'])){
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_computador'];
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$ID'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		
		if($existe==0){
			echo "<script language='javascript'>alert('El computador no existe');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar computadores/Index.php';</script>";
			return false;
		}
		
		else{
			$_DELETE_SQL =  "DELETE FROM computadores WHERE ID_computador = '$ID'";
			mysqli_query($mysqli, $_DELETE_SQL);
			
			echo "<script language='javascript'>alert('El computador se eliminó correctamente');</script>";
			echo "<script language='javascript'>location.href='../View/Actualizar computadores/Index.php';</script>";
		}
	}
?>