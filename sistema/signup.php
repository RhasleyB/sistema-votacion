<?php

  require 'db.php';

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
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrar Nuevo Usuario</h1>

    <form action="signup.php" method="POST">
      <input name="username" type="text" placeholder="Ingresar Nombre de Usuario">
      <input name="password" type="password" placeholder="Ingresar Contrasena de Usuario">
      <input name="confirm_password" type="password" placeholder="Confirmar Contrasena">
      <input type="submit" value="Registrar">
    </form>

  </body>
</html>