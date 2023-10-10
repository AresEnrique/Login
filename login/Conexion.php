<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $conexion = new mysqli("localhost", "root", "", "usuario");

    // Ares Enrique Farrera Jimenez
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $consulta = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

    if ($conexion->query($consulta) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }
    $conexion->close();
}
?>
