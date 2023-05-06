<?php
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");

// Comprobar la conexión
if (!$conexion) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario
$id = $_POST["ID"];
$Nom = $_POST["Nombre"];
$DNI = $_POST["DNIPaciente"];
$N_MED = $_POST["Nombre_Medicamento"];
$CBMED = $_POST["CodigodeBarrasMed"];
$Dosis = $_POST["Dosis_recomendada"];
$CBRE = $_POST["CodigodeBarrasReceta"];

// Validar los datos
if (empty($id) || empty($Nom) || empty($DNI) || empty($N_MED) || empty($CBMED) || empty($Dosis) || empty($CBRE)) {
  die("Todos los campos son obligatorios.");
}

//Aqui creamos la tabla donde vamos a guardar la información temporalmente.

$sql = "CREATE TABLE Temporal (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar (255),
    DNIPaciente varchar (255),
    Nombre_Medicamento varchar (255),
    CodigodeBarrasMed BIGINT,
    Dosis_recomendada varchar (255),
    CodigodeBarrasReceta BIGINT
  )";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada correctamente.";
  } else {
    echo "Error al crear la tabla: " . mysqli_error($conexion);
  }
if (mysqli_query($conexion, "insert into Temporal (id, Nombre, DNIPaciente,Nombre_Medicamento,CodigodeBarrasMed, Dosis_recomendada, CodigodeBarrasReceta) 
  VALUES ($id, '$Nom', '$DNI', '$N_MED', '$CBMED', '$Dosis', '$CBRE')")) 
  {
  echo ("Datos Agregados correctamente");
} else {
  echo "Error al Introducir Datos:".mysqli_error($conexion);
}
