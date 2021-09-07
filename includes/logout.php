<?php
  // DESTRUYENDO SESION DE USUARIO Y REGRESANDO A LOGIN PAGE
  session_start();
  session_unset();
  session_destroy();

  header('Location: ../login.php');
?>