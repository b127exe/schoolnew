<?php

session_start();

$pid = $_GET['pid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <?php include "component/header-2.php"; ?>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="images/faces/face32.png">
          </div>
          <div class="user-name">
            Edward Spencer
          </div>
          <div class="user-designation">
            Developer
          </div>
        </div>
        <ul class="nav">
        <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='parent.php?pid=$pid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Dashboard</span>
          </a>";
            ?>
            
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='menuPages_3/parNotice.php?pid=$pid'>
            <i class='icon-clipboard menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
            ?>
           
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='menuPages_3/parAttend.php?pid=$pid'>
            <i class='icon-check menu-icon'></i>
            <span class='menu-title'>Attendance</span>
          </a>";
            ?>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='menuPages_3/parStudent.php?pid=$pid'>
            <i class='icon-ribbon menu-icon'></i>
            <span class='menu-title'>Details</span>
          </a>";
            ?>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-exam" aria-expanded="false" aria-controls="ui-exam">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Exam Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-exam">
              <ul class="nav flex-column sub-menu">
                <?php
                echo "<li class='nav-item'> <a class='nav-link' href='menuPages_3/parSchedule.php?pid=$pid'>Schedule</a></li>
                <li class='nav-item'> <a class='nav-link' href='menuPages_3/parExamRes.php?pid=$pid'>Exam</a></li>";
                ?>               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='menuPages_3/parFee.php?pid=$pid'>
            <i class='icon-paper-clip menu-icon'></i>
            <span class='menu-title'>Fees</span>
          </a>";
            ?>
            
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted"><?php echo date("F j, Y"); ?></p>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <?php include "component/footer.php"; ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>