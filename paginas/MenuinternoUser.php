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
  <script src="../js/prueba.js"></script>

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
  <title>Menu principal</title>
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
        <ul class="nav nav-pills nav-sidebar-dark-primary flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../paginas/MenuinternoUser.php" class="nav-link">
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
            <a href="../paginas/DniPacienteUSER.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p onclick="irdatabase()">Paciente</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="..\PHP\Usuarios/Parafarmacia.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Listado de Parafarmacia</p>
            </a>
          </li>
          <!--</ul>-->
          </li>
          <li id="bottom">
            <i class="far fa-circle nav-icon"></i>
            <button class="btn bg-danger rounded" onclick="salir()" id="logout">Salir</button>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <style>
    .noticias {
      max-width: 1200px;
      margin: 0 auto;
      padding: 50px;
    }

    .noticias h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 35px;
      color: #003399;
    }

    .row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 50px;
    }

    .col {
      width: 48%;
    }

    .noticia {
      max-width: 400px;
      height: 400px;
      margin-bottom: 30px;
      text-align: center;
    }

    .noticia img {
      max-width: 100%;
      max-height: 70%;
      margin-bottom: 20px;
      border: 2px solid #003399;
      border-radius: 10px;
    }

    .noticia p {
      font-size: 18px;
      color: #333;
    }
  </style>
  <section class="noticias container">
    <h2 class="h2">Noticias de Actualidad</h2>

    <div class="row">
      <div class="col">
        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 1">
          <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus fermentum urna sed
            tincidunt.</p>
        </div>

        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 2">
          <p class="card-body">Nulla sed felis at leo bibendum consequat. Sed eget tellus vel est bibendum feugiat non
            at massa.</p>
        </div>
      </div>

      <div class="col">
        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 3">
          <p class="card-body">Donec facilisis ex id ante eleifend aliquam. Vestibulum ac turpis a velit malesuada
            pellentesque.</p>
        </div>

        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 4">
          <p class="card-body">Mauris eu lacinia nibh. Fusce tincidunt risus sit amet metus molestie mollis. Sed eget
            tincidunt eros.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 1">
          <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus fermentum urna sed
            tincidunt.</p>
        </div>

        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 2">
          <p class="card-body">Nulla sed felis at leo bibendum consequat. Sed eget tellus vel est bibendum feugiat non
            at massa.</p>
        </div>
      </div>

      <div class="col">
        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 3">
          <p class="card-body">Donec facilisis ex id ante eleifend aliquam. Vestibulum ac turpis a velit malesuada
            pellentesque.</p>
        </div>

        <div class="noticia">
          <img src="../images\Noticias\befunky-collage74-640x360.jpg" alt="Noticia 4">
          <p class="card-body">Mauris eu lacinia nibh. Fusce tincidunt risus sit amet metus molestie mollis. Sed eget
            tincidunt eros.</p>
        </div>
      </div>
    </div>
  </section>


</body>
<!-- jQuery -->
<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
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

</html>