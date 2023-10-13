<?php

include("connection.php");
session_start();
if (isset($_POST["btn"])) {
$email = $_POST["email"];
$password = $_POST["password"];
$login = "SELECT * FROM `signup` WHERE Email = '$email' and Password = '$password'";
$exe = mysqli_query($con, $login);
$num = mysqli_num_rows($exe);
$myarray = mysqli_fetch_assoc($exe);
if ($num != "") {
 $_SESSION["role"] = $myarray["role"]??"";
 $_SESSION["Name"] = $myarray["Name"]??"";
if ($_SESSION["role"] == "admin") {
 header("location: ../dashboard/backend/user-list.php");
}
else{
  echo "<script>alert('Sorry.....Wrong Password');</script>";
}
}
else{
  echo "<script>alert('Invalid Credential');</script>";
}
}





?>





<?php
include("connection.php");
$query = "SELECT * FROM `tbl_comments`";
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


    <div class="mycontainer" style="width: 50%; height: 60%; margin-bottom: 50px;margin-top:170px;margin-left:34vw;border-radius:25px">
          <form style="padding:30px"  novalidate action="" method="POST">

            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: white;">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: white;">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style="color: white;">Remember me</label>
            </div>
            <button type="submit" name="btn" class="btn btn-primary btn-sm" style="border-radius:5px">login</button>
          </form>

        </div>

   
  </body>
</html>