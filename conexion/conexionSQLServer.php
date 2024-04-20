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
