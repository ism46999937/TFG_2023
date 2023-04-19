<?php
session_start();
require("Datosconexión.php");

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");


// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["correo"];
    $pass = $_POST["password"];


    // Insertar el nuevo usuario en la base de datos
    if (mysqli_query($conexion, "insert into usuario (nombre, pass, email) VALUES ('$nombre', '$pass', '$email')")) {
        alert('Usuario agregado correctamente.');
        header('Location: ../paginas/Menuinterno.html');
    } else {
        echo "Error al agregar usuario: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
