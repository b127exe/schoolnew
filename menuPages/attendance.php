<?php

include "../component/connect.php";

if(isset($_GET['searchStu'])){

  $list = $_GET['selectlist'];
  $search = $_GET['search'];

  $query = "SELECT * FROM student AS s INNER JOIN parent AS p ON s.pid = p.pid WHERE $list LIKE '%$search%'";

}
else{
  $query = "SELECT *  FROM student AS s INNER JOIN parent AS p  ON s.pid = p.pid";
}

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
  <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css"/>
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
        <a class="navbar-brand brand-logo" href="../accountant.php"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../accountant.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <?php include "../component/header.php";?>
    </nav>
      
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../images/faces/face31.png">
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
            <a class="nav-link" href="../accountant.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Entries</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addStu.php">Add Student</a></li>
                <li class="nav-item"> <a class="nav-link" href="students.php">All Students</a></li>
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="addTea.php">
              <i class="icon-plus menu-icon"></i>
              <span class="menu-title">Add Teacher</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="attendance.php">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Attendance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-notice" aria-expanded="false" aria-controls="ui-notice">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Notice</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-notice">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="notice.php">Add Notice</a></li>
                <li class="nav-item"> <a class="nav-link" href="allNotice.php">All Notices</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-exam" aria-expanded="false" aria-controls="ui-exam">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Exam</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-exam">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="exam.php">Schedule</a></li>
                <li class="nav-item"> <a class="nav-link" href="examRes.php">Exam Result</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fees.php">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Fees</span>
            </a>
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
                  <h4 class="display-4 font-weight-bold text-dark text-center">Attendance</h4>
                  <p class="card-description text-center">
                    Find your record and mark your attendance
                  </p>
                  <form class="form-sample" method="GET">
                      <div class="row">
                          <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9">
                          <select class="form-control form-control-sm" required style="padding: 13px;" name="selectlist">
                              <option hidden>Select</option>
                              <option value="rollno">Roll no</option>
                              <option value="fname">First Name</option>
                              <option value="lname">Last Name</option>
                            </select>
                        </div>
                    </div>
                </div>              
                <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Searching..." required aria-label="Searching..." name="search">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="submit" name="searchStu">Search</button>
                      </div>
                    </div>
                  </div>
                </div>

                </div>
            </form>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Roll No</th>
                          <th>Name</th>
                          <th>Guadian</th>
                          <th>Gender</th>
                          <th>Dob</th>
                          <th>Email</th>
                          <th>Attendance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $result = mysqli_query($conn , $query);
                          if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                              echo "<tr>
                                      <td>$row[rollno]</td>
                                      <td>$row[fname] "."$row[lname]</td>
                                      <td>$row[name]</td>
                                      <td>$row[sgender]</td>
                                      <td>$row[dob]</td>
                                      <td>$row[semail]</td>
                                      <td><a href='attenStu.php?sid=$row[sid]' class='btn btn-secondary btn-rounded btn-sm'>Record</a><td>
                                     </tr>";
                            }
                          }
                          else{
                            echo "<h2 class='display1 text-center'>No record found!</h2>";
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
          
        <?php include "../component/footer.php";?>
        
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

