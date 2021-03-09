<?php
	require("Controller/conex.php");
	//asignamos una variable a cada control del formulario, este debe contener el metodo post
	$user=$_POST['usuario'];
	$pass=$_POST['password'];
	$consulta_user_mysql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre='$user'") or die("Error");

//echo $user;

	$a = mysqli_fetch_array($consulta_user_mysql);

//  echo $a[1];
//  echo $b[3];
// echo $c[0];
	if($user==$a[1] AND $pass==$a[2] AND $a[3]=="Administrador" AND $a[4]==True){
		echo "<script language='javascript'>alert('Bienvenido Administrador');</script>";
		echo "<script language='javascript'>location.href='Página principal.php';</script>";
	}
	else if($user==$a[1] AND $pass==$a[2] AND $a[3]=="Profesor" AND $a[4]==True){
		echo "<script language='javascript'>alert('Bienvenido Profesor');</script>";
		echo "<script language='javascript'>location.href='Página principal_profesor.php';</script>";
	}
	else if($user==$a[1] AND $pass==$a[2] AND $a[4]==False){
		echo "<script language='javascript'>alert('El usuario está inhabilitado, y por lo tanto no puede iniciar sesión ');</script>";
		echo "<script language='javascript'>location.href='Index.php';</script>";
	}
	else{
		echo "<script language='javascript'>alert('El usuario y/o la contraseña son incorrectos ');</script>";
		echo "<script language='javascript'>location.href='Index.php';</script>";
	}

/*  switch ($a) {
    case $user:
      echo "HELLO";
      break;

    default:
      echo "Good Bye";
      break;
  }
*/
//echo "<br><br>".$user."<br>";
?>