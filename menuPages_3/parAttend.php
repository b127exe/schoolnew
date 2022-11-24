<?php

include "../component/connect.php";

$pid = $_GET['pid'];

$sql = "SELECT * FROM student WHERE pid = $pid";
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
            echo "<a class='nav-link' href='../parent.php?pid=$pid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Dashboard</span>
          </a>";
            ?>
            
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='parNotice.php?pid=$pid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
            ?>
           
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='parAttend.php?pid=$pid'>
            <i class='icon-plus menu-icon'></i>
            <span class='menu-title'>Attendance</span>
          </a>";
            ?>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='parStudent.php?pid=$pid'>
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
                echo "<li class='nav-item'> <a class='nav-link' href='parSchedule.php?pid=$pid'>Schedule</a></li>
                <li class='nav-item'> <a class='nav-link' href='parExamRes.php?pid=$pid'>Exam</a></li>";
                ?>               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='parFee.php?pid=$pid'>
            <i class='icon-ribbon menu-icon'></i>
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
             <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                      <p class="font-weight-normal mb-2 text-muted"><?php echo date("F j, Y"); ?></p>
                    <h4 class="font-weight-bold">All Record</h4>
                    <p>All Attendance record of <?php echo $row['fname']." ".$row['lname']?></p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                             <thead>
                                <tr>
                                    <td>Roll no</td>
                                    <td>Name</td>
                                    <td>Gender</td>
                                    <td>Guardian</td>
                                    <td>Class</td>
                                    <td>Date</td>
                                    <td>Status</td>
                                </tr>
                             </thead>
                             <tbody>
                              <?php
                              
                              $sql2 = "SELECT * FROM attendance AS a INNER JOIN student AS s ON a.sid = s.sid INNER JOIN parent AS p ON s.pid = p.pid INNER JOIN class AS c ON s.cid = c.cid WHERE p.pid = $pid";
                              $res2 = mysqli_query($conn,$sql2);
                              while($row1 = mysqli_fetch_assoc($res2)){
                                     if($row1['status'] == "absent"){
                                        echo "<tr>
                                        <td>$row1[rollno]</td>
                                        <td>$row1[fname]</td>
                                        <td>$row1[sgender]</td>
                                        <td>$row1[name]</td>
                                        <td>$row1[cname]</td>
                                        <td>$row1[date]</td>
                                        <td><label class='badge badge-danger'>Absent</label></td>
                                      </tr>";
                                     }
                                     else if($row1['status'] == "present"){
                                        echo "<tr>
                                        <td>$row1[rollno]</td>
                                        <td>$row1[fname]</td>
                                        <td>$row1[sgender]</td>
                                        <td>$row1[name]</td>
                                        <td>$row1[cname]</td>
                                        <td>$row1[date]</td>
                                        <td><label class='badge badge-success'>Present</label></td>
                                      </tr>";
                                     }
                                     else if($row1['status'] == "leave"){
                                        echo "<tr>
                                        <td>$row1[rollno]</td>
                                        <td>$row1[fname]</td>
                                        <td>$row1[sgender]</td>
                                        <td>$row1[name]</td>
                                        <td>$row1[cname]</td>
                                        <td>$row1[date]</td>
                                        <td><label class='badge badge-warning'>Leave</label></td>
                                      </tr>";
                                     }
                              }

                              ?>
                             </tbody>
                        </table>
                    </div>
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
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <?php



  ?>

</body>

</html>