<?php
// Establecer la conexión a la base de datos

$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el id del usuario a eliminar
$id_MED = $_GET['id'];

// Eliminar el usuario de la base de datos
if (mysqli_query($conexion,"delete from Medicamentos where ID = $id_MED")) {
    echo "El Medicamento ha sido eliminado exitosamente";
    header('Location: ListaMedicamentos.php');
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
