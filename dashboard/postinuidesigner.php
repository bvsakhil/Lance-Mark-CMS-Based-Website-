<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="post.php"><i class="fas fa-tachometer-alt"></i><span>Post</span></a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="edit.php"><i class="fas fa-tachometer-alt"></i><span>Edit & Delete</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>


        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                           
                           
                            <div class="d-none d-sm-block topbar-divider"></div>


                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" role="presentation" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>



                                            </div>
                    </li>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">


                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard - Post</h3>
</div>







<?php 

require_once 'processinuidesigner.php'; 


$mysqli = new mysqli('localhost', 'root', '', 'job') or die(mysqli_error($mysqli));
$result = $mysqli->query('SELECT * FROM uidesigner') or die($mysqli->error);

?>

<div class="row justify-content-center">
<form action="processinuidesigner.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
    <label >Logo URL</label>
    <input  name="logourl" type="text" value="<?php echo $logourl; ?>" class="form-control"  aria-describedby="emailHelp" placeholder="Enter LOGO URL">
    
  </div>
  <div class="form-group">
    <label >Company Name</label>
    <input  name="title" type="text" value="<?php echo $title; ?>" class="form-control"  placeholder="Enter Company Name">
  </div>
  <div class="form-group">
    <label >Job Title</label>
    <input  name="role" type="text" value="<?php echo $role; ?>" class="form-control"  placeholder="Enter Job Title">
  </div>
  <div class="form-group">
    <label >Location</label>
    <input  name="location" type="text" value="<?php echo $location; ?>" class="form-control"  placeholder="Enter Location">
  </div>

  <div class="form-group">
    <label >Apply Link</label>
    <input  name="applylink" type="text" value="<?php echo $apply; ?>" class="form-control"  placeholder="Enter Location">
  </div>
  




  <div class="form-group">
 <?php


 if($update == false) {
    echo '<button name="publish" type="submit" class="btn btn-primary">Publish</button>';
} else {
    echo '<button name="update" type="submit" class="btn btn-info">Update</button>';
}
?>
  </div>
</form>








</div>






<br>
<br>
<br>
<div style="text-align:center;">
<a href="index.php"><button  name="" type="submit" class="btn btn-info">Go Back to dashboard</button></a>
</div>

<br>
<br>


               
             

             </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>