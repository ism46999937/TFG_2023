<?php
session_start();
require("Datosconexión.php");

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");


// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $ingredientes = $_POST['Funcion'];
    $dosis = $_POST['dosis_recomendada'];
    $efectos = $_POST['efectos_secundarios'];
    $contraindicaciones = $_POST['contraindicaciones'];
    $codigo = $_POST['CodigodeBarrasPar'];


    // Insertar el nuevo usuario en la base de datos
    if (mysqli_query($conexion, "insert INTO Parafarmacia 
    (Nombre, Funcion, Dosis_recomendada, EfectosSecundarios, Contraindicaciones, CodigodeBarrasPar) 
    VALUES ('$nombre', '$ingredientes', '$tipo', '$dosis', '$efectos', '$contraindicaciones', '$codigo')")) {
        echo "El medicamento se agregó correctamente";
        header('Location: ../paginas/Menuinterno.html');
    } else {
        echo "Error al agregar usuario: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>