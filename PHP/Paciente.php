<?php
echo ('<!DOCTYPE html>
<html>
<head>
	<title>Receta Paciente</title>
	<link rel="stylesheet" href="../css/menu.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"> </script>
    <script type="text/javascript" src="../js/Paciente.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="../PHP/ListaUsuarios.php">Mostrar lista de usuarios</a></li>
			<li><a href="../paginas/AgregarUsuarios.html">Agregar usuario</a></li>
            <li><a href="../PHP/ListaMedicamentos.php" >Medicamentos</a></li>
            <li><a href="../paginas/DNIPaciente.html">Generar Receta</a></li>
            <li><a href="../PHP/GenerarDocumento.php">GenerarPDF</a></li>
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
$dni_paciente = $_POST['dni_paciente'];
$result = mysqli_query($conexion, "select * FROM Recetas WHERE DNIPaciente = '$dni_paciente'");

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
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>DNIPaciente</th><th>Nombre_Medicamento</th><th>CodigodeBarrasMed</th><th>Dosis_recomendada</th><th>CodigodeBarrasReceta</th><th>Añadir</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["ID"] . "</td>"."<td>" . $row["Nombre"] . "</td>"."<td>" . $row["DNIPaciente"] . "</td>"."<td>" . $row["Nombre_Medicamento"] . "</td>".
        "<td>" . '<img src="barcode.php?text='.$row["CodigodeBarrasMed"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>" . $row["Dosis_recomendada"] . "</td>"."<td>" .'<img src="barcode.php?text='.$row["CodigodeBarrasReceta"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>"

        .'<form method="POST" action="guardar_fila.php">
          <input type="hidden" name="ID" value='.$row["ID"].'>
          <input type="hidden" name="Nombre" value='.$row["Nombre"].'>
          <input type="hidden" name="DNIPaciente" value='.$row["DNIPaciente"].'>
          <input type="hidden" name="Nombre_Medicamento" value='.$row["Nombre_Medicamento"].'>
          <input type="hidden" name="CodigodeBarrasMed" value='.$row["CodigodeBarrasMed"].'>
          <input type="hidden" name="Dosis_recomendada" value='.$row["Dosis_recomendada"].'>
          <input type="hidden" name="CodigodeBarrasReceta" value='. $row["CodigodeBarrasReceta"].'>
          <button type="submit" id="BotonAñadir">Añadir al documento</button>
          <input type="checkbox">
        </form>'."</td>"."</tr>";
    }
    echo "</table>";
}
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>