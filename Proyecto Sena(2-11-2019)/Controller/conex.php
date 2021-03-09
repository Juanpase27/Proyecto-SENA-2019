<?php
	$mysqli = new MySQLi("localhost", "root","", "proyecto sena");
	if ($mysqli -> connect_errno) {
		die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
	}
	else{
	



		/*$servidor="localhost";
			$username="root";
			$password="";
			$database="proyecto_alternative";

			$connection= new mysqli($servidor, $username, $password, $database);
			mysql_select_db("proyecto_alternative");
			$consulta="SELECT nombre FROM usuarios;";
			if (isset($consulta)) {
				mysql_query($consulta);
			}*/

			/*if($connection->connect_error){
				die("Conexion fallida: ". $connection->connect_error);
			}
			else{
				echo "Conexion exitosa";
			}*/
		//	$username=$_POST["usuario"];
			//$username_from_MYSQL="SELECT nombre FROM usuarios";
			//$username_for_Login_PHP=mysql_query($username_from_MYSQL);
		/*	$password=$_POST["contraseña"];
			$password_from_MYSQL="SELECT contraseña FROM usuarios";
			$password_for_Login_PHP=mysql_query($username_from_MYSQL);*/
		//echo $username_from_MYSQL;

		/*	if ($username==$username_for_Login_PHP AND $password==$password_for_Login_PHP) {
				echo "SIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII";
			}
			else {
				echo "NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
			}*/
		}
?>
