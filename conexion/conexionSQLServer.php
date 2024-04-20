<?php

class Cconexion{

    function ConexionBD(){

    $host='localhost';
    $dbname='libreria';
    $username='userphp';
    $password='1234';
    $port= 1433;

    try{

        $conn = new PDO("sqlsrv:Server=$host,$port;Database=$dbname", $username,$password);
        echo("Bien");
        

    }catch(PDOException $exp){

        echo ("No se logro conectar correctamente con la base de datos: $dbname, error: $exp");

    } 

    return $conn;

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        include_once ("conexionSQLServer.php"); 
        $conexion = new Cconexion();
    
        // Llamar al método ConexionBD() en la instancia creada
        $conexion->ConexionBD();

    
    ?>
</body>
</html>