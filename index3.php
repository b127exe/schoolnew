<?php

session_start();

include "component/connect.php";

if (isset($_GET['searchBtn'])) {

  $list = $_GET['list'];
  $search = $_GET['search'];

  $sql = "SELECT * FROM teacher AS t WHERE $list LIKE '%$search%'";
}
else{
  $sql = "SELECT * FROM teacher AS t ";
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
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/card.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-8 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="images/faces/face30.png" class="lock-profile-img" alt="img">
              <form class="form-sample pt-5" method="GET">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" style="padding: 14px;" required name="list">
                        <option value="tid">Roll no</option>
                        <option value="t_fname">Fisrt Name</option>
                        <option value="t_lname">Last Name</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control text-white" required placeholder="Searching..." name="search" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-block btn-primary  btn-lg font-weight-medium" name="searchBtn">Go</button>
                    </div>
                  </div>
                </div>
                <div class="mt-3 text-center">
                  <a href="login.php" class="auth-link text-white">Sign in using a different account</a>
                </div>
              </form>
            </div>  
          </div>

          <div class="col-md-5 mx-auto" style="height: 500px; overflow: hidden;overflow-y: scroll;">
              <div class="row">
 
              <?php
              
              $res = mysqli_query($conn,$sql);
              if(mysqli_num_rows($res) > 0 ){
                while($row = mysqli_fetch_assoc($res)){
                    echo " <div class='col-sm-12 p-4 mt-2' style='border-radius: 10px;background-color: rgba(0, 0, 0, 0.5);'>
                    <p class='text-white'>$row[tid]</p>
                     <h2 class='font-weight-bold text-white'>$row[t_fname] $row[t_lname]</h2>
                     <p class='text-white'>Email : $row[email]</p>
                     <strong style='display: block;color: #fff;'>$row[gender]</strong>
                     <p class='text-white'>Education : $row[education]</p>
                     <a href='teacher.php?tid=$row[tid]' class='btn btn-primary btn-lg btn-block mt-3'>
                        <i class='mdi mdi-account'></i>                      
                        Open Dashboard
                      </a>                 
                    </div>";
                }
              }

              ?>
              </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>