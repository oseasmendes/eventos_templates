<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->fetch("title") ?></title>

<?= $this->Html->css([    
    "/plugins/fontawesome-free/css/all.min.css",
    "/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
    "/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
    "/plugins/jqvmap/jqvmap.min.css",
    "/dist/css/adminlte.min.css",
    "/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"  

]) ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<?= $this->element("top-nav-adminlet310") ?>
<?= $this->element("left-sidebar-adminlte310") ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <?= $this->fetch("content") ?>


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y") ?><a href="http://www.adbelem.sjc.br">Adbelem.SJC.br</a>.</strong>
    All rights reserved by  Saes Sistemas.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this->Html->script([
    "/plugins/jquery/jquery.min.js",
    "/plugins/jquery-ui/jquery-ui.min.js",
    "/plugins/bootstrap/js/bootstrap.bundle.min.js",
    "/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
    "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
    "/dist/js/adminlte.js",
    "/dist/js/demo.js",
    "/dist/js/pages/dashboard.js"
]) ?>

</body>
</html>
