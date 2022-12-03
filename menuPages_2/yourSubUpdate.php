<?php

include "../component/connect.php";

$sid = $_GET['sid'];

$subid = $_GET['subid'];

$sql = "SELECT * FROM student AS s INNER JOIN class AS c ON s.cid = c.cid INNER JOIN subject AS su ON s.subid = su.subid WHERE sid = $sid";

$res = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_array($res);

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
    <!-- <div class='alert show'>
          <span class='icon-command menu-icon'></span>
          <span class='msg'>This is alert!!</span>
          <span class='close-btn'>
              <span class='icon-cross menu-icon'></span>
          </span>
         </div> -->
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/student.php"><img src="../images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/student.php"><img src="../images/logo-mini.svg" alt="logo" /></a>
            </div>
            <?php include "../component/header-2.php"; ?>
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
            <i class='icon-clipboard menu-icon'></i>
            <span class='menu-title'>Notice</span>
          </a>";
                        ?>

                    </li>
                    <li class="nav-item">
                        <?php
                        echo " <a class='nav-link' href='yourAtten.php?sid=$sid'>
            <i class='icon-check menu-icon'></i>
            <span class='menu-title'>Attendance</span>
          </a>";
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        echo "<a class='nav-link' href='yourSubject.php?sid=$sid'>
            <i class='icon-paper menu-icon'></i>
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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="font-weight-bold text-dark text-center">Update Subject</h4>
                                    <p class="card-description text-center">
                                        Update the form
                                    </p>
                                    <form class="forms-sample" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputFirst1">Roll no</label>
                                            <input type="text" class="form-control" value="<?php echo $row1['rollno'] ?>" disabled id="exampleInputFirst1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFirst1">Name</label>
                                            <input type="text" class="form-control" value="<?php echo $row1['fname'] . ' ' . $row1['lname'] ?>" disabled id="exampleInputFirst1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFirst1">Class</label>
                                            <input type="text" class="form-control" value="<?php echo $row1['cname'] ?>" disabled id="exampleInputFirst1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFirst1">Subject</label>
                                            <input type="text" class="form-control" value="<?php echo $row1['subject'] ?>" id="exampleInputFirst1" name="subName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDob1">Detail</label>
                                            <input type="text" class="form-control" value="<?php echo $row1['detail'] ?>" id="exampleInputDob1" name="detail" placeholder="100 letters">
                                        </div>
                                        <div class="form-group">
                                            <label>Teacher</label>
                                            <select class="form-control" style="padding: 15px;" name="teacher">
                                                <?php
                                                $query = "SELECT * FROM teacher";
                                                $result = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='$row[tid]'>$row[t_fname] $row[t_lname]</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="UpdateSub">Update</button>
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

    <script>
        // $("#liveAlertBtn").click(function(){
        //     $(".alert").removeClass("hide");
        //     $(".alert").addClass("show");
        // });
        $(".close-btn").click(function() {
            $(".alert").addClass("hide");
            $(".alert").removeClass("show");
        });
    </script>

 <?php
 
 if(isset($_POST['UpdateSub'])){

     $subName = $_POST['subName'];
     $detail = $_POST['detail'];
     $teacher = $_POST['teacher'];

     $sql1 = "UPDATE subject SET subject = '$subName' , detail = '$detail' , tid = $teacher WHERE subid = $subid";
     $res2 = mysqli_query($conn,$sql1);

     if($res2){
        echo "<script>window.location.href = 'yourSubject.php?sid=$sid'</script>";
     }

 }
 
 ?>
</body>

</html>