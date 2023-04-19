<?php
session_start();
require("Datosconexión.php");

// Conexión a la base de datos
$conexion = mysqli_connect($server, $user, $pass, $db);

// Verificación de errores de conexión
if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

if (isset($_POST['username'])) {

    $username = $_POST['username'];
	echo($username);
    $password = $_POST['password'];
	echo($password);

    $resultado = mysqli_query($conexion, "select * from usuario where nombre='$username'");

    if (mysqli_num_rows($resultado) == 1) {
        // Inicio de sesión exitoso
        $_SESSION['username'] = $username;
        header('Location: ../paginas/Menuinterno.html');
    } else {
        // Error de inicio de sesión
        echo "Usuario o contraseña incorrectos.";
		header('Location: ../index2.html');
    }
}

?>
