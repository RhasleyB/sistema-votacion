<?php 

session_start();

require 'db.php';

$message = '';
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['cedula']) && !empty($_POST['fec_nac']) && !empty($_POST['fec_inscri']) && !empty($_POST['des_loc']) && !empty($_POST['local']) && !empty($_POST['nro_celular']) && !empty($_POST['barrio']) && !empty($_POST['direccion'])) {
  $sql = "INSERT INTO votantes (nombre, apellido, cedula, fec_nac, fec_inscri, des_loc, local, nro_celular, barrio, direccion, iduser) VALUES (:nombre, :apellido, :cedula, :fec_nac, :fec_inscri, :des_loc, :local, :nro_celular, :barrio, :direccion, :iduser)";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':cedula', $_POST['cedula']);
  $stmt->bindParam(':fec_nac', $_POST['fec_nac']);
  $stmt->bindParam(':fec_inscri', $_POST['fec_inscri']);
  $stmt->bindParam(':des_loc', $_POST['des_loc']);
  $stmt->bindParam(':local', $_POST['local']);
  $stmt->bindParam(':nro_celular', $_POST['nro_celular']);
  $stmt->bindParam(':barrio', $_POST['barrio']);
  $stmt->bindParam(':direccion', $_POST['direccion']);
  $stmt->bindParam(':iduser', $_SESSION['user_id']);
  
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
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #fff;">
	
<form action="registerpage.php" method="POST">
					<span class="login100-form-title p-b-43">
						Registrar Votante
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="nombre">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre/s</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="apellido">
						<span class="focus-input100"></span>
						<span class="label-input100">Apellido/s</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="cedula">
						<span class="focus-input100"></span>
						<span class="label-input100">Numero Cedula</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="date" name="fec_nac">
						<span class="focus-input100"></span>
						<span class="label-input100">Fecha de Nacimiento</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="date" name="fec_inscri">
						<span class="focus-input100"></span>
						<span class="label-input100">Fecha de Inscripcion</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="des_loc">
						<span class="focus-input100"></span>
						<span class="label-input100">Descripcion del Local</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="local">
						<span class="focus-input100"></span>
						<span class="label-input100">Local</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="nro_celular">
						<span class="focus-input100"></span>
						<span class="label-input100">Numero de Celular</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="barrio">
						<span class="focus-input100"></span>
						<span class="label-input100">Barrio</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input class="input100" type="text" name="direccion">
						<span class="focus-input100"></span>
						<span class="label-input100">Direccion</span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Registrar Votante
						</button>
					</div>
				</form>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>