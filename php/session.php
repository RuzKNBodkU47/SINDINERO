<?php
	include('conexion.php');
	session_start();

	$user_check=$_SESSION['login_user'];

	$ses_sql = mysqli_query($db,"select nom_user from usuarios where nom_user='$user_check' ");
	
	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$login_session=$row['username'];

	if(!isset($_SESSION['login_user']))
	{
		header("Location: index.html");
		die();
	}
?>