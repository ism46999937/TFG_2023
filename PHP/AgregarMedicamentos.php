<?php
session_start();
require("Datosconexión.php");

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");


// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $ingredientes = $_POST['ingredientes'];
    $tipo = $_POST['tipo'];
    $dosis = $_POST['dosis'];
    $efectos = $_POST['efectos'];
    $contraindicaciones = $_POST['contraindicaciones'];
    $codigo = $_POST['codigo'];


    // Insertar el nuevo usuario en la base de datos
    if (mysqli_query($conexion, "insert INTO Medicamentos 
    (Nombre_Medicamento, Ingredientes, Tipo_medicamento, Dosis_recomendada, EfectosSecundarios, Contraindicaciones, CodigodeBarrasMed) 
    VALUES ('$nombre', '$ingredientes', '$tipo', '$dosis', '$efectos', '$contraindicaciones', '$codigo')")) {
        echo "El medicamento se agregó correctamente";
        header('Location: ListaUsuarios.php');
    } else {
        echo "Error al agregar usuario: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>