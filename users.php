<?php

  require 'includes/connection.php';

  $message = '';

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">

        <?php include 'includes/navbar.php'?>

        <div class="content">     
            <div class="mb-3">
            <h1>Registrar Usuarios</h1>
            <hr>
                <form action="votante.php" method="POST">
                    <label class="form-label">Nombre del Usuario</label>
                    <input type="text" class="form-control" name="username" required>

                    <label class="form-label">Contrasena</label>
                    <input type="password" class="form-control" name="password" required>

                    <label class="form-label">Confirmar Contrasena</label>
                    <input type="password" class="form-control" name="confirm_password" required>

                    <br>
                    <center><button type="submit" class="btn btn-primary">Registrar Usuario</button></center>
                </form>
            </div>
        </div>
    </div>

<script src="/js.bootstrap.js"></script>
</body>
</html>