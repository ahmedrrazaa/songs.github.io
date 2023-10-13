<?php
    include("connection.php");
    if(isset($_POST["btn"])){
        $name = $_POST["sname"];
        $email = $_POST["semail"];
        $password = $_POST["spassword"];
        $cpassword = $_POST["cpassword"];
      
        
      $insert =  "INSERT INTO `signup`(`Name`, `Email`, `Password`, `Confirmpassword`, `role`) VALUES ('$name','$email','$password','$cpassword','admin')";

        
    
        $run = mysqli_query($con, $insert);

        
        if ($run) {
        header("location:user-list.php");
        }
        
        }
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

<div class="mycontainer mb-5 col-g-6" style="width: 50%; height: 80%; margin-bottom: 80px;margin-top:90px;margin-left:35vw;border-radius:25px">
        <!-- form layout for sign up -->
        <form class="row align-items-center justify-content-center "  method='POST' style="padding:30px">
        <!-- <div>
              <img style="width: 20%; height: 30%; margin-bottom: 3px; margin-top: 25px;" src="images/i20.jpg" alt="">
            </div> -->
            <div class="col-12 mb-4">
              <label for="name" class="form-label" style="color: white;">Name:</label>
              <input type="text" name="sname" class="form-control" id="name" placeholder="your Name....">
            </div>

            <div class="col-12 mb-4">
              <label for="inputEmail4" class="form-label" style="color: white;">Email:</label>
              <input type="email" name="semail"  class="form-control" id="inputEmail4" placeholder="your Email....">
            </div>

            <div class="col-md-6 mb-4">
              <label for="inputPassword4" class="form-label" style="color: white;">Password:</label><br>
              <input type="password" name="spassword"  class="form-control" id="inputPassword4">
            </div>
            
            <div class="col-md-6 mb-4">
              <label for="inputconfirmPassword4" class="form-label" style="color: white;">Confirm Password:</label>
              <input type="password" name="cpassword" class="form-control" id="inputconfirmPassword4">
              <span id='message'></span>
            </div>
         
            <div class="col-12 mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" style="color: white;">
                  Remember me:
                </label>

              </div>
            </div>
            
            <div><button type="submit" id="btn" name="btn" class="btn btn-primary btn-sm" style="border-radius:15px">Sign-up</button></div>
  </form>
        </div>







   
  </body>
</html>