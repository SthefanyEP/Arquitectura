<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "sthefany";
$password = "123456";
$database = "mydatabase";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener las credenciales del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

// Verificar si se encontró un usuario con ese nombre de usuario
if ($result->num_rows == 1) {
    // Obtener los datos del usuario
    $row = $result->fetch_assoc();
    $hashedPassword = $row["password"];

    // Verificar la contraseña
    if (password_verify($password, $hashedPassword)) {
        // Contraseña válida, inicio de sesión exitoso
        echo "Inicio de sesión exitoso. ¡Bienvenido!";
    } else {
        // Contraseña incorrecta
        echo "No se encontró el registro";
    }
} else {
    // No se encontró un usuario con ese nombre de usuario
    echo "No se encontró el registro";
}

// Cerrar la conexión
$conn->close();
?>