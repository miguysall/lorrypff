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
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../asset/bootstrap/js/bootstrap.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                <a href="../user/listuser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Listes des Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../user/dashbord.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../user/message.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listes des Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./avantage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Avantage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./caracteristique.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Caracteristique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./approuver.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approuver Par</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./appropos.php" class="nav-link">
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
    <h1 class="mb-4 text-danger">Listes des Approuvees de Lorrybussiness</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end mb-4" data-bs-toggle="modal" data-bs-target="#approuverModal">
 Ajouter  approuver
</button>

<!-- Modal -->
<div class="modal fade" id="approuverModal" tabindex="-1" aria-labelledby="approuverModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="approuverModalLabel">Approuver de Lorrybussiness</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../login/approuver.php" method="post">
      <div class="modal-body">

                    <div>
                        <label for="article1">Avantage 1</label>
                        <textarea name="article1" type="text" id="" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div>
                        <label for="mon1">Nom du client</label>
                        <input type="text" name="nom1" class="form-control">
                    </div>
                    <div>
                        <label for="article2">Avantage 2</label>
                        <textarea name="article2" type="text" id="" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div>
                        <label for="nom2">Nom du client</label>
                        <input type="text" name="nom2" class="form-control">
                    </div>
                    <div>
                        <label for="article3">Avantage 3</label>
                        <textarea name="article3" type="text" id="" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div>
                        <label for="nom3">Nom du client</label>
                        <input type="text" name="nom3" class="form-control">
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" name="save">Envoyer</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <?php
             include_once("../../login/db_connect.php");
              $result = $conn->query("SELECT * FROM   approuver") or  die($conn->error);
             // pre_r($result);
        ?>
          <table class="table">
                    <thead>
                            <tr>
                            <th>ID</th>
                                <th>Articles 1</th>
                                <th>Nom 1</th>
                                <th>Articles 2</th>
                                <th>Nom 2</th>
                                <th>Article 3</th>
                                <th>Nom 3</th>
                                <th colspan="2">Action</th>
                            </tr>
                    </thead>
            <?php
                       while ($row = $result->fetch_assoc()) :
            ?>
                    <tr>
                        <td><?php  echo $row['id']; ?></td>
                        <td><?php  echo $row['article1']; ?></td>
                        <td><?php  echo $row['nom1']; ?></td>
                        <td><?php  echo $row['article2']; ?></td>
                        <td><?php  echo $row['nom2']; ?></td>
                        <td><?php  echo $row['article3']; ?></td>
                        <td><?php  echo $row['nom3']; ?></td>
                        <td>
                            <a href="../login/approuver.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
