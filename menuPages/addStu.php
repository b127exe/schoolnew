<?php

include "../component/connect.php";

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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="font-weight-bold text-dark text-center">Add Student</h4>
                  <p class="card-description text-center">
                    Fill up the form
                  </p>
                  <form class="form-sample" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roll no</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="roll" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="fname" />
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="lname" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" style="padding: 15px;" name="gender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="dob" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Student Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="semail" />
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Guardian Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pname" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Occupation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="job" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CINC</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="nic" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Guardian Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="pemail" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Class Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="cname" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Section</label>
                          <div class="col-sm-9">
                            <select class="form-control" style="padding: 15px;" name="section">
                              <?php

                              $sql = "SELECT * FROM section";
                              $res = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_assoc($res)) {
                                echo "<option value='$row[sec_id]'>$row[sec_name]</option>";
                              }

                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="subject" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject Details</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="subdetail" placeholder="50 Letters" />
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject Teacher</label>
                          <div class="col-sm-9">
                            <select class="form-control" style="padding: 15px;" name="subTeacher">
                              <?php

                              $sql1 = "SELECT * FROM teacher";
                              $res1 = mysqli_query($conn, $sql1);
                              while ($row1 = mysqli_fetch_assoc($res1)) {

                                echo "<option value='$row1[tid]'>$row1[t_fname] " . "$row1[t_lname]</option>";
                              }

                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject Fees</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="subFee" />
                          </div>
                        </div>
                      </div>                     
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block" name="insert">Insert</button>
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
  <!-- End custom js for this page-->

   <!-- Php Start Here ! -->

   <?php
   
     if(isset($_POST['insert'])){

       //For Student

       $roll = $_POST['roll'];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $gender = $_POST['gender'];
       $dob = $_POST['dob'];
       $email = $_POST['semail'];
       $address = $_POST['address'];

       //For Parent

      $pname = $_POST['pname'];
      $phone = $_POST['phone'];
      $job = $_POST['job'];
      $nic =  $_POST['nic'];
      $pemail = $_POST['pemail'];

      // For Class & Section

      $cname = $_POST['cname'];
      $section = $_POST['section'];

      // For Subject 

      $subject = $_POST['subject'];
      $subdetail = $_POST['subdetail'];
      $subTeacher = $_POST['subTeacher'];

      // For Fees
      
      $subFee = $_POST['subFee'];

      $sql2 = "INSERT INTO parent(name,phone,job,nic,email) VALUES('$pname',$phone,'$job',$nic,'$pemail')";

      $res2 = mysqli_query($conn , $sql2);

      if($res2){

       $maxpid = "SELECT MAX(pid) AS p FROM parent";
       $pidres = mysqli_query($conn , $maxpid);
       $pidrow = mysqli_fetch_array($pidres);
      //  echo $pidrow['p'] . '<br>';
       
       $sql3 = "INSERT INTO class(cname,section) VALUES('$cname',$section)";
       $res3 = mysqli_query($conn , $sql3);

       if($res3){

        $maxcid = "SELECT MAX(cid) AS c FROM class";
        $cidres = mysqli_query($conn , $maxcid);
        $cidrow = mysqli_fetch_array($cidres);
        // echo $cidrow['c'] . "<br>";

         $sql4 = "INSERT INTO fees(amount) VALUES($subFee)"; 
         $res4 = mysqli_query($conn,$sql4); 

         $maxfid = "SELECT MAX(fid) AS f FROM fees";
         $fidres = mysqli_query($conn,$maxfid);
         $fidrow = mysqli_fetch_array($fidres);
        //  echo $fidrow['f'] . "<br>";

         if($res4){
           
           $sql5 = "INSERT INTO subject(subject,detail,tid,fid) VALUES('$subject','$subdetail',$subTeacher,{$fidrow['f']})";

           $res5 = mysqli_query($conn , $sql5);

           if($res5){

            $maxsubid = "SELECT MAX(subid) AS sb FROM subject";
            $subidres = mysqli_query($conn,$maxsubid);
            $subidrow = mysqli_fetch_array($subidres);
            // echo $subidrow['sb'];

            $sql6 = "INSERT INTO student(fname,lname,dob,address,pid,sgender,cid,semail,subid,rollno) VALUES('$fname','$lname','$dob','$address',{$pidrow['p']},'$gender',{$cidrow['c']},'$email',{$subidrow['sb']},'Student". "$roll')";

            $res6 = mysqli_query($conn,$sql6) or die("Error");

           }

         }
       }



      }

     }
   
   
   ?>


</body>

</html>