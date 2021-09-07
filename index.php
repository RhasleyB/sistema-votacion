<?php

require 'includes/connection.php';

  function consultaCantidad($conn) {
    $query_rows = "SELECT *  FROM votantes";
    $result = mysqli_query($conn, $query_rows);
          
    if ($result) {
       $row = mysqli_num_rows($result);             
      if ($row) {
        printf("Cantidad Total de Registros Encontrados: " . $row);
       }   
    }
  }
  
    try{
        $band = true;
        $records = $link->prepare('SELECT id, nombre, apellido, cedula, fec_nac, fec_inscri, des_loc, local, nro_celular, barrio, direccion, iduser FROM votantes WHERE cedula = :buscar');
        $records->bindParam(':buscar', $_POST['buscar']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        if($results == true && $_POST['buscar'] == $results['cedula']){
            $band = true;
        } else {
            $band = false;
        }
    } catch(Exception $e) {
        echo $e;
        $band = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INCLUYENDO CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Buscar Votantes</title>
</head>
<body>
    <div class="wrapper">

        <?php include 'includes/navbar.php'?>

        <div class="content">     
            <div class="mb-3">
            <h1>Buscador de Votantes</h1>
            <hr>
                <form action="index.php" method="POST">
                    <label class="form-label">Ingresar el Numero de Cedula del Votante</label>
                    <input type="text" class="form-control" name="buscar">
                    <br>
                    <center><button type="submit" class="btn btn-primary">Buscar Votante</button></center>
                    <br>
                </form>
                <div>
                    <?php 
                        consultaCantidad($connection);
                    ?>
                </div>
                <br>
                <div>
                <?php 
                if(!empty($_POST['buscar']) && $band == true) {?>
                    <ul class="list-group">
                        <li class="list-group-item"><b>ID:</b> <?php echo $results['id']?></li>
                        <li class="list-group-item"><b>Nombre:</b> <?php echo $results['nombre']?></li>
                        <li class="list-group-item"><b>Apellido:</b> <?php echo $results['apellido']?></li>
                        <li class="list-group-item"><b>Cedula:</b> <?php echo $results['cedula']?></li>
                        <li class="list-group-item"><b>Fecha de Nacimiento:</b> <?php echo $results['fec_nac']?></li>
                        <li class="list-group-item"><b>Fecha de Incripcion:</b> <?php echo $results['fec_inscri']?></li>
                        <li class="list-group-item"><b>Descripcion del Local:</b> <?php echo $results['des_loc']?></li>
                        <li class="list-group-item"><b>Local:</b> <?php echo $results['local']?></li>
                        <li class="list-group-item"><b>Numero de Celular:</b> <?php echo $results['nro_celular']?></li>
                        <li class="list-group-item"><b>Barrio:</b> <?php echo $results['barrio']?></li>
                        <li class="list-group-item"><b>Direccion:</b> <?php echo $results['direccion']?></li>
                        <li class="list-group-item"><b>Registrado Por:</b> <?php echo $results['iduser']?></li>
                </ul>
                <?php  } else {
                    echo "<center><h3>No Habilitado en Padron</h3></center>";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- INCLUYENDO JAVASCRIPT -->
    <script src="/js.bootstrap.js"></script>
</body>
</html>