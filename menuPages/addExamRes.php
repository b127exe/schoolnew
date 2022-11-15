<?php

include "../component/connect.php";

$reid = $_GET['eid'];
$rsid = $_GET['sid'];

$sql = "SELECT * FROM student AS s INNER JOIN class AS c ON s.cid = c.cid INNER JOIN subject AS su ON s.subid = su.subid WHERE sid = $rsid";
$res1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_array($res1);

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
  <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/alert.css">
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
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="font-weight-bold text-dark text-center">Add Result</h4>
                  <p class="card-description text-center">
                    Fill up the form
                  </p>
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputFirst1">Roll no</label>
                      <input type="text" class="form-control" value="<?php echo $row1['rollno'];?>" disabled id="exampleInputFirst1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirst1">Name</label>
                      <input type="text" class="form-control" value="<?php echo $row1['fname'].' '.$row1['lname'];?>" disabled id="exampleInputFirst1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirst1">Class</label>
                      <input type="text" class="form-control" value="<?php echo $row1['cname'];?>" disabled id="exampleInputFirst1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirst1">Subject</label>
                      <input type="text" class="form-control" value="<?php echo $row1['subject'];?>" disabled id="exampleInputFirst1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputDob1">Marks</label>
                      <input type="number" class="form-control" id="exampleInputDob1" name="marks">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputDob1">Percentage</label>
                      <input type="text" class="form-control" id="exampleInputDob1" name="percent">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Grade</label>
                          <div class="col-sm-9">
                            <select class="form-control" style="padding: 15px;" name="grade">
                              <option value="A+">A+</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                              <option value="F">F</option>
                            </select>
                          </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Exam Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" style="padding: 15px;" name="eStatus">
                              <option value="Attend">Attend</option>
                              <option value="Not Attend">Not Attend</option>
                            </select>
                          </div>
                        </div>
                    <button type="submit" id="liveAlertBtn" class="btn btn-primary mr-2" name="insertResult">Submit</button>
                  </form>
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
   <!-- Jquery for alert -->
   <script src="../js/alert.js"></script>
  <!-- End custom js for this page-->

  <?php
  
  if(isset($_POST['insertResult'])){

     $marks = $_POST['marks'];
     $percent = $_POST['percent'];
     $grade = $_POST['grade'];
     $status = $_POST['eStatus'];

     $sql = "INSERT INTO exam_result(eid,marks,percentage,grade,exam_status) VALUES($reid,$marks,$percent,'$grade','$status')";

     $res2 = mysqli_query($conn,$sql);

     if($res2){
        echo "<div class='alert show'>
          <span class='icon-command menu-icon'></span>
          <span class='msg'>Result arrived of $row1[fname]".' '. "$row1[lname]</span>
          <span class='close-btn'>
              <span class='icon-cross menu-icon'></span>
          </span>
         </div>";
     }


  }

  ?>

<script>
        // $("#liveAlertBtn").click(function(){
        //     $(".alert").removeClass("hide");
        //     $(".alert").addClass("show");
        // });
        $(".close-btn").click(function(){
            $(".alert").addClass("hide");
            $(".alert").removeClass("show");
        });
    </script>
</body>

</html>