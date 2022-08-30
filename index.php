<!DOCTYPE html>
<html lang="en">

<?php 
  require "widget/head.php";
  require "php/class/bdd.php";
  $bdd=new bdd();
  $connect=$bdd->connect();
  require "php/methods/main.php"; 
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    


    <!-- Navbar -->
    <?php 
    if (!isset($_GET['profile'])) {
       require "widget/preload.php";
    }
    if (!isset($_GET['connected'])) {
      if (isset($_GET['new'])) {
       require "widget/sign-up.php";
      } else {
       require "widget/sign-in.php";
      }
    } else {
      require "widget/navbar.php"; 
      if (isset($_GET['profile'])) {
        require "widget/profile.php";
      } else {
       require "widget/body.php";
      } 
      require "widget/footer.php";
    
    
    }
    
     
    ?>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>