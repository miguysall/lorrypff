<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Lorrybussiness site logistique transport et de commerce...">
  <title>Lorrybussiness</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.css">
  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
     <h1>VOTRE ESPACE ADMINISTRATEUR</h1>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../asset/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LorryBussiness</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"> <li class="breadcrumb-item">
                <a href="./listuser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Listes des Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./dashbord.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./message.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listes des Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../contact/avantage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Avantage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../contact/caracteristique.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Caracteristique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../contact/approuver.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approuver Par</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../contact/appropos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>À propos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../login/logout.php">Deconection</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
    <h1 class="mb-4 text-danger">Listes des Messages</h1>
    <?php
             include_once("../../login/db_connect.php");
              $result = $conn->query("SELECT * FROM   contact") or  die($conn->error);
             // pre_r($result);
        ?>
          <table class="table">
                    <thead>
                            <tr>
                            <th>Identifiant</th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Telephone</th>
                                <th>Domaine</th>
                                <th>Message</th>
                                <th colspan="2">Action</th>
                            </tr>
                    </thead>
            <?php
                       while ($row = $result->fetch_assoc()) :
            ?>
                    <tr>
                        <td><?php  echo $row['id']; ?></td>
                        <td><?php  echo $row['nom']; ?></td>
                        <td><?php  echo $row['email']; ?></td>
                        <td><?php  echo $row['telephone']; ?></td>
                        <td><?php  echo $row['domaine']; ?></td>
                        <td><?php  echo $row['message']; ?></td>
                        <td>
                            <a href="../login/deletmsg.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php  endwhile; ?>
            </table>
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="../AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../AdminLTE-3.1.0/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../AdminLTE-3.1.0/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../AdminLTE-3.1.0/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../AdminLTE-3.1.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../AdminLTE-3.1.0/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../AdminLTE-3.1.0/plugins/moment/moment.min.js"></script>
<script src="../AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../AdminLTE-3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-3.1.0/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../AdminLTE-3.1.0/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../AdminLTE-3.1.0/dist/js/pages/dashboard.js"></script>
<!-- Datatables -->
<script type="text/javascript" src='../DataTables/media/js/jquery.js'></script>

<script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../user/tableau.js"></script>
</body>
</html>
