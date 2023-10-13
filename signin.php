<?php

include("connection.php");
session_start();
if (isset($_POST['btn'])) {
$email = $_POST['semail'];
$password = $_POST['spassword'];
$login = "SELECT * FROM `signup` WHERE Email = '$semail' and Password = '$spassword'";
$exe = mysqli_query($con , $login);
$num = mysqli_num_rows($exe);
$myarray = mysqli_fetch_assoc($exe);
if ($num != " ") {
 $_SESSION["role"] = $myarray["role"]??"";
 $_SESSION["Name"] = $myarray["Name"]??"";
 $_SESSION["mail"] = $myarray["Email"]??"";
 if ($_SESSION["role"] == "admin" || $_SESSION["role"] == "visitor") {
  header("Location: index.php");
} else {
  header("Location: ../dashboard/backend/index.php") ||
   header("Location: ../bishop/index.php");
}
} else {
echo "<script>alert('Invalid Credential');</script>";
}
}






// if ($_SESSION["role"] == "visitor") {
//  header("location: index.php");
// }
// else{
//   header("location: ../bishop/index.php");
// }
// }
// else{
//   echo "<script>alert('Invalid Credential');</script>";
// }
// }





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- boostrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
    <style>
        body{
            
            background:url("images/img2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            
        }
        
    
        
    </style>
</head>
<body>
    <?php include("nav.php")?>
    
<div class="mycontainer" style="background-color: #e0e0e0;width: 30%; height: 60%; margin-bottom: 50px;margin-top:40px;margin-left:34vw;border-radius:25px">
          <form style="padding:30px"  novalidate action="" method="POST">

            <div>
              <center><img style="width: 20%; height: 30%; margin-bottom: 3px; margin-top: 25px;" src="images/i20.jpg" alt=""></center>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">Email address</label>
              <input type="email" name="ssemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: black;">Password</label>
              <input type="password" name="spassword" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style="color: black;">Remember me</label>
            </div>
            <button type="submit" name="btn" class="btn btn-primary btn-sm" style="border-radius:5px">login</button>
          </form>

        </div>



        

        <?php include("footer.php");?>

        
        



        <!-- bootstrap cdn -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>

</body>
</html>