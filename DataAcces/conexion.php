<?php
$servername = "192.168.1.13";
$username = "YEET";
$password = "YEET"; // Reemplaza "tu_contraseña" con la contraseña del usuario
$dbname = "API_WWE"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
