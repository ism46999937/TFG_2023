<?php
// Establecer la conexión a la base de datos

$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el id del usuario a eliminar
$idUser = $_GET['id'];

// Eliminar el usuario de la base de datos
if (mysqli_query($conexion,"delete from usuario where id_usuario = $idUser")) {
    echo "El usuario ha sido eliminado exitosamente";
    header('Location: ListaUsuarios.php');
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
