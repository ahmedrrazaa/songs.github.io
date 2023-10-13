
<?php
include("connection.php");
$query = "SELECT * FROM `album`";
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
    <div class="wrapper">
      
    
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Editable Table</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="table" class="table-editable">
                        <!-- <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm bg-primary"><i
                           class="ri-add-fill"><span class="pl-1">Add New</span></i>
                        </button>
                        </span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                           <thead>
                              <tr>
                                 <th>Id</th>
                                 <th>Name</th>
                                 <th>Image</th>

                              </tr>
                           </thead>
                           <tbody>
                        <?php     
                           while($data = mysqli_fetch_assoc($result)){
                    echo      ' <tr>
                                 <td contenteditable="true">'.$data["id"].'</td>
                                 <td contenteditable="true">'.$data["name"].'</td>
                                 <td contenteditable="true">'."<img src='../img/".$data['pic']."' width='120' height='150'>".'</td>
                                 
                              
                                 <td>
                                    <span class="table-remove"><a href="updatealbum.php?updateId='.$data['id'].'"  class="btn bg-success-light btn-rounded btn-sm my-0">Update</a></span></td> 
                                       <td>
                                       <span class="table-remove"><a href="deletealbum.php?deleteId='.$data['id'].'"  class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</a></span></td> 

                                 
                              </tr>';
                             

                           }
?>




                           </tbody>
                        </table>
                     </div>
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