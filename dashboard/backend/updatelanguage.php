<?php
  include("connection.php");
  $update = $_GET['updateId'];
  $select = "SELECT * FROM `language` WHERE id = $update";
  $result = mysqli_query($con, $select);
  $record = mysqli_fetch_array($result);
  if(isset($_POST["btn"])){
      $name = $_POST["name"];
      $ext = $_FILES["image"]["type"];

      if(strtolower($ext) == "image/jpg" 
      || strtolower($ext) == "image/jpeg" 
      || strtolower($ext) == "image/png")
          {
            $imagename=$_FILES['image']['name']; //database
            $target ='../img/' . basename($imagename);
              if(move_uploaded_file($_FILES['image']['tmp_name'],$target ))
              {
      $update = "UPDATE `language` SET `name`='$name', `pic`='$imagename' WHERE `language`. `id` = $update" ;
      $run = mysqli_query($con, $update);
     header("location:alanguagetable.php");
      // echo "<script> alert('Successfully Uploaded')</script>";
      
              }
              else{
               //  echo "<script> alert('Not Uploaded')</script>";
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
                                       <label>Select genre type</label>
                                       <select class="form-control" name="name">
                                          <option value="">Category</option>
                                          <option   value="hindi">Hindi</option>
                                          <option  value="english">English</option>
                                          <option  value="other">Others</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                        
                              <div class="form-group">
                                 <label>Upload genre Cover Photo:</label>
                                 <input type="file" value="<?php echo $record[2] ?>" class="form-control" name="image" >
                              </div>
                             
                           </div>
                           <button class="btn btn-primary" name="btn"> Save </button>
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