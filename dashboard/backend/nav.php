<?php

include("connection.php");

if (session_id() == null) {
    session_start();
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
              <div id="loading-center">
              </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
          
          <div class="iq-sidebar  sidebar-default ">
              <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                  <a href="music-home.php" class="header-logo">
                      <img src="../assets/images/soundwave.png" width="150px" class="img-fluid rounded-normal" alt="logo">
                  </a>
                  <div class="iq-menu-bt-sidebar">
                      <i class="las la-bars wrapper-menu"></i>
                  </div>
              </div>
              <div class="data-scrollbar" data-scroll="1">
                  <nav class="">
                      <ul id="iq-sidebar-toggle" class="iq-menu" style=" list-style-type: none;font-size:15px;">
                           <li class="active">
                                  <a href="../backend/music-home.php" class="">
                                      <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                                  </a>
                              <ul id="home" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              </ul>
                           </li><br>
                           
                           <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/form-wizard.php"><i class="las la-box"></i><span>Add Songs</span></a></li>
                               
                              </a></li><br>
                              <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/table-editable.php"><i class="las la-box"></i><span>View Songs</span></a></li>
                               
                              </a></li><br>
                             
                           <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/addartist.php"><i class="las la-box"></i><span>Add Artist</span></a></li>
                               
                              </a></li><br>
                              <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/artisttable.php"><i class="las la-box"></i><span>View Artist</span></a></li>
                               
                              </a></li><br>
                             
                           <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/addalbum.php"><i class="las la-box"></i><span>Add Albums</span></a></li>
                               
                              </a></li><br>
                              <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/albumtable.php"><i class="las la-box"></i><span>View Albums</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/addyear.php"><i class="las la-box"></i><span>Add year</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/ayeartable.php"><i class="las la-box"></i><span>View Year</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/addlanguage.php"><i class="las la-box"></i><span>Add language</span></a></li>
                               
                              </a></li><br>
                              <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/alanguagetable.php"><i class="las la-box"></i><span>View Language</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/addgenre.php"><i class="las la-box"></i><span>Add Genre</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/agenretable.php"><i class="las la-box"></i><span>view Genre</span></a></li><br>
                         <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/latesthomepage.php"><i class="las la-box"></i><span>Add song home-page</span></a></li>
                               
                              </a></li><br>
                            <li class=" ">
                              <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <li class=" ">
                         <a href="../backend/latesthomepage-table.php"><i class="las la-box"></i><span>view home-page song</span></a></li>
                               
                              </a></li><br>
                        <li class=" ">
                            <a href="../backend/user-list.php">
                                <i class="las la-list-alt"></i><span>User List</span>
                            </a>
                        </li><br>
                        <li class=" ">
                            <a href="../backend/usercomment.php">
                                <i class="las la-list-alt"></i><span>User comment</span>
                            </a>
                        </li><br>
                        
                        

                        <li class=" ">
                         <a href="../backend/auth-sign-in.php"><i class="las la-box"></i><span>Sign-In</span></a></li>
                               
                              </a></li><br>

                              <li class=" ">
                         <a href="../backend/auth-sign-up.php"><i class="las la-box"></i><span>Sign-Up</span></a></li>
                               
                              </a></li>


                       
                        
                        
                        
                      </ul>
                  </nav>
                  <div class="p-3"></div>
              </div>
              </div>       <div class="iq-top-navbar">
              <div class="iq-navbar-custom">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="index.php" class="header-logo">
                          <img src="../assets/images/soundwave.png" width="150px" class="img-fluid rounded-normal" alt="logo">
                      </a>
                  </div>
                      <div class="iq-search-bar device-search">
                          <form action="#" class="searchbox">
                          <input type="text" class="text search-input" placeholder="Type here to search...">
                          <a class="search-link" href="#"><i class="fa fa-search"></i></a>
                          </form>
                      </div>
                      <div class="d-flex align-items-center">
                          <div class="change-mode">
                              <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                  <div class="custom-switch-inner">
                                      <p class="mb-0"> </p>
                                      <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                      <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                          <span class="switch-icon-left"><i class="fa fa-moon-o"></i></span>
                                          <span class="switch-icon-right"><i class="fa fa-sun-o"></i></span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ri-search-line"></i>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                          <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                          <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                          </div>
                                      </form>
                                  </div>
                              </li>


                              
                              
                              

                             
                            
                   
                                     <li class="nav-item dropdown no-arrow">
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                                            <?php
                                                                 echo $_SESSION["Name"]??"";
                                                             ?>
                                                             </span>
                       
                                             </a>
                   
                    
                                    </li>
                                                                     <a href="signout.php" class="btn btn-primary">Sign Out</a>





                                                                     
                                                  </div>
                                                  </div>
                                                  
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              </ul>                     
                          </div> 
                      </div>
                  </nav>
              </div>
          </div>
        </div>    
          


            <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Masonary Gallery Javascript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    
    <!-- Mapbox Javascript -->
    <script src="../assets/js/mapbox-gl.js"></script>
    <script src="../assets/js/mapbox.js"></script>
    
    <!-- Fullcalender Javascript -->
    <script src='../assets/vendor/fullcalendar/core/main.js'></script>
    <script src='../assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/list/main.js'></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>
</html>