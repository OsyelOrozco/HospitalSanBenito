<?php
$host = 'localhost';
$dbname = 'libreria';
$username = 'root';
$password = '';
$base_de_datos = 'prueba';

// Conexión a la base de datos
$conexion = new mysqli($host, $username, $password, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombres"];
$email = $_POST["emails"];
$contraseña = $_POST["contraseñas"];

// Consulta SQL para insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Usuario creado exitosamente";
} else {
    echo "Error al crear el usuario: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

?>

