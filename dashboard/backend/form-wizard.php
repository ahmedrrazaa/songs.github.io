<?php
  include("connection.php");
  if(isset($_POST["butn"])){
      $name = $_POST["name"];
      $cat = $_POST["cat"];
      $art = $_POST["art"];
      $year = $_POST["year"];
      $ext = $_FILES["image"]["type"];
    $file = $_FILES["audio"]["type"];
    $video = $_FILES["video"]["type"];

      if(strtolower($ext) == "image/jpg" 
      || strtolower($ext) == "image/jpeg" 
      || strtolower($ext) == "image/png"
      || strtolower($ext) == "audio/mp3"
      || strtolower($ext) == "video/mp4")
          {
            $imagename=$_FILES['image']['name']; //database
            $audioname=$_FILES['audio']['name']; //database
            $videoname=$_FILES['video']['name']; //database
            $target ='../img/' . basename($imagename);
            $target1 ='../audio/' . basename($audioname);
            $target2 ='../video/' . basename($videoname);
              if(move_uploaded_file($_FILES['image']['tmp_name'],$target ) && move_uploaded_file($_FILES['audio']['tmp_name'],$target1) && move_uploaded_file($_FILES['video']['tmp_name'],$target2))
              {
      $insert = "INSERT INTO `sound`(`name`, `category`, `artist`, `cover`, `year`, `file`, `video`) VALUES ('$name','$cat','$art','$imagename','$year','$audioname','$videoname')";
      $run = mysqli_query($con, $insert);
     header("location:table-editable.php");
      echo "<script> alert('Successfully Uploaded')</script>";
      
              }
              else{
                echo "<script> alert('Not Uploaded')</script>";
              }
      
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
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   
   
   </head>
  <body class=" color-light ">

  <?php

include("nav.php");

?>

    <div class="wrapper">
      
  
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
   
                  </div>
                  <div class="iq-card-body">
                     <form id="form-wizard1" class="text-center mt-4" method="POST" enctype="multipart/form-data">
                       
                        <!-- fieldsets -->
                        <fieldset>
                           <div class="form-card text-left">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" class="form-control" name="name" placeholder="Song Name" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Category</label>
                                 <div>
                                      
                                       <select class="form-control" name="cat">
                                          <option value="">Category</option>
                                          <option   value="Blues">Blues Music</option>
                                          <option  value="Jazz">Jazz Music</option>
                                          <option  value="Rhythm">Rhythm Music</option>
                                          <option  value="Rock & Roll">Rock & Roll Music</option>
                                          <option  value="Rock">Rock Music</option>
                                          <option  value="Country">Country Music</option>
                                          <option  value="Soul">Soul Music</option>
                                          <option  value="Dance">Dance Music</option>
                                          <option  value="Hip Hop">Hip Hop Music</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Artist</label>
                                       <input type="text" class="form-control" name="art" placeholder="Artist" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Year</label>
                                       <input type="number" class="form-control" name="year" placeholder="Enter Year" />
                                    </div>
                                 </div>
                              </div>
                        
                              <div class="form-group">
                                 <label>Upload Cover Photo:</label>
                                 <input type="file" class="form-control" name="image" >
                              </div>
                              <div class="form-group">
                                 <label>Upload Audio:</label>
                                 <input type="file" class="form-control" name="audio" >
                              </div>
                              <div class="form-group">
                                 <label>Upload Video:</label>
                                 <input type="file" class="form-control" name="video" >
                              </div>
                           </div>
                           <button class="btn btn-primary" name="butn"> Save </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->

  
  </body>
</html>