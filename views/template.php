<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory System</title>

  <link rel="icon" type="text/css" href="views/img/template/icono-negro.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!-- PLUGINS DE CSS -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables -->
  <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- PLUGINS DE JS -->
  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <script src="views/plugins/sweetalert2/sweetalert2.all.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
  <?php if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok') { ?>
    <!-- Site wrapper -->
    <div class="wrapper">

      <!-- Header. contains the nav menu. -->
      <?php include 'modules/header.php' ?>

      <!-- Left side column. contains the sidebar -->
      <?php include 'modules/menu.php' ?>

      <!-- Content Wrapper. Contains page content -->
      <?php
        if (isset($_GET['ruta'])) {
          if ($_GET['ruta'] == 'home' ||
              $_GET['ruta'] == 'users' ||
              $_GET['ruta'] == 'categories' ||
              $_GET['ruta'] == 'products' ||
              $_GET['ruta'] == 'customers' ||
              $_GET['ruta'] == 'sales' ||
              $_GET['ruta'] == 'sales-create' ||
              $_GET['ruta'] == 'sales-report' ||
              $_GET['ruta'] == 'logout'
            ) {

            include 'modules/'.$_GET['ruta'].'.php';

          } else {
            include 'modules/404.php';
          }
        } else {
          include 'modules/home.php';
        }
      ?>

      <?php include 'modules/footer.php' ?>

    </div>
    <!-- ./wrapper -->
  <?php } else { ?>

    <!-- Login. contains the login page. -->
    <?php include 'modules/login.php' ?>

  <?php } ?>
<script src="views/js/template.js"></script>
<script src="views/js/users.js"></script>
</body>
</html>
