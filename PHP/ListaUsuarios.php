<?php
echo ('<!DOCTYPE html>
<html>
<head>
	<title>Menú de usuarios</title>
	<link rel="stylesheet" href="../css/menu.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="../PHP/ListaUsuarios.php">Mostrar lista de usuarios</a></li>
			<li><a href="../paginas/AgregarUsuarios.html">Agregar usuario</a></li>
			<li><a href="#">Editar usuario</a></li>
			<li><a href="EliminarUsuarios.html">Eliminar usuario</a></li>
            <li><a href="../PHP/ListaMedicamentos.php" >Medicamentos</a></li>
            <li><a href="../PHP/GenerarDocumento.php">Generar Documento</a></li>
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
$result = mysqli_query($conexion, "select * from usuario");

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
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo electrónico</th><th>pass</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_usuario"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["email"] . "</td><td>" . $row["pass"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron usuarios.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
