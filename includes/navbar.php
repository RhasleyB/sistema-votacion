<?php 
     session_start();
  
     require 'includes/connection.php';
     
     if(!$_SESSION['user_id']){
       header('Location: login.php');
     }
?>

<!-- LARGE -->
<header>
  <nav id="navbar-pc" class="navbar navbar-light bg-light px-3">
    <a class="navbar-brand" href="#">Dottaz</a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Buscar Votantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="votante.php">Registro de Votantes</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="includes/logout.php">Cerrar Sesion</a>
      </li>
    </ul>
  </nav>

  <!-- SMALL -->

  <nav id="navbar-mobile" class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Offcanvas navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </nav>
</header>