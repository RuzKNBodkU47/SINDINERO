<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
	<section class="form-Register" >
		<h4>Formulario de Registro</h4>
		<form  class="form-horizontal" method="POST">
		
		<input class="controls" type="text" name="email" placeholder="Email">
		<input class="controls"type="text" name="name" placeholder="Nombre ">
		<input class="controls" type="text" name="apellido_p" placeholder="Apeliido_paterno">
		<input class="controls" type="text" name="apellido_m" placeholder="Apellido_materno">
		<input class="controls"type="password" name="pass" placeholder="Contraseña">
		<input type="submit" name="register" class="btn btn-primary">
		<a href="login.php">¿Ya tienes una cuenta?</a>
		
		</form>
		</section>


<?php 
	include 'registrar.php';
?>
	
</body>
</html>