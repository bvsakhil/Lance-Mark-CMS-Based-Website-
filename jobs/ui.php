

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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>


<style type="text/css">
    @font-face {
  font-family: nextfontbold;
  src: url(../assets/fonts/ave_next_ssv/AvenirNextLTPro-Bold.otf);
}
 @font-face {
  font-family: nextfontreg;
  src: url(../assets/fonts/ave_next_ssv/AvenirNextLTPro-Regular.otf);

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



<?php 

require_once '../dashboard/processinuidesigner.php'; 



$mysqli = new mysqli('localhost', 'root', '', 'job') or die(mysqli_error($mysqli));
$result = $mysqli->query('SELECT * FROM uidesigner ORDER BY timeofpost DESC') or die($mysqli->error);
?>





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
                
                   <a href="../index.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">UI INSPIRATION</button></a>
                
            </li>
            <li class="nav-item">
              <a  href="../freebies/index.php">  <button   type="button" class="btn btn-default btn-sm shadow-none">FREEBIES</button></a>
            </li>
            <li class="nav-item">
                
               <a href="../contests.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">CONTESTS</button></a>
            </li>
            <li class="nav-item">
                
                <a href="../shop.php"><button  type="button" class="btn btn-default btn-sm shadow-none">SHOPS</button></a>
            </li>
            <li class="nav-item">
                
               <a href="../jobs/index.php"> <button style="box-shadow: 0 0 5px 0 rgba(0,0,0,.1) !important;" type="button" class="btn btn-default btn-sm shadow-none">JOBS</button></a>
            </li>
            <li class="nav-item">
               
               <a> <button  type="button" class="btn btn-default btn-sm shadow-none">BLOG</button></a>
            </li>
            <li class="nav-item">
               
               <a href="../join.php"> <button  type="button" class="btn btn-default btn-sm shadow-none">JOIN US</button></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


           <li>
              <a  href="../submit.php"><button type="button" class="btn btn-primary btn-sm shadow-none" style="background:#848484 !important;border:none;"><i class="fas fa-file-upload"></i>Submit</button></a>
            </li>
            &nbsp
            &nbsp
           
            

            <li >
                <form action="searchinui.php" method="GET"  class="form-inline my-2 my-lg-0">

      <input id="myInput" style="background:#e6e6e6;border:none;color:848484;height:30px;" class="form-control mr-sm" name="search" type="search" placeholder="Search" aria-label="Search">
     
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
            <li style="margin-right:10px;" class="nav-item  ">
                <a class="nav-link" href="index.php">All</a>
            </li>
             <li style="margin-right:10px;" class="nav-item active">
                <a class="nav-link" href="ui.php">UI Designer</a>
            </li>
            <li style="margin-right:10px;" class="nav-item ">
                <a class="nav-link" href="interaction.php">Interaction Designer</a>
            </li>
            <li style="margin-right:10px;" class="nav-item ">
                <a class="nav-link" href="product.php">Product Designer</a>
            </li>
             <li style="margin-right:10px;" class="nav-item ">
                <a class="nav-link" href="ux.php">UX Designer</a>
            </li>
             <li style="margin-right:10px;" class="nav-item ">
                <a class="nav-link" href="art.php">Art Director</a>
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


    <main style="background:#FF9595;" class="page landing-page">
        <section class="clean-block about-us">




<!--Heading Block-->
             <div class="container">
             <div class="row">
             <div class="col-md-6">
<div  class="block-heading">
                  <h1 class="float-left" style="color:white;text-align:left;font-family:nextfontbold;">JOBS <br>FOR DESIGNERS</h1>
                </div>
             </div>
             <div style="padding-top:10px;" class="col-md-6">
<img class="float-right" src="https://www.giraffe.co.za/static/landing-image-0b5a7e7edfb082849bf93a1da1ee0fcf.svg">
             </div>
             </div>



                
               
            </div>
      
<!--Heading Block-->




             <div class="container">

                
              <div class="block-heading">
                    
                </div>




                <div style="padding-top:50px;margin:-80px;"  class="row justify-content-center">



<?php

while ($row = $result->fetch_assoc()): ?>

  
<div style="padding-bottom:40px;" class="col-sm-6 col-lg-4">
                        <div style="border-radius:15px;box-shadow: 0 2px 10px rgba(0,0,0,.075);width: 25rem;" class="card  text-center">
<div  style="padding-top:20px;" class="container">
 <div  class="row">

  <div style="padding-left:30px;" class="col-sm-6">
       <img style="height:100px;width:100px;" src="<?php echo $row['logourl']; ?>" class="rounded float-left" alt="...">
  </div>

  <div class="col-sm-6">
       <h5 style="font-weight:bold;" class="card-title"><?php echo $row['title']; ?></h5>
       <p class="card-text"><?php echo $row['role']; ?></p>
  </div>
  
</div>
</div>
<hr>

  <div class="row">

  <div class="col-sm-4">
              <small class="card-text"><i class="fas fa-map-marker-alt"></i>&nbsp<?php echo $row['location']; ?></small><br>
             &nbsp&nbsp&nbsp&nbsp&nbsp <small class="card-text"><i class="fas fa-calendar-week"></i>&nbsp<?php echo $row['dateofpost']; ?></small>

  </div>

  <div class="col-sm-4">
      
  </div>

  <div class="col-sm-4">
  <a href="<?php echo $row['applylink']; ?>" class="btn btn-primary btn-sm">Apply</a>
  </div>

</div>
                        
                            
                        </div>
                    </div>


                   


                     

<?php endwhile; 

?>





                   





                    </div>
                </div>
           

<!--Image Block end-->





        </section>
    </main>
   
<footer style="font-family:nextfontreg;" class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h5 >About</h5>
                    <ul>
                       
                    </ul>
                </div>
                <div  class="col-sm-2">
                    <h5>UI INSPIRATION</h5>
                    <ul>
                        <li><a href="../apps.php">Apps</a></li>
                        <li><a href="../microinteractions.php">Microinteractions</a></li>
                        <li><a href="../websites.php">Websites</a></li>
                        <li><a href="../wireframes.php">Wireframes</a></li>

                        <li><a href="../landingpage.php">Landingpage</a></li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>FREEBIES</h5>
                    <ul>
                        <li><a href="../freebies/uikits.php">UI Kits</a></li>
                        <li><a href="../freebies/landingpage.php">Landing Pages</a></li>
                        <li><a href="../freebies/icons.php">Icons</a></li>
                        <li><a href="../freebies/illustrations.php">Illustrations</a></li>

                        <li><a href="../freebies/mockups.php">Mockups</a></li>

                        <li><a href="../freebies/premium.php">Premium</a></li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>JOBS</h5>
                    <ul>
                        <li><a href="../jobs/ui.php">UI Designer</a></li>
                        <li><a href="../jobs/interaction.php">Interaction Designer</a></li>
                        <li><a href="../jobs/product.php">Product Designer</a></li>
                        <li><a href="../jobs/ux.php">UX Designer</a></li>
                        <li><a href="../jobs/art.php">Art Director</a></li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>OTHERS</h5>
                    <ul>
                        <li><a href="../contests.php">Contests</a></li>
                        <li><a href="../shop.php">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="../join.php">Join Us</a></li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>CONTACT</h5>
                    <p>
                        
                    </p>
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