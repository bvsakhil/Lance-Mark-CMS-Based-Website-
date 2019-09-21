

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
  

<?php 

require_once 'dashboard/processinapps.php'; 



$mysqli = new mysqli('localhost', 'root', '', 'portal') or die(mysqli_error($mysqli));
$result = $mysqli->query('SELECT * FROM apps ORDER BY timeofpost DESC') or die($mysqli->error);
?>




<style type="text/css">
    @font-face {
  font-family: nextfontbold;
  src: url(assets/fonts/ave_next_ssv/AvenirNextLTPro-Bold.otf);
}
 @font-face {
  font-family: nextfontreg;
  src: url(assets/fonts/ave_next_ssv/AvenirNextLTPro-Regular.otf);

}


.nav-link{
    font-family:nextfontreg;
    font-weight:bold;
}

.btn-sm{
     font-family:nextfontreg;
    font-weight:bold;

}

</style>







   <nav style="padding-top:    0.50rem; /* 0px does not look good on small screens */
  padding-bottom: 0.25rem;
        /* Just because I am using big size font */
  line-height: 2em;" class="navbar navbar-expand-md ">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">

        <ul  class="navbar-nav mr-auto">

            <div class="mx-auto ">
         <a  class="navbar-brand mx-auto" href="#">
         <img  src="LOGOP.png" style="height:30px;width:30px;">
         </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    &nbsp
    &nbsp
    &nbsp
    &nbsp
    &nbsp 
    &nbsp
    &nbsp
    &nbsp
    &nbsp

            <li class="nav-item">
                
                   <a href="index.php"> <button style="box-shadow: 0 0 5px 0 rgba(0,0,0,.1) !important;" type="button" class="btn btn-default btn-sm shadow-none">UI INSPIRATION</button></a>
                
            </li>
            <li class="nav-item">
              <a  href="freebies/index.php">  <button  type="button" class="btn btn-default btn-sm shadow-none">FREEBIES</button></a>
            </li>
            <li class="nav-item">
                
               <a href="contests.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">CONTESTS</button></a>
            </li>
            <li class="nav-item">
                
                <a href="shop.php"><button  type="button" class="btn btn-default btn-sm shadow-none">SHOPS</button></a>
            </li>
            <li class="nav-item">
                
               <a href="jobs/index.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">JOBS</button></a>
            </li>
            <li class="nav-item">
               
               <a> <button  type="button" class="btn btn-default btn-sm shadow-none">BLOG</button></a>
            </li>
            <li class="nav-item">
               
               <a href="join.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">JOIN US</button></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


           <li>
              <a  href="submit.php"><button type="button" class="btn btn-primary btn-sm shadow-none" style="background:#848484 !important;border:none;"><i class="fas fa-file-upload"></i>Submit</button></a>
            </li>
            &nbsp
            &nbsp
           
            

            <li >
                <form   class="form-inline my-2 my-lg-0">

      <input style="background:#e6e6e6;border:none;color:848484;height:30px;" class="form-control mr-sm" type="search" placeholder="Search" aria-label="Search">
     
    </form>
            </li>
        </ul>
    </div>
    
   
</nav>



<nav style="padding-top:    0.25rem; /* 0px does not look good on small screens */
  padding-bottom: 0.25rem;
        /* Just because I am using big size font */
  line-height: 2em;"  class="navbar navbar-expand-lg navbar-dark bg-dark  mx-auto ">

    <div class="mx-auto order-0">
       <ul  class="navbar-nav ml-auto text-center">
            <li class="nav-item  ">
                <a class="nav-link" href="index.php">All</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="apps.php">Apps</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="microinteractions.php">Microinteractions</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="websites.php">Websites</a>
            </li>
             <li class="nav-item ">
                <a class="nav-link" href="wireframes.php">Wireframes</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="landingpage.php">Landing Page</a>
            </li>
        </ul>
    </div>


    

    
   
</nav>

<style type="text/css">
    
    #imgborder{
        border:5px solid white;
    }
.nav-link{
    color:black;
}

</style>


    <main style="background:#f8f9fc;" class="page landing-page">
        <section class="clean-block about-us">





                    


 
     
<!--Image Block-->


             <div class="container">
                <div class="block-heading">
                    
                </div>


                <div class="row justify-content-center">





                

<?php

while ($row = $result->fetch_assoc()): ?>

  <div style="padding-bottom:40px;" class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">

                        <img  id="imgborder" class="card-img-top w-100 d-block" src=" <?php echo $row['title']; ?>">

                       
                        <div  id="textwrapper">
                            <div style=" font-family: nextfontbold;" id="showthis"  class="bottom-right">Bottom Right</div>
                           </div>

                        </div>

                    </div>



                     

<?php endwhile; 

?>

            <style type="text/css">
            

                .bottom-right {
            
  position: absolute;
  bottom: 8px;
  right: 120px;
  
}
            </style>      

                    
                    
                </div>
            </div>

<!--Image Block end-->









        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>