<?php
// Iniciar sesión para almacenar mensajes
session_start();

// Configuración de la conexión a la base de datos
$host = 'localhost';
$db = 'registro_mascotas'; // Nombre de la base de datos
$user = 'root'; // Tu usuario de base de datos
$pass = ''; // Tu contraseña de base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $nombre_usuario = $conn->real_escape_string($_POST['nombre_usuario']);
    $nombre_mascota = $conn->real_escape_string($_POST['nombre_mascota']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $patologia = $conn->real_escape_string($_POST['patologia']);

    // Insertar los datos en la tabla
    $sql = "INSERT INTO mascotas (nombre_usuario, nombre_mascota, telefono, direccion, patologia)
            VALUES ('$nombre_usuario', '$nombre_mascota', '$telefono', '$direccion', '$patologia')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['mensaje'] = "Registro guardado exitosamente.";
        $_SESSION['mensaje_tipo'] = "success"; // Tipo de mensaje para el estilo
    } else {
        $_SESSION['mensaje'] = "Error: " . $conn->error;
        $_SESSION['mensaje_tipo'] = "danger"; // Tipo de mensaje para el estilo
    }

    // Redirigir de nuevo al formulario
    header("Location: formulario.php"); // Cambia 'formulario.php' al nombre de tu archivo de formulario
    exit();
}

// Cerrar conexión
$conn->close();
?>