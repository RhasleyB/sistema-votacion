<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }

  require 'includes/connection.php';
  
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $records = $link->prepare('SELECT id, username, password FROM users WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");
    } else {
		  $mensaje = '';
      $mensaje = 'Credenciales Incorrectas';
    }
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
    
    <title>Login Page</title>
</head>
<body>
    
    <div class="container container-login">
        <div class="card">
            <form action="login.php" method="POST">
                <div class="logo-image">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contrasena</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                    
                <center><button type="submit" class="btn btn-primary">Iniciar Sesion</button></center>
            </form>
        </div>
    </div>  
    
    <!-- INCLUYENDO JAVASCRIPT -->

    <script src="/js.bootstrap.js"></script>
</body>
</html>