<?php

echo ('<!DOCTYPE html>
<html>
<head>
	<title>Lista de usuarios</title>
	<link rel="stylesheet" href="../css/menu.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="../PHP/ListaUsuarios.php">Mostrar lista de usuarios</a></li>
			<li><a href="../paginas/AgregarUsuarios.html">Agregar usuario</a></li>
            <li><a href="../PHP/ListaMedicamentos.php" >Medicamentos</a></li>
            <li><a href="../PHP/Paciente.php">Generar Receta</a></li>
			<li><a href="../PHP/ListaParafarmacia.php">Parafarmacia</a></li>
			<li><a href="../index.html" >Salir</a></li>
		</ul>
	</nav>
</body>
</html>');

echo('<br>');
echo('<br>');
echo('<br>');
// Establecer conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}


// Obtener información de los usuarios de la tabla
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexion, $sql);

// Actualizar información de un usuario si se ha enviado el formulario de edición
if(isset($_POST['editar_usuario'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];
    
    $sql = "UPDATE usuario SET nombre='$nombre', pass='$pass', email='$email', tipo_usuario='$tipo_usuario' WHERE id_usuario='$id'";
    $result = mysqli_query($conexion, $sql);
    header('Location: ListaUsuarios.php');
}

// Mostrar información de los usuarios en una tabla
echo "<table>";
echo    " <style>
        table {
            border-collapse: collapse;
            width: auto;
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
echo "<tr><th>ID</th><th>Nombre</th><th>Contraseña</th><th>Email</th><th>Tipo de Usuario</th><th></th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<form method='POST'>";
    echo "<tr>";
    echo "<td>" . $row['id_usuario'] . "<input type='hidden' name='id' value='" . $row['id_usuario'] . "'></td>";
    echo "<td><input type='text' name='nombre' value='" . $row['nombre'] . "'></td>";
    echo "<td><input type='password' name='pass' value='" . $row['pass'] . "'></td>";
    echo "<td><input type='email' name='email' value='" . $row['email'] . "'></td>";
    echo "<td><select name='tipo_usuario'>
            <option value='1'" . ($row['tipo_usuario'] == 1 ? 'selected' : '') . ">Administrador</option>
            <option value='2'" . ($row['tipo_usuario'] == 2 ? 'selected' : '') . ">Usuario</option>
          </select></td>";
    echo "<td><input type='submit' name='editar_usuario' value='Editar'></td>";
    echo "</tr>";
    echo "</form>";
}
echo "</table>";

// Cerrar conexión con la base de datos
mysqli_close($conexion);

?>