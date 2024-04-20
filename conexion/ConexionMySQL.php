<?php
class Cconexion{
    function ConexionBD(){
        $host = 'localhost';
        $dbname = 'libreria';
        $username = 'root';
        $password = '';
        try{
            $conn = new PDO ("mysql:host=$host; dbname=$dbname",$username,$password);
        } catch(PDOException $exp){
            echo("No se logro conectar correctamente co la base de datos:$dbname, error:$exp");
        }
        return $conn;
    }
}

?>

