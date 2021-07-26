<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->getTitle(); ?></title>
  <meta name="author" content="Rodrigo Lima Aluno Método Ágora - mjailton">
  <meta name="description" content="<?php echo $this->getDescription(); ?>">
  <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
  <link rel="shortcut icon" href="<?= URL_BASE ?>assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?= URL_BASE ?>assets/img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_BASE ?>assets/img/favicon.ico"">
  <link rel=" icon" type="image/png" sizes="16x16" href="<?= URL_BASE ?>assets/img/favicon.ico"">  

  <!-- Google Font: Source Sans Pro -->
  <link rel=" stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Estilo específico da página -->
  <?= $this->addHead(); ?>
  
  <script src="<?= URL_BASE ?>assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script>
    var base_url = "http://mjailton.com.br/agora2020/ead_admin/";
    var base_img = "http://mjailton.com.br/agora2020/ead_admin/imagem_admin/";
  </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Cabeçalho -->
    <?php include_once 'cabecalho.php'; ?>
    <!-- /.Cabeçalho -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <?php include_once 'menu.php'; ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php $this->load($view, $viewData); ?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <?php include_once 'rodape.php'; ?>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= URL_BASE ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= URL_BASE ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= URL_BASE ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= URL_BASE ?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= URL_BASE ?>assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= URL_BASE ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= URL_BASE ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= URL_BASE ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= URL_BASE ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?= URL_BASE ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= URL_BASE ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= URL_BASE ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= URL_BASE ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= URL_BASE ?>assets/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= URL_BASE ?>assets/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= URL_BASE ?>assets/js/pages/dashboard.js"></script>
  <!-- Script específico da página -->
  <?= $this->addFooter(); ?>
</body>

</html>