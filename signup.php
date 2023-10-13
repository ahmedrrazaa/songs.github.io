<?php
    include("connection.php");
    if(isset($_POST["btn"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
   
        
      $insert =  "INSERT INTO `signup`(`Name`, `Email`, `Password`, `Confirmpassword`, `role`) VALUES ('$name','$email','$password','$cpassword','visitor OR admin')";

        
    
        $run = mysqli_query($con, $insert);

        
        if ($run) {
        header("location:signin.php");
        }
        
        }
        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- boostrap css -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	
    <style>
        body{
            
            background:url("images/img2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: fixed;
            
        }
        
    
        
    </style>
</head>
<body>
    <?php
     include("nav.php")
    
    ?>
    
    <div class="mycontainer" style="background-color: #e0e0e0;width: 30%; height: 60%; margin-bottom: 50px;margin-top:40px;margin-left:34vw;border-radius:25px">
        <!-- form layout for sign up -->
        <form class="row g-3"  method='POST' style="padding:30px">
        <div>
              <center><img style="width: 20%; height: 30%; margin-bottom: 3px; margin-top: 25px;" src="images/i20.jpg" alt=""></center>
            </div>
            <div class="col-12">
              <label for="name" class="form-label" style="color: black;">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="your Name" required>
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label" style="color: black;">Email</label>
              <input type="email" name="email"  class="form-control" id="inputEmail4" placeholder="your Email" required>
            </div>

            <div class="col-md-6">
              <label for="inputPassword4" class="form-label" style="color: black;">Password</label>
              <input type="password" name="password"  class="form-control" id="inputPassword4" placeholder="Password" required>
            </div>
            
            <div class="col-md-6">
              <label for="inputconfirmPassword4" class="form-label" style="color: black;">Confirm Password</label>
              <input type="password" name="cpassword" class="form-control" id="inputconfirmPassword4" placeholder="Confirm Password" required>
              <span id='message'></span>
            </div>
          
            <!-- <div class="col-md-6">
              <label for="inputAddress2" class="form-label" style="color: black;">Address</label>
              <input type="text" name="add" class="form-control" id="inputAddress2" placeholder="Address">
            </div> -->
            <!-- <div class="col-md-6">
              <label for="inputphoneno" class="form-label" style="color: black;">phone Number</label>
              <input type="number" name="snumber" class="form-control" id="inputphoneno" placeholder="cell number">
            </div>
             -->
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" style="color: black;">
                  Remember me
                </label>

              </div>
            </div>
            <div><button type="submit" id="btn" name="btn" class="btn btn-primary btn-sm" style="border-radius:15px">Sign-up</button></div>
  </form>
        </div>
    
        <?php include("footer.php");?>

      

        
        



      <!-- eof #canvas -->
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/mediaelement-and-player.min.js"></script>
	<script src="js/mediaelement-migrate.min.js"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var _cueSettings = {
			"l10n":
			{
				"nextTrack": "Next Track",
				"previousTrack": "Previous Track",
				"togglePlayer": "Toggle Player",
				"togglePlaylist": "Toggle Playlist"
			}
		};
		/* ]]> */
	</script>
	<script src="js/cue.min.js"></script>
	<script src="js/switcher.js"></script>
	<!-- bootstrap cdn -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



      </body>
</html>