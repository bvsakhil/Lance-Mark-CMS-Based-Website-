<?php

require_once 'dashboard/processinapps.php'; 



$mysqli = new mysqli('localhost', 'root', '', 'portal') or die(mysqli_error($mysqli));
$result = $mysqli->query('SELECT * FROM apps ORDER BY timeofpost DESC') or die($mysqli->error);


?>





<?php

while ($row = $result->fetch_assoc()): ?>

  <div id="content" style="padding-bottom:40px;" class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">

                        <img  id="imgborder" class="card-img-top w-100 d-block" src=" <?php echo $row['url']; ?>">

<!--Image Heading Div-->
                         <div  id="textwrapper">

                            <div style=" font-family: nextfontreg;" id="showthis"> <?php echo $row['title']; ?>
                            </div>
                            
                           </div>
<!--Image Heading Div-->
                            
                        </div>
                    </div>




                     

<?php endwhile; 

?>