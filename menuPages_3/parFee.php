<?php

include "../component/connect.php";

$pid = $_GET['pid'];
$sql = "SELECT * FROM student AS s INNER JOIN parent AS p ON s.pid = p.pid INNER JOIN class AS c ON s.cid = c.cid INNER JOIN section AS sec ON c.section = sec.sec_id INNER JOIN subject AS su ON s.subid = su.subid INNER JOIN fees AS f ON su.fid = f.fid INNER JOIN teacher AS t ON su.tid = t.tid WHERE s.pid = $pid";

$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);


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
  <style>
        ul li {
            font-size: 15px;
            color: #FCB41D;
        }

        ul li span {
            color: #666;
        }
    </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="../images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <?php include "../component/header-2.php"; ?>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../images/faces/face32.png">
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
            <i class='icon-clipboard menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
            ?>

          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='parAttend.php?pid=$pid'>
            <i class='icon-check menu-icon'></i>
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
              <h4 class="font-weight-bold text-dark">All Fees record</h4>
              <p class="font-weight-normal mb-2 text-muted"><?php echo date("F j, Y"); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="font-weight-bold my-2">Student Details</h4>
                  <ul class="list-arrow">
                    <li>Roll no: <span><?php echo $row['rollno'] ?></span></li>
                    <li>Name: <span><?php echo $row['fname'] . " " . $row['lname'] ?></span></li>
                    <li>Guardian: <span><?php echo $row['name'] ?></span></li>
                    <li>Gender: <span><?php echo $row['sgender'] ?></span></li>
                    <li>Level: <span><?php echo $row['cname'] ?></span></li>
                    <li>Section: <span><?php echo $row['sec_name'] ?></span></li>
                    <li>Subject: <span><?php echo $row['subject'] ?></span></li>
                    <li>Teacher: <span><?php echo $row['t_fname'] . " " . $row['t_lname'] ?></span></li>
                    <li>Subject Details: <span><?php echo $row['detail'] ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="font-weight-bold">All months record</h4>
                  <p>All fees record of <?php echo $row['fname']." ". $row['lname']?></p>
                     <div class="table-responsive">
                     <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Roll no</th>
                                                    <th>Name</th>
                                                    <th>Guardian</th>
                                                    <th>Gender</th>
                                                    <th>Class</th>
                                                    <th>Section</th>
                                                    <th>Subject</th>
                                                    <th>Teacher</th>
                                                    <th>Month</th>
                                                    <th>Fee status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                 $sql2 = "SELECT * FROM student AS s INNER JOIN parent AS p ON s.pid = p.pid INNER JOIN class AS c ON s.cid = c.cid INNER JOIN section AS sec ON c.section = sec.sec_id INNER JOIN subject AS su ON s.subid = su.subid INNER JOIN fees AS f ON su.fid = f.fid INNER JOIN teacher AS t ON su.tid = t.tid INNER JOIN fees_status AS fs ON f.fid = fs.fid WHERE fs.fid = $row[fid]";

                                                 $res2 = mysqli_query($conn,$sql2);

                                                 if(mysqli_num_rows($res2)>0){
                                                    while($row1 = mysqli_fetch_assoc($res2)){
                                                        if($row1['f_status'] == "Paid"){
                                                            echo "<tr>
                                                                     <td>$row1[rollno]</td>    
                                                                     <td>$row1[fname] "."$row[lname]</td>    
                                                                     <td>$row1[name]</td>    
                                                                     <td>$row1[sgender]</td>    
                                                                     <td>$row1[cname]</td>    
                                                                     <td>$row1[sec_name]</td>    
                                                                     <td>$row1[subject]</td>    
                                                                     <td>$row1[t_fname] "."$row1[t_lname]</td>    
                                                                     <td>$row1[f_month]</td>    
                                                                     <td><label class='badge badge-success'>Paid</label></td>    
                                                                   </tr>";
                                                        }
                                                        else if($row1['f_status'] == "Unpaid"){
                                                            echo "<tr>
                                                                     <td>$row1[rollno]</td>    
                                                                     <td>$row1[fname] "."$row[lname]</td>    
                                                                     <td>$row1[name]</td>    
                                                                     <td>$row1[sgender]</td>    
                                                                     <td>$row1[cname]</td>    
                                                                     <td>$row1[sec_name]</td>    
                                                                     <td>$row1[subject]</td>    
                                                                     <td>$row1[t_fname] "."$row1[t_lname]</td>    
                                                                     <td><label class='badge badge-danger'>Unpaid</label></td>    
                                                                   </tr>";
                                                        }
                                                    }
                                                 }
                                                 else{
                                                    echo "<div class='d-flex flex-row align-items-center justify-content-center'>
                                                    <i class='mdi mdi-compass-outline icon-lg text-warning'></i>
                                                    <h3 class='mb-0 ml-1'>
                                                      No fees record found!
                                                    </h3>
                                                  </div>";
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
</body>

</html>