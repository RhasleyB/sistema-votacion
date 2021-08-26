<?php 
    
    session_start();

    require 'db.php';

    $query = $conn->prepare('SELECT id, nombre, apellido, cedula, fec_nac, fec_inscri, des_loc, local, nro_celular, barrio, direccion, iduser FROM votantes');
    $query = $query->fetch(PDO::FETCH_ASSOC);
    // ($query->num_rows > 0)
    if(!empty($query)){
        $delimiter = ",";
        $filename = "votantes" . date('Y-m-d') . ".csv";
        
        //create a file pointer
        $f = fopen('php://memory', 'w');
        
        //set column headers
        $fields = array('id', 'nombre', 'apellido', 'cedula', 'fec_nac', 'fec_inscri', 'des_loc', 'local', 'nro_celular', 'barrio', 'direccion', 'iduser');
        fputcsv($f, $fields, $delimiter);
        
        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            $lineData = array($row['id'], $row['nombre'], $row['apellido'], $row['cedula'], $row['fec_nac'], $row['fec_inscri'],$row['des_loc'], $row['local'] ,$row['nro_celular'], $row['barrio'], $row['direccion'], $row['iduser']);
            echo $lineData;
            fputcsv($f, $lineData, $delimiter);
        }
        
        //move back to beginning of file
        fseek($f, 0);
        
        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        
        //output all remaining data on a file pointer
        fpassthru($f);
    }

    exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Archivo Descargado</h1></center>
</body>
</html>