

<?php
include("connection.php");
$query = "SELECT * FROM `user`";
$result = mysqli_query($con, $query);



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="../assets/css/backend.min.css">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
      
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/core/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/daygrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/timegrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/list/main.css' />
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">  </head>
  <body class="  ">
  <?php

include("nav.php");

?>
  <div class="container mt-5 ms-5 mt-5 d-flex justify-content-center align-item-center">
            <div class="col-md-6 col-lg-8">
               <div class="card card-block card-stretch card-height mt-5">
                  <div class="card-header">
                     <div class="header-title">
                        <h4 class="card-title">User Information</h4>
                     </div>
                  </div>


                  <?php     
                           while($data = mysqli_fetch_assoc($result)){
                    echo      '  

                  <div class="card-body">
                     <ul class="list-inline p-0 m-0 iq-contact-rest">
                        <li class="mb-3 d-flex">
                           <span><i class="fas fa-map-marker-alt mr-3 font-size-20"></i></span>
                           <p class="mb-0 font-size-16 line-height">'.$data["name"].'</p>
                        </li>
                        <li class="mb-3 d-flex">
                           <span><i class="fas fa-phone-volume mr-3 font-size-20"></i></span>
                           <p class="mb-0 font-size-16 line-height">'.$data["phone"].'</p>
                        </li>
                        <li class="mb-3 d-flex">
                           <span><i class="fas fa-envelope-open mr-3 font-size-20"></i></span>
                           <p class="mb-0 font-size-16 line-height">'.$data["email"].'</p>
                        </li>
                       
                        <li class="d-flex">
                           <span><i class="fas fa-briefcase mr-3 font-size-20"></i></span>
                           <p class="mb-0 font-size-16 line-height">'.$data["address"].'</p>
                        </li>
                     </ul>
                  </div>
                  ';
                             

               }
?>

               </div>
            </div>
         </div>
      </div>
      </div>
    </div></div>
    <!-- Wrapper End-->

    
  </body>
</html>