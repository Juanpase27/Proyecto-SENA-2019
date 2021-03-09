<?php
	require("../Controller/conex.php");
	session_start();
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	$resultados=mysqli_query($mysqli, "SELECT * FROM usuarios where usuario='$usuario' AND password='$password'");
	$consulta=mysqli_fetch_array($resultados);
	
	if($usuario==$consulta['usuario'] AND $password==$consulta['password'] AND $consulta['cargo']=="Administrador" AND $consulta['estado']==True){
		$_SESSION['username']=$usuario;
		echo "<script language='javascript'>alert('Bienvenido Administrador');</script>";
		echo "<script language='javascript'>location.href='../Página principal.php';</script>";
	}
	else if($usuario==$consulta['usuario'] AND $password==$consulta['password'] AND $consulta['cargo']=="Profesor" AND $consulta['estado']==True){
		$_SESSION['username']=$usuario;
		echo "<script language='javascript'>alert('Bienvenido Profesor');</script>";
		echo "<script language='javascript'>location.href='../Página principal_profesor.php';</script>";
	}
	else if($usuario==$consulta['usuario'] AND $password==$consulta['password'] AND $consulta['estado']==False){
		echo "<script language='javascript'>alert('El usuario está inhabilitado, y por lo tanto no puede iniciar sesión ');</script>";
		echo "<script language='javascript'>location.href='../Index.php';</script>";
	}
	else{
		echo "<script language='javascript'>alert('El usuario y/o la contraseña son incorrectos ');</script>";
		echo "<script language='javascript'>location.href='../Index.php';</script>";
	}
?>