<?php

include "../component/connect.php";

$sid = $_GET['sid'];

$sql1 = "SELECT * FROM student WHERE sid = $sid";
$res1 = mysqli_query($conn,$sql1);
if($res1){
    $row = mysqli_fetch_assoc($res1);
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
        <a class="navbar-brand brand-logo" href="/student.php"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/student.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <?php include "../component/header.php";?>
    </nav>
      
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../images/faces/face28.png">
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
            <a class="nav-link" href="pages/tables/basic-table.php">
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
                        <h3 style="font-size: 3rem;letter-spacing: 1px;font-family: sans-serif;"><?php echo $row['fname'] ." ". $row['lname'];?></h3>
                        <p>bilal123@gmail.com</p>
                        <div class="row">
                        <div class="col-lg-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Donut Record</h4>
                                 
                                 </div>
                            </div>
                            </div>
                        <div class="col-lg-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="font-weight-bold mb-4">Mark Attendance</h4>
                                 <form class="form-sample" method="POST">
                                   <div class="row">
                                      <div class="col-md-6">
                                      <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Status</label>
                                       <div class="col-sm-9">
                                         <select class="form-control form-control-sm"  required style="padding: 14px;" name="status">
                                            <option value="absent">Absent</option>
                                            <option value="present">Present</option>
                                            <option value="leave">Leave</option>
                                         </select>
                                       </div>
                                    </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group row">
                                         <label class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required placeholder="yyyy-mm-dd" name="date">
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary btn-lg btn-block" name="markAtt">Mark</button>
                                 </form>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="font-weight-bold">All Record</h4>
                    <p>All Attendance record of <?php echo $row['fname'] ." ". $row['lname'];?></p>
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
                              
                              $sql2 = "SELECT * FROM attendance AS a INNER JOIN student AS s ON a.sid = s.sid INNER JOIN parent AS p ON s.pid = p.pid INNER JOIN class AS c ON s.cid = c.cid WHERE a.sid = $sid";
                              $res2 = mysqli_query($conn,$sql2);
                              while($row1 = mysqli_fetch_assoc($res2)){
                                echo "";
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
  <script src="../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/select2.js"></script>

  <!-- End custom js for this page-->
 
  <?php
  
  if(isset($_POST['markAtt'])){
     
   $status = $_POST['status'];
   $date = $_POST['date'];

   $sql = "INSERT INTO attendance(sid,status,date) VALUES($sid,'$status','$date')";
   $res = mysqli_query($conn,$sql) or die("Attendance not insert");

   if($res){
      echo "<script>window.location.href = 'attendance.php'</script>";
   }

  }
  
  ?>

</body>

</html>

