

<?php
include("connection.php");
$query = "SELECT * FROM `signup`";
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
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">
      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   
   
   </head>
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
                           <h4 class="card-title">User List</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-6 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                   
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>


                         

                                 <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                 
                                    
                                 </tr>
                           </thead>
                           <tbody>
                                
                         <?php     
                           while($data = mysqli_fetch_assoc($result)){
                    echo      '    
                           <tr>
                                   
                                    <td>'.$data["id"].'</td>
                                    <td>'.$data["Name"].'</td>
                                    <td>'.$data["Email"].'</td>
                                    <td>'.$data["role"].'</td>
                                   
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                         
                                         
                                          <a href="deleteuser.php?deleteId='.$data['id'].'" class="iq-bg-primary ps-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="fas fa-trash"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              
                                 ';
                             

                           }
?>


                           </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
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