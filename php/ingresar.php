<?php
	require('conexion.php');
	session_start();
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$user=htmlspecialchars(mysqli_real_escape_string($conexion,$user));
	$pass=htmlspecialchars(mysqli_real_escape_string($conexion,$pass));
	$query=("select  nom_user,password from usuarios where nom_user='$user' and password='$pass' ");
	$rs=mysqli_query($conexion,$query);
	$row=mysqli_fetch_array($rs,MYSQLI_ASSOC);
	
	$nr=mysqli_num_rows($rs);
	if($nr==1)
	{
			$_SESSION['login_user'] = $user;
		header("Location: IndexUsuario.html");
	}
	else 
	{
		 $error = "los datos son invalidos";
		 header("Location: index.html");
	}
?>