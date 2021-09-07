<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Registrar Votantes</title>

</head>
<body>

    <div class="wrapper">

        <?php include 'includes/navbar.php'?>

        <div class="content">     
            <div class="mb-3">
            <h1>Formulario de Registro de Votantes</h1>
            <hr>
            <a href="includes/download.php" class="btn btn-success download">Descargar Registros</a><br><br>
                <form action="votante.php" method="POST">
                    <label class="form-label">Nombre del Votante</label>
                    <input type="text" class="form-control" name="nombre" required>

                    <label class="form-label">Apellido del Votante</label>
                    <input type="text" class="form-control" name="apellido" required>

                    <label class="form-label">Numero de Cedula</label>
                    <input type="text" class="form-control" name="cedula" required>

                    <label class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fec_nac" required>

                    <label class="form-label">Fecha de Inscripcion</label>
                    <input type="date" class="form-control" name="fec_inscri" required>

                    <label class="form-label">Descripcion del Local</label>
                    <input type="text" class="form-control" name="des_loc" required>

                    <label class="form-label">Local</label>
                    <input type="text" class="form-control" name="local" required>

                    <label class="form-label">Numero de Celular</label>
                    <input type="text" class="form-control" name="nro_celular" required>

                    <label class="form-label">Barrio</label>
                    <input type="text" class="form-control"name="barrio" required>

                    <label class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" required>
                    <br>
                    <center><button type="submit" class="btn btn-primary">Registrar Votante</button></center>
                    <?php if(isset($message)) {
                        echo $message;
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <!-- INCLUYENDO JAVASCRIPT -->
    <script src="/js.bootstrap.js"></script>
</body>
</html>