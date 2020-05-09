<?php

	require('conexion.php');
	echo 'Conexion realizada';
	$user_name= $_POST["user"];
	$name= $_POST["nombre"];
	$apell_pat= $_POST["apellidop"];
	$apell_mat= $_POST["apellidom"];
	$edad= $_POST["Edad"];
	$pass= $_POST["pass"];
	$repass= $_POST["repass"];


		if($pass==$repass)
		{
			

			$user_name=htmlspecialchars(mysqli_real_escape_string($conexion,$user_name));
			$name=htmlspecialchars(mysqli_real_escape_string($conexion,$name));
			$apell_pat=htmlspecialchars(mysqli_real_escape_string($conexion,$apell_pat));
			$apell_mat=htmlspecialchars(mysqli_real_escape_string($conexion,$apell_mat));
			$edad=htmlspecialchars(mysqli_real_escape_string($conexion,$edad));
			$pass=htmlspecialchars(mysqli_real_escape_string($conexion,$pass));
			$repass=htmlspecialchars(mysqli_real_escape_string($conexion,$repass));
	
			$query1=" select * from usuarios where nom_user='$user_name' ";
			if(mysqli_query($conexion,$query1))
			{
				$query2= "insert into usuarios (nom_user,nombre,Apellido_pat,Apellido_mat,edad,password,id_tipo_user,id_status_user) 
				values ('$user_name','$name','$apell_pat','$apell_mat','$edad','$pass',2,1)";

				if(mysqli_query($conexion,$query2))
				{
					header('Location: index.html');
				}	

			}
			else
			{
			 	echo "Error: " . $query1 . "<br>" . mysqli_error($conexion);
			}
		
		}
		else
		{
			header('Location: Registrar.html');
			echo 'contrasena no coincide';
		}	


	$conexion=null;
?>