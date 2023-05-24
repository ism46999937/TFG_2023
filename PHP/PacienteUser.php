<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="../images/posible_logo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="../../AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="./estilos2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  <style>
    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav ul {
      list-style-type: none;
      margin-left: 0%;
      padding: 0;
      display: flex;
      justify-content: space-between;
    }

    #men {
      list-style-type: none;
      margin-left: 20%;
      padding: 0;
      display: flex;
      justify-content: space-between;
    }

    nav li {
      float: left;
    }

    nav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav li a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
  <link rel="stylesheet" href="../plugins/bootstrap/js/bootstrap.min.js">
  <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <title>Menú de usuarios</title>
</head>

<body onload="mostrarNombreUsuario()">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Logo Proyecto -->
    <a href="../paginas/MenuinternoUser.php" class="brand-link">
      <img src="../images/posible_logo.png" alt="FarmaLogo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light col-md-2">PharmaApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-23 mb-3 d-flex">
        <div class="image">
          <img src="../images/usuario_login.png" class="img-circle elevation-2" alt="User Image">
        </div>

        <script>
          function obtenerNombreUsuario() {
            var nombreUsuario = "<?php session_start(); echo $_SESSION['username']; ?>"; // Obtener el nombre de usuario de la sesión en PHP
            return nombreUsuario;
          }
          function mostrarNombreUsuario() {
            var nombreUsuario = obtenerNombreUsuario();
            var elementoNombreUsuario = document.getElementById("nombre-usuario");
            elementoNombreUsuario.innerText = nombreUsuario;
          }

        </script>

        <div class="info">
          <a href="#" class="d-block col-md-2"> <span id="nombre-usuario"></span></a>

        </div>
      </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="../paginas/MenuinternoUSER.php" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Menu principal
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <!--<ul class="nav nav-treeview">-->
      <li class="nav-item">
        <a href="..\PHP\Usuarios/ListaMedicamentos.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p onclick="irdatabase()">Lista Medicamentos</p>
        </a>
      </li>
            <li class="nav-item">
        <a href="../paginas/DniPaciente.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p onclick="irdatabase()">Paciente</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="../PHP/Generarpdf.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p onclick="irdatabase()">GenerarPDF</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="..\PHP\Usuarios/Parafarmacia.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Listado de Parafarmacia</p>
        </a>
      </li>
          <li id="bottom">
            <i class="far fa-circle nav-icon"></i>
            <button class="btn bg-danger rounded" id="logout">Salir</button>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</body>
<!-- jQuery -->
<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge("uibutton", $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
<style>
  #bottom {
    margin-top: 50%;
    margin-left: 30%;
    bottom: 0;
  }
</style>

</html>;
<?php
echo('<br>');
echo('<br>');
echo('<br>');
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");


if(isset($_POST['Añadir_MedicamentO'])){

  $id = $_POST["ID"];
  $Nom = $_POST["Nombre"];
  $DNI = $_POST["DNIPaciente"];
  $N_MED = $_POST["Nombre_Medicamento"];
  $CBMED = $_POST["CodigodeBarrasMed"];
  $Dosis = $_POST["Dosis_recomendada"];
  $CBRE = $_POST["CodigodeBarrasReceta"];
  $dni_paciente= $_GET["id"];
  
  // Validar los datos
  if (empty($id) || empty($Nom) || empty($DNI) || empty($N_MED) || empty($CBMED) || empty($Dosis) || empty($CBRE)) {
    die("Todos los campos son obligatorios.");
  }
  
  //Aqui creamos la tabla donde vamos a guardar la información temporalmente.
  
  $sql = "CREATE TABLE  Temporal (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Nombre varchar (255),
      DNIPaciente varchar (255),
      Nombre_Medicamento varchar (255),
      CodigodeBarrasMed BIGINT,
      Dosis_recomendada varchar (255),   
      CodigodeBarrasReceta BIGINT
    )";
  
  if (mysqli_query($conexion, $sql)) {
   } else {
    }
  if (mysqli_query($conexion, "insert into Temporal (id, Nombre, DNIPaciente,Nombre_Medicamento,CodigodeBarrasMed, Dosis_recomendada, CodigodeBarrasReceta) 
    VALUES ($id, '$Nom', '$DNI', '$N_MED', '$CBMED', '$Dosis', '$CBRE')")) 
    {
    } else {
  
  }
  // Imprimir la tabla de usuarios
  $conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");
  $dni_paciente = $_GET['id'];
  $result = mysqli_query($conexion, "select * FROM Recetas WHERE DNIPaciente = '$dni_paciente'");
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
      echo "<tr><th>ID</th><th>Nombre</th><th>DNIPaciente</th><th>Nombre_Medicamento</th><th>CodigodeBarrasMed</th><th>Dosis_recomendada</th><th>CodigodeBarrasReceta</th><th>Añadir</th><th>Eliminar</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row["ID"] . "</td>"."<td>" . $row["Nombre"] . "</td>"."<td>" . $row["DNIPaciente"] . "</td>"."<td>" . $row["Nombre_Medicamento"] . "</td>".
          "<td>" . '<img src="Barcode2.php?text='.$row["CodigodeBarrasMed"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>" . $row["Dosis_recomendada"] . "</td>"."<td>" .'<img src="Barcode2.php?text='.$row["CodigodeBarrasReceta"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>"
  
          .'<form method="POST" action="../PHP/PacienteUser.php?id='.$dni_paciente.'&id2='. $row["ID"] .'" >
            <input type="hidden" name="ID" value='.$row["ID"].'>
            <input type="hidden" name="Nombre" value='.$row["Nombre"].'>
            <input type="hidden" name="DNIPaciente" value='.$row["DNIPaciente"].'>
            <input type="hidden" name="Nombre_Medicamento" value='.$row["Nombre_Medicamento"].'>
            <input type="hidden" name="CodigodeBarrasMed" value='.$row["CodigodeBarrasMed"].'>
            <input type="hidden" name="Dosis_recomendada" value='.$row["Dosis_recomendada"].'>
            <input type="hidden" name="CodigodeBarrasReceta" value='. $row["CodigodeBarrasReceta"].'>
            <script>
            function mostrarAlerta() {
              alert("Se ha añadido correctamente el dato a la tabla.");
            }
            function marcarCheckbox() {
              var checkbox = document.getElementById("myCheckbox");
              checkbox.checked = true;
            }
            
            function desmarcarCheckbox() {
              var checkbox = document.getElementById("myCheckbox");
              checkbox.checked = false;
            }
            function añadir() {
              mostrarAlerta();
              marcarCheckbox();
            }
          </script>
            <button type="submit" name="Añadir_MedicamentO" id="BotonAñadir" onclick="añadir()">Añadir al documento</button>
            <td><button type="submit" name="eliminarRegistro" id="BotonAñadir onclick="desmarcarCheckbox()">Eliminar del Documento</button></td>
            </form>'."</td>"."</tr>";
      }
      echo "</table>";
  }
  }

  if(isset($_POST['eliminarRegistro'])){
    // Obtener el ID del registro a eliminar
    $dni_paciente = $_GET['id2'];
  
    // Ejecutar la consulta
    if (mysqli_query($conexion, "delete from Temporal where id = '$dni_paciente'")) {
      echo '<script>alert("Se ha eliminado correctamente el registro de la tabla Temporal.");</script>';
    } else {
      echo '<script>alert("Error al eliminar el registro.");</script>';
    }

    $dni_paciente = $_GET['id'];
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
        echo "<tr><th>ID</th><th>Nombre</th><th>DNIPaciente</th><th>Nombre_Medicamento</th><th>CodigodeBarrasMed</th><th>Dosis_recomendada</th><th>CodigodeBarrasReceta</th><th>Añadir</th><th>Eliminar</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["ID"] . "</td>"."<td>" . $row["Nombre"] . "</td>"."<td>" . $row["DNIPaciente"] . "</td>"."<td>" . $row["Nombre_Medicamento"] . "</td>".
            "<td>" . '<img src="Barcode2.php?text='.$row["CodigodeBarrasMed"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>" . $row["Dosis_recomendada"] . "</td>"."<td>" .'<img src="Barcode2.php?text='.$row["CodigodeBarrasReceta"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>"

            .'<form method="POST" action="../PHP/PacienteUser.php?id='.$dni_paciente.'&id2='. $row["ID"] .'"" >
              <input type="hidden" name="ID" value='.$row["ID"].'>
              <input type="hidden" name="Nombre" value='.$row["Nombre"].'>
              <input type="hidden" name="DNIPaciente" value='.$row["DNIPaciente"].'>
              <input type="hidden" name="Nombre_Medicamento" value='.$row["Nombre_Medicamento"].'>
              <input type="hidden" name="CodigodeBarrasMed" value='.$row["CodigodeBarrasMed"].'>
              <input type="hidden" name="Dosis_recomendada" value='.$row["Dosis_recomendada"].'>
              <input type="hidden" name="CodigodeBarrasReceta" value='. $row["CodigodeBarrasReceta"].'>
              <script>
              function mostrarAlerta() {
                alert("Se ha añadido correctamente el dato a la tabla.");
              }
              function marcarCheckbox() {
                var checkbox = document.getElementById("myCheckbox");
                checkbox.checked = true;
              }
              
              function desmarcarCheckbox() {
                var checkbox = document.getElementById("myCheckbox");
                checkbox.checked = false;
              }
              function añadir() {
                mostrarAlerta();
                marcarCheckbox();
              }
            </script>
              <button type="submit" name="Añadir_MedicamentO" id="BotonAñadir" onclick="añadir()">Añadir al documento</button>
              <td><button type="submit" name="eliminarRegistro" id="BotonAñadir onclick="desmarcarCheckbox()">Eliminar del Documento</button></td>

             </form>'."</td>"."</tr>";
        }
        echo "</table>";
}
  }

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
    echo "<tr><th>ID</th><th>Nombre</th><th>DNIPaciente</th><th>Nombre_Medicamento</th><th>CodigodeBarrasMed</th><th>Dosis_recomendada</th><th>CodigodeBarrasReceta</th><th>Añadir</th><th>Eliminar</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["ID"] . "</td>"."<td>" . $row["Nombre"] . "</td>"."<td>" . $row["DNIPaciente"] . "</td>"."<td>" . $row["Nombre_Medicamento"] . "</td>".
        "<td>" . '<img src="Barcode2.php?text='.$row["CodigodeBarrasMed"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>" . $row["Dosis_recomendada"] . "</td>"."<td>" .'<img src="Barcode2.php?text='.$row["CodigodeBarrasReceta"].'&size=50&orientation=horizontal&codetype=Code39&print=true">' . "</td>"."<td>"

        .'<form method="POST" action="../PHP/PacienteUser.php?id='.$dni_paciente .'&id2='. $row["ID"] .'" >
          <input type="hidden" name="ID" value='.$row["ID"].'>
          <input type="hidden" name="Nombre" value='.$row["Nombre"].'>
          <input type="hidden" name="DNIPaciente" value='.$row["DNIPaciente"].'>
          <input type="hidden" name="Nombre_Medicamento" value='.$row["Nombre_Medicamento"].'>
          <input type="hidden" name="CodigodeBarrasMed" value='.$row["CodigodeBarrasMed"].'>
          <input type="hidden" name="Dosis_recomendada" value='.$row["Dosis_recomendada"].'>
          <input type="hidden" name="CodigodeBarrasReceta" value='. $row["CodigodeBarrasReceta"].'>
          <script>
            function mostrarAlerta() {
              alert("Se ha añadido correctamente el dato a la tabla.");
            }
          function marcarCheckbox() {
            var checkbox = document.getElementById("myCheckbox");
            checkbox.checked = true;
          }
          
          function desmarcarCheckbox() {
            var checkbox = document.getElementById("myCheckbox");
            checkbox.checked = false;
          }
          function añadir() {
            mostrarAlerta();
            marcarCheckbox();
          }
        </script>
          <button type="submit" name="Añadir_MedicamentO" id="BotonAñadir" onclick="añadir()">Añadir al documento</button>
          <td><button type="submit" name="eliminarRegistro" id="BotonAñadir onclick="desmarcarCheckbox()">Eliminar del Documento</button></td>
        </form>'."</td>"."</tr>";
    }
    echo "</table>";
}
// Cerrar la conexión a la base de datos
?>

