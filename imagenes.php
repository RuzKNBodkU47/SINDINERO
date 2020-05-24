<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                if (isset($_REQUEST['guardar'])) {
                    if (isset($_FILES['foto']['name'])) {
                        $tipoArchivo = $_FILES['foto']['type'];
                        $nombreArchivo = $_FILES['foto']['name'];
                        $tamanoArchivo = $_FILES['foto']['size'];
                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                        include "opendata.php";
                        $binariosImagen = mysqli_escape_string($conex, $binariosImagen);
                        $query = "INSERT INTO imagenes (nombre            ,imagen                 ,tipo) values 
                                                         ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');
                            ";
                        $res = mysqli_query($conex, $query);
                        if ($res) {
                        ?>
                            <h3>Registro éxitoso</h3>
                        <?php
                        } else {
                        ?>
                           <h3>Algo valio vergui</h3>
                        <?php

                        }
                    }
                }else{
                    ?>
                        <h3>No haz seleccionado elementos.</h3>
                    <?php
                }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
