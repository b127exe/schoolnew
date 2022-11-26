<?php

include "../component/connect.php";

$tid = $_GET['tid'];
$sql1 = "SELECT * FROM teacher WHERE tid = $tid";
$res1 = mysqli_query($conn, $sql1);
if ($res1) {
  $row1 = mysqli_fetch_array($res1);
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
  <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="../vendors/jquery-bar-rating/fontawesome-stars.css">
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
            echo "<a class='nav-link' href='../teacher.php?tid=$tid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Dashboard</span>
          </a>";
            ?>
            
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='teaNotice.php?tid=$tid'>
            <i class='icon-box menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
            ?>
           
          </li>
          <li class="nav-item">
            <?php
            echo " <a class='nav-link' href='atten.php?tid=$tid'>
            <i class='icon-plus menu-icon'></i>
            <span class='menu-title'>Attendance</span>
          </a>";
            ?>
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='teaAddStu.php?tid=$tid'>
            <i class='icon-ribbon menu-icon'></i>
            <span class='menu-title'>Add Student</span>
          </a>";
            ?>
            
          </li>
          <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='tea.php?tid=$tid'>
            <i class='icon-ribbon menu-icon'></i>
            <span class='menu-title'>Details</span>
          </a>";
            ?>
            
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
                  <h4 class="font-weight-bold text-dark">Details & Update</h4>
                  <p class="card-description">
                    Check & Update your details
                  </p>
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputFirst1">First Name</label>
                      <input type="text" class="form-control" value="<?php echo $row1['t_fname'] ?>" id="exampleInputFirst1" name="fname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLast1">Last Name</label>
                      <input type="text" class="form-control" id="exampleInputLast1" value="<?php echo $row1['t_lname'] ?>" name="lname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputDob1">Date of birth</label>
                      <input type="text" class="form-control" id="exampleInputDob1" value="<?php echo $row1['dob'] ?>" name="dob">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputGender1">Gender</label>
                      <select class="form-control" style="padding: 15px;" name="gender">
                        <option hidden><?php echo $row1['gender'] ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputContact1">Contact</label>
                      <input type="number" class="form-control" id="exampleInputContact1" value="<?php echo $row1['phone'] ?>" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEducation1">Education</label>
                      <input type="text" class="form-control" id="exampleInputEducation1" value="<?php echo $row1['education'] ?>" name="education">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row1['email'] ?>" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" value="<?php echo $row1['t_address'] ?>" name="address">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="UpdateTea">Update Changes</button>
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
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/alert.js"></script>

  <!-- End custom js for this page-->
  <?php

  if (isset($_POST['UpdateTea'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql2 = "UPDATE teacher SET t_fname = '$fname' , t_lname = '$lname' , t_address = '$address' , phone = '$phone' , dob = '$dob' , education = '$education' , gender = '$gender' , email = '$email' WHERE tid = $tid";

    $res2 = mysqli_query($conn, $sql2) or die('Update query expired !');

    if($res2){
        echo "<div class='alert show'>
        <span class='icon-command menu-icon'></span>
        <span class='msg'>Student Added Successfully! <a href='../teacher.php?tid=$tid'>Go Back</a></span>
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