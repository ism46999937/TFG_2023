<?php
echo ('<!DOCTYPE html>
<html>
<head>
	<title>Lista de Medicamentos</title>
	<link rel="stylesheet" href="../CSS/menu.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="../PHP/ListaUsuarios.php">Mostrar lista de usuarios</a></li>
			<li><a href="../paginas/AgregarUsuarios.html">Agregar usuario</a></li>
            <li><a href="../PHP/ListaMedicamentos.php" >Medicamentos</a></li>
            <li><a href="../paginas/DNIPaciente.html">Generar Receta</a></li>
            <li><a href="../PHP/ListaParafarmacia.php">Parafarmacia</a></li>
			<li><a href="../index.html" >Salir</a></li>
        </ul>
	</nav>
</body>
</html>');

echo('<br>');
echo('<br>');
echo('<br>');

$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");
// Consulta para obtener los usuarios
$result = mysqli_query($conexion, "select * from Medicamentos");

// Imprimir la tabla de usuarios
if (mysqli_num_rows($result) > 0) {
    echo    " <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        } 
    </style>";
    echo('<br>');
    echo "<button class= 'button'><a href='../paginas/AgregarMedicamentos.html'>Agregar Medicamento</a></button>";
    echo('<br>');    echo('<br>');    echo('<br>');
    echo "<table>";
    echo "<tr><th>ID</th><th>Farmaco</th><th>Principio Activo</th><th>Accion de medicamento</th><th>Dosis recomendada</th><th>Efectos Secundarios</th><th>Contra indicaciones</th><th>Codigo de Barras</th><th>Eliminar Medicamento</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["ID"] . "</td>"."<td>" . $row["Nombre_Medicamento"] . "</td>"."<td>" . $row["Ingredientes"] . "</td>"."<td>" . $row["Tipo_medicamento"] . "</td>".
        "<td>" . $row["Dosis_recomendada"] . "</td>"."<td>" . $row["EfectosSecundarios"] . "</td>"."<td>" . $row["Contraindicaciones"] .
         "</td>"."<td>" .'<img src="barcode.php?text='. $row["CodigodeBarrasMed"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>".
         "<td><button class='button'><a href='EliminarMedicamento.php?id=" . $row["ID"] . "'>Eliminar</a></button></td>"."</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron Medicamentos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>