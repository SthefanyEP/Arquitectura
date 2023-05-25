<?php
 echo "<link rel=stylesheet href=css/login.css>";
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

// Obtener los datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // El usuario ya existe
    echo "<h2>El nombre de usuario ya está en uso.</h2>";
} else {
    // El usuario no existe, se puede registrar
    // Hashear la contraseña antes de almacenarla
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertar los datos del usuario en la base de datos
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        // Registro exitoso
        echo "Registro exitoso. ¡Bienvenido!";
    } else {
        // Error en el registro
        echo "Error en el registro: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>