<?php 
	include 'opendata.php';
	if(isset($_POST['register'])){
		if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido_p']) >= 1 && strlen($_POST['apellido_m']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass'])>=1) {
		 $name=$_POST['name'];
		 $email=$_POST['email'];
		 $passw=$_POST['pass'];
		 $a_pp=$_POST['apellido_p'];
		 $a_pm=$_POST['apellido_m'];

		 $consulta="INSERT INTO usuario(email, Nombre, password,apellido_p,apellido_m) VALUES ('$email','$name','$passw','$a_pp','$a_pm')";
		 $result=mysqli_query($conex,$consulta);
		 if ($result) {
		 	?>	
		 		<h3 class="ok">Registro éxitoso</h3>
		 	<?php
		 }else{
		 	?>	
		 		<h3 class="bad">Algo fallo, vuelve a intentarlo</h3>
		 	<?php
		 }
		}
		else{
			?>
				<h3 class="ans">Responde todo el formulario </H3>
			<?php
		}
	}
	
?>