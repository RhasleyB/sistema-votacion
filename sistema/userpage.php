<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
$connection = mysqli_connect("localhost", "root", "", "sistema");

?>
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

    <style>
        * {
          box-sizing: border-box;
        }

        #myInput {
          background-image: url('/css/searchicon.png');
          background-position: 10px 10px;
          background-repeat: no-repeat;
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }

        #myTable {
          border-collapse: collapse;
          width: 100%;
          border: 1px solid #ddd;
          font-size: 18px;
        }

        #myTable th,
        #myTable td {
          text-align: left;
          padding: 12px;
        }

        #myTable tr {
          border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
          background-color: #f1f1f1;
        }
      </style>
  </head>
  <body>
  <header>
    <a href="logout.php">Cerrar Sesion</a>
  </header>

  <div class="content">
    
    <div class="container">
      <center><h2 class="mb-5">Tabla de Votantes</h2></center>

					
					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario valido">
						<input id="myInput" class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Buscador</span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="myFunction()">
							Buscar
						</button>
					</div>
          <br>
          <center><a href="registerpage.php">Registrar Votante</a><br><br><a href="downregister.php">Descargar Registros</a></center>
          <br>


      <div class="table-responsive">
      
      <table class="table table-striped custom-table">
          <table id="myTable">
            <thead class="thead">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Fecha de Inscripcion</th>
                <th scope="col">Descripcion local</th>
                <th scope="col">Local</th>
                <th scope="col">Numero de Celular</th>
                <th scope="col">Barrio</th>
                <th scope="col">Direccion</th>
              </tr>
            </thead>
            <?php foreach ($link->query('SELECT * from votantes') as $row){ // aca puedes hacer la consulta e iterarla con each. 
              ?>
            <tr>
              <td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable. ?></td>
              <td><?php echo $row['nombre'] ?></td>
              <td><?php echo $row['apellido'] ?></td>
              <td><?php echo $row['cedula'] ?></td>
              <td><?php echo $row['fec_nac'] ?></td>
              <td><?php echo $row['fec_inscri'] ?></td>
              <td><?php echo $row['des_loc'] ?></td>
              <td><?php echo $row['local'] ?></td>
              <td><?php echo $row['nro_celular'] ?></td>
              <td><?php echo $row['barrio'] ?></td>
              <td><?php echo $row['direccion'] ?></td>
            </tr>
            <?php
              }
              ?>
            
          </table>
      </div>
      <?php
          function consulta($connection) {
            $query_rows = "SELECT *  FROM votantes";
      
            // Execute the query and store the result set
            $result = mysqli_query($connection, $query_rows);
                  
            if ($result) {
               // it return number of rows in the table.
               $row = mysqli_num_rows($result);
                      
              if ($row) {
                printf("Cantidad de Registros : " . $row);
               }
               
            }
          }
          consulta($connection);
      ?>
    </div>

  </div>

  <script>
            function myFunction() {
              var input, filter, table, tr, td, cell, i, j;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";

                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) {
                  cell = tr[i].getElementsByTagName("td")[j];
                  if (cell) {
                    if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                      break;
                    }
                  }
                }
              }
            }
   </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>