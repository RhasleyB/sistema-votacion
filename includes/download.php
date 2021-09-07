<?php 
    
    session_start();
  
    require 'connection.php';

    if(!$_SESSION['user_id']){
        header('Location: login.php');
    }

    $records = $link->prepare('SELECT id, nombre, apellido, cedula, fec_nac, fec_inscri, des_loc, local, nro_celular, barrio, direccion, iduser FROM votantes WHERE iduser = :iduser');
    $records->bindParam(":iduser", $_SESSION['user_id']);
    $records->execute();
    //$records = mysqli_query($connection, $query);
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (isset($_SESSION['user_id'])) {

        echo 'ID'.','.'NOMBRE/S'.','.'APELLIDO/S'.','.'CEDULA'.','.'FECHA/NACIMIENTO'.','.'FECHA/INSCRIPCION'.','.'DESCRIPCION/LOCAL'.','.'LOCAL'.','.'NUMERO/CELULAR'.','.'BARRIO'.','.'DIRECCION'.','.'VOTANTE/CREADO/POR'."\n";

        foreach ($results as $row){
            
            echo $results['id'].','.$results['nombre'].','.$results['apellido'].','.$results['cedula'].','.$results['fec_nac'].','.$results['fec_inscri'].','.$results['des_loc'].','.$results['local'].','.$results['nro_celular'].','.$results['barrio'].','.$results['direccion'].','.$results['iduser']."\n";
        }
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=report.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
    }

    exit;
    
?>