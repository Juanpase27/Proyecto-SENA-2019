<?php
	if(isset($_POST['Enviar']))
	{
		require_once "../../Controller/conex.php";
		
		$ID = $_POST['ID_computador'];
		$Nombre = $_POST['Nombre'];
		$Marca = $_POST['Marca'];
		$Tipo = $_POST['Tipo'];
		$Fecha = $_POST['fecha'];
		$Estado = $_POST['Estado'];
		$ID_sala = $_POST['ID_sala'];
		$ID_ubicacion = $_POST['ID_ubicacion'];

		//////////////////////////////Validaciones/////////////////////////////

		//////////Si el computador ya existe//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_computador = '$ID'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_computador'];
			
		if($a==$ID){
            echo "<script language='javascript'>alert('El computador ya existe');</script>";
            echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
		}

		//////////ID//////////
		if(empty($ID)){
			echo "<script language='javascript'>alert('El ID no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
		}
		//////////Nombre//////////
        if(empty($Nombre)){
			echo "<script language='javascript'>alert('El nombre no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }else{
			if(is_numeric($Nombre)){
				echo "<script language='javascript'>alert('El nombre debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
            if(strlen($Nombre)>60){
				echo "<script language='javascript'>alert('El nombre es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
		}
		//////////Marca//////////
        if(empty($Marca)){
			echo "<p class='Error'>La marca no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }else{
			if(is_numeric($Marca)){
				echo "<script language='javascript'>alert('La marca debe ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
            if(strlen($Marca)>60){
				echo "<script language='javascript'>alert('La marca es muy larga');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
		}
		//////////Tipo//////////
        if(empty($Tipo)){
			echo "<p class='Error'>El tipo no puede estar vacio</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }else{
            if(is_numeric($Tipo)){
				echo "<script language='javascript'>alert('El tipo debe de ser de tipo texto');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
			if(strlen($Tipo)>60){
				echo "<script language='javascript'>alert('El tipo es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
		}
		//////////Fecha de ingreso//////////
        if(empty($Fecha)){
			echo "<p class='Error'>La fecha no puede estar vacia</p>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }
		//////////ID sala//////////
		if(empty($ID_sala)){
			echo "<script language='javascript'>alert('El ID de la sala no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID de la sala debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID de la sala es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
            }
		}
		//////////ID ubicacion//////////
		$resultados = mysqli_query($mysqli, "SELECT * FROM computadores WHERE ID_ubicacion = '$ID_ubicacion'");
		$consulta=mysqli_fetch_array($resultados);
		$a = $consulta['ID_ubicacion'];
		if(empty($ID_ubicacion)){
			echo "<script language='javascript'>alert('El ID de la ubicacion no puede estar vacio');</script>";
			echo "<script language='javascript'>location.href='../View/Registrar computadores/Index.php';</script>";
			return false;
        }else{
            if(!is_numeric($ID)){
				echo "<script language='javascript'>alert('El ID de la ubicacion debe ser numérico');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
			if(strlen($ID)>20){
				echo "<script language='javascript'>alert('El ID de la ubicacion es muy largo');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
			if($a==$ID_ubicacion){
				echo "<script language='javascript'>alert('Otro computador ya está en esta ubicación');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
		}
		//////////Comprobar que la sala que escoge si existe//////////
		$existe=0;
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = $ID_sala");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}

		$resultados = mysqli_query($mysqli, "SELECT * FROM salas WHERE ID_sala = $ID_sala");
		$consulta=mysqli_fetch_array($resultados);

		if($existe==0){
			echo "<script language='javascript'>alert('La sala no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
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
		
		$resultados = mysqli_query($mysqli, "SELECT * FROM ubicacion WHERE ID_ubicacion = $ID_ubicacion");
		$consulta=mysqli_fetch_array($resultados);

		if($existe==0){
			echo "<script language='javascript'>alert('La ubicacion no existe');</script>";
			echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
			return false;
		}else{
			if($consulta['estado']==False){
				echo "<script language='javascript'>alert('La ubicacion no está disponible');</script>";
				echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
				return false;
			}
		}
		//////////////////////////////Validaciones/////////////////////////////

		switch($Estado){
			case "Habilitado":
				$Estado=True;
				
				$mysqli->query("INSERT INTO computadores (ID_computador, nombre_computador, marca, tipo, fecha_de_ingreso, estado, ID_sala, ID_ubicacion, ID_usuario)
				VALUES($ID, '$Nombre', '$Marca', '$Tipo', '$Fecha', '$Estado', '$ID_sala', '$ID_ubicacion', 1)");
			
                echo "<script language='javascript'>alert('El computador y sus datos fueron registrados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
					
			break;
			case "Inhabilitado":
				$Estado=False;
					
				$mysqli->query("INSERT INTO computadores (ID_computador, nombre_computador, marca, tipo, fecha_de_ingreso, estado, ID_sala, ID_ubicacion, ID_usuario)
				VALUES($ID, '$Nombre', '$Marca', '$Tipo', '$Fecha', '$Estado', '$ID_sala', '$ID_ubicacion', 1)");
				
                echo "<script language='javascript'>alert('El computador y sus datos fueron registrados correctamente');</script>";
                echo "<script language='javascript'>location.href='../../View/Computadores/Registrar computadores.php';</script>";
					
			break;
		}	
	}	
?>