<?php

include "../component/connect.php";

$sid = $_GET['sid'];

$sql = "SELECT * FROM student AS s INNER JOIN subject AS su ON s.subid = su.subid INNER JOIN teacher AS t ON su.tid = t.tid WHERE sid = $sid";

$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="../vendors/jquery-bar-rating/fontawesome-stars.css">
  <link rel="stylesheet" href="../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/student.php"><img src="../images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="/student.php"><img src="../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <?php include "../component/header.php"; ?>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../images/faces/face30.png">
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
            echo "<a class='nav-link' href='../stud.php?sid=$sid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Dashboard</span>
          </a>";
            ?>
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='yourNotice.php?sid=$sid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
            ?>

          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='yourAtten.php?sid=$sid'>
            <i class='icon-plus menu-icon'></i>
            <span class='menu-title'>Attendance</span>
          </a>";
            ?>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='yourSubject.php?sid=$sid'>
            <i class='icon-ribbon menu-icon'></i>
            <span class='menu-title'>Subject</span>
          </a>";
            ?>

          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-exam" aria-expanded="false" aria-controls="ui-exam">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Exam</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-exam">
              <ul class="nav flex-column sub-menu">
                <?php
                echo "<li class='nav-item'> <a class='nav-link' href='yourSchedule.php?sid=$sid'>Schedule</a></li>
                <li class='nav-item'> <a class='nav-link' href='yourExam.php?sid=$sid'>Exam</a></li>";
                ?>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Subject</h4>
              <!-- <p class="font-weight-normal mb-2 text-muted"></p> -->
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-12  d-flex grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title" style='font-size: 24px;'><?php echo $row['fname'] ." ". $row['lname'];?></h4><span><?php echo date("F j, Y, g:i a");; ?></span>
                  </div>
                  <div class='row'>
                    <div class='col-lg-6'>
                      <p style='font-size: 16px;'><span class="text-warning font-weight-bold">Your subject: </span><?php echo $row['subject'];?></p>

                      <p style='font-size: 16px;'><span class="text-warning font-weight-bold">Subject Teacher: </span><?php echo $row['t_fname'] ." ". $row['t_lname'];?></p>

                      <strong style='line-height: 25px;'><span class='text-primary'>Subject Details: </span><?php echo $row['detail'];?></strong>

                      <p class="mt-2"><span class='font-weight-bold text-primary'>Education Details:</span> Education is a purposeful activity directed at achieving certain aims, such as transmitting knowledge or fostering skills and character traits. These aims may include the development of understanding, rationality, kindness, and honesty. Various researchers emphasize the role of critical thinking in order to distinguish education from indoctrination. Some theorists require that education results in an improvement of the student while others prefer a value-neutral definition of the term. In a slightly different sense, education may also refer, not to the process, but to the product of this process: the mental states and dispositions possessed by educated people. Education originated as the transmission of cultural heritage from one generation to the next. Today, educational goals increasingly encompass new ideas such as the liberation of learners, skills needed for modern society, empathy, and complex vocational skills.</p>

                    </div>
                    <div class='col-lg-6'>
                      <img src='../images/faces/books.png' width='90%'>
                    </div>
                  </div>
                  <?php echo "<a class='btn btn-warning btn-icon-text btn-block' href='yourSubUpdate.php?subid=$row[subid]&sid=$sid'>
                    <i class='mdi mdi-reload btn-icon-prepend'></i>
                    Update Subject
                    </a>";?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <?php include "../component/footer.php"; ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/select2.js"></script>

  <!-- End custom js for this page-->

</body>

</html>