<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Inicio</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <center><h2 class="mb-5">Tabla de Votantes</h2></center>
      <form action="login.php" method="POST">
					
					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Buscador</span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Buscar
						</button>
					</div>
				</form>

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <th scope="col">nNombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Cedula</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col">Fecha de Inscripcion</th>
              <th scope="col">desc_loc</th>
              <th scope="col">Local</th>
              <th scope="col">Numero de Celular</th>
              <th scope="col">Barrio</th>
              <th scope="col">Direccion</th>
              <th scope="col">Registrado Por:</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row" class="active">
              <td>
                <label class="control control--checkbox">
                <input type="checkbox" />
                <div class="control__indicator"></div>
                </label>
              </td>
              <td>
             nombre
              </td>
              <td class="pl-0">
                <div class="d-flex align-items-center">
                  

                  <a href="#" class="name">apellido</a>
                </div>
              </td>
              <td>
                Web Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+63 983 0962 971</td>
              <td>NY University</td>
              <td>
                <label class="custom-control ios-switch">
                  <input type="checkbox" class="ios-switch-control-input" checked="">
                  <span class="ios-switch-control-indicator"></span>
                  </label>
              </td>
            
            </tr>
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>