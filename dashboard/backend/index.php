

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>ProX | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">  </head>
  <body class=" color-light ">
  <?php

include("nav.php");

?>
    <div class="wrapper">
      
    
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card iq-realease">
                  <div class="card-header d-flex justify-content-between border-0">
                     <div class="header-title">
                        <h4 class="card-title">New Releases</h4>
                     </div>
                  </div>
                  <div class="card-body  iq-realeses-back">
                     <div class="row">
                        <div class="col-lg-5 iq-realese-box ">
                           <div class="iq-music-img">
                              <div class="equalizer">
                                 <span class="bar bar-1"></span>
                                 <span class="bar bar-2"></span>
                                 <span class="bar bar-3"></span>
                                 <span class="bar bar-4"></span>
                                 <span class="bar bar-5"></span>
                              </div>
                           </div>
                           <div class="player1 row">
                              <div class="details1 music-list col-6 col-sm-6 col-lg-6">
                                 <div class="now-playing1"></div>
                                 <div class="track-art1"></div>
                                 <div>
                                    <div class="track-name1">Amy Winehouse </div>
                                    <div class="track-artist1">DaBaby Featuring Roddy</div>
                                 </div>
                              </div>
                              <div class="buttons1 col-6 col-sm-2 col-lg-3">
                                 <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                                 <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                                 <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-7">
                           <ul class="list-unstyled iq-song-slide mb-0 realeases-banner">
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/01.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2  iq-m-time">9:52</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center  col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/02.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Megan Thee Stallion</p>
                                          <small>Jessie J</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">5:45</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop  d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="active row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/03.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Harry Styles</p>
                                          <small>Loreen</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">7:52</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton3" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/04.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Juice WRLD x </p>
                                          <small>Edith Piaf</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">6:18</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/05.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Chris Brown & Young Thug</p>
                                          <small>Florence Welch</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2  iq-m-time">9:00</p>
                                    <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/06.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title"> Jawsh 685 x Jason Derulo</p>
                                          <small>Bonnie Tyler</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2  iq-m-time">6:52</p>
                                    <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/07.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Jawsh 685 x Jason Derulo </p>
                                          <small>Elena Paparizou</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">7:18</p>
                                    <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/08.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0 iq-music-title">Lady Gaga & Ariana Grande</p>
                                          <small>Leona Lewis</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">8:40</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href ="music-albums.php"><img src="../assets/images/music-dashboard/realease-song/09.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body text-white ml-3">
                                          <p class="mb-0">Gabby Barrett</p>
                                          <small>Emeli Sandé</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                                    <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                    <p class=" mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                    <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9" >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <div class="header-title">
                        <h4 class="card-title">Featured Albums</h4>
                     </div>
                     <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row  feature-album iq-box-hover mb-0">
                        <li class="col-lg-2  iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/01.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Doja Cat</h6>
                                    <p class="mb-0">Annie Lennox</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/02.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Justin Bieber</h6>
                                    <p class="mb-0">Sade Adu</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/03.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Pop Smoke </h6>
                                    <p class="mb-0">Cascada</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/04.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Miran Lamber</h6>
                                    <p class="mb-0">Natasha </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/05.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Future Facet</h6>
                                    <p class="mb-0">Sophie Ellis</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/06.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Powfu Facet</h6>
                                    <p class="mb-0">Cheryl Cole</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/07.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Pop Smoke</h6>
                                    <p class="mb-0">Patricia Kaas</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Asylum</h6>
                                    <p class="mb-0">Ava Max</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/09.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">After You Go</h6>
                                    <p class="mb-0">Lewis Capaldi</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-2 iq-music-box">
                           <div class="card mb-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Don't Start</h6>
                                    <p class="mb-0">Dua Lipa</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <div class="header-title">
                        <h4 class="card-title">Featured Albums</h4>
                     </div>
                     <div id="feature-album-artist-slick-arrow" class="slick-aerrow-block"></div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row feature-album-artist mb-0">
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Pixie Lott</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/02.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600 mb-0">Jessie Ware</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/03.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Alesha Dixon</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/04.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Sarah Connor</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/05.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600 mb-0">Agnes</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/06.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Rebecca</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/07.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600 mb-0">Grace </h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/08.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Courtney</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/09.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600 mb-0">Billie Eilish</h6>
                           </div>
                        </li>
                        <li class="col-lg-2  iq-music-box">
                           <div class="iq-thumb-artist">
                              <div class="iq-music-overlay"></div>
                              <a href ="music-albums.php">
                                 <img src="../assets/images/music-dashboard/feature-album-artist/10.png" class="w-100 img-fluid" alt="">
                              </a>
                              <div class="overlay-music-icon">
                                 <a href ="music-albums.php">
                                    <i class="las la-play-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="feature-list text-center">
                              <h6 class="font-weight-600  mb-0">Normani</h6>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Trending Songs</h4>
                     </div>
                     <div class="d-flex align-items-center iq-view">
                        <b class="mb-0 text-primary"><a href="music-albums.php">View More <i class="las la-angle-right"></i></a></b>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row iq-box-hover mb-0">
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Life Is Good</h6>
                                    <p class="mb-0">Billie Eilish</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Death Bed</h6>
                                    <p class="mb-0">Normani</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Falling</h6>
                                    <p class="mb-0">Ava Max</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">The Bones</h6>
                                    <p class="mb-0">Ella Mai</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Unforgettable</h6>
                                    <p class="mb-0">Monty bug</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">The Box</h6>
                                    <p class="mb-0">Doja Cat</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">The Stranger</h6>
                                    <p class="mb-0">Lauren Jaur</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Hate Others</h6>
                                    <p class="mb-0">City Girls</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Big Picture</h6>
                                    <p class="mb-0">Hayley Kiyoko</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Life's A Mess</h6>
                                    <p class="mb-0">Juice WRLD </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Consultation</h6>
                                    <p class="mb-0">Juice WRLD</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/tranding-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Rags2Riches</h6>
                                    <p class="mb-0">Jessie Reyez</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Popular Hindi Songs</h4>
                     </div>
                     <div class="d-flex align-items-center iq-view">
                        <b class="mb-0 text-primary"><a href="albums.php">View More <i class="las la-angle-right"></i></a></b>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row  iq-box-hover mb-0">
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card ">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Said Sum</h6>
                                    <p class="mb-0">Money Bug</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Toosie Slide</h6>
                                    <p class="mb-0">Drake</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">The Mystery</h6>
                                    <p class="mb-0">Megan Thee </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Supalonely</h6>
                                    <p class="mb-0">BENEE Facet</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Walk Down</h6>
                                    <p class="mb-0">NLE Choppa</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Blood On</h6>
                                    <p class="mb-0">Juice WRLD</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Big Country</h6>
                                    <p class="mb-0">LOCASH</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Righteous</h6>
                                    <p class="mb-0">Juice WRLD</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-sm-0  mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Get Going</h6>
                                    <p class="mb-0">Jason Aldean</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">I Love Nature</h6>
                                    <p class="mb-0">Florida Geo</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Got It On Me</h6>
                                    <p class="mb-0">Summer Walk</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href ="music-albums.php">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href ="music-albums.php">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Like That</h6>
                                    <p class="mb-0">Stefflon Don</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between align-items-center">
                           <div class="header-title">
                              <h4 class="card-title">Hot Songs</h4>
                           </div>
                           <div id="hot-song-slick-arrow" class="slick-aerrow-block"></div>
                        </div>
                        <div class="card-body">
                           <ul class="list-unstyled row hot-songs mb-0">
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/01.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">God Whispered Your Name</h6>
                                             <small>Maggie Rogers</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/02.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">Mood Swings</h6>
                                             <small>Maren Morris</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent mb-0 mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/03.png"  class="img-fluid avatar-60" alt=""></a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">Something Special</h6>
                                             <small>Rico Nasty</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/04.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">Tell Me U Luv Me</h6>
                                             <small>Kali Uchis</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/05.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                             <small>Juice WRLD</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent mb-0 mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/06.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0">Up Up And Away</h6>
                                             <small>Black Eyed Peas</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/07.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                             <small>Juice WRLD</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/08.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">More Than My Hometown </h6>
                                             <small>Keith Urban</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-12">
                                 <div class="card card-transparent mb-0 mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="media align-items-center">
                                          <div class="iq-thumb-hotsong">
                                             <div class="iq-music-overlay"></div>
                                             <a href ="music-albums.php"><img src="../assets/images/music-dashboard/hot-songs/09.png"  class="img-fluid avatar-60" alt="">
                                             </a>
                                             <div class="overlay-music-icon">
                                                <a href ="music-albums.php">
                                                   <i class="las la-play-circle font-size-24"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 iq-song-title">3 Headed Goat</h6>
                                             <small>Clairo</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between align-items-center">
                           <div class="header-title">
                              <h4 class="card-title">Hot Video Songs</h4>
                           </div>
                           <div id="hot-video-slick-arrow" class="slick-aerrow-block"></div>
                        </div>
                        <div class="card-body">
                           <ul class="list-unstyled row iq-box-hover hot-video mb-0">
                             
                              <li class="col-lg-6">
                                 <div class="card mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="iq-thumb">
                                          <video controls>
                                             <source src="../assets/images/music-dashboard/song-video/video-2.mp4" type="video/mp4" />
                                          </video>                                            
                                       </div>
                                       <div class="feature-list text-center">
                                          <h6 class="font-weight-600  mb-0">Dollaz On My Head </h6>
                                          <p class="mb-0">389372k Views</p>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-6">
                                 <div class="card  mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="iq-thumb">
                                          <video controls>
                                             <source src="../assets/images/music-dashboard/song-video/video-3.mp4" type="video/mp4" />
                                          </video>                                               
                                       </div>
                                       <div class="feature-list text-center">
                                          <h6 class="font-weight-600  mb-0">Breaking Me</h6>
                                          <p class="mb-0">89382k Views</p>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-lg-6">
                                 <div class="card  mb-lg-0">
                                    <div class="card-body p-0">
                                       <div class="iq-thumb">
                                          <video controls>
                                             <source src="../assets/images/music-dashboard/song-video/video-1.mp4" type="video/mp4" />
                                          </video>
                                       </div>
                                       <div class="feature-list text-center">
                                          <h6 class="font-weight-600  mb-0">Breaking Me</h6>
                                          <p class="mb-0">89382k Views</p>
                                       </div>
                                    </div>
                                 </div>
                              </li>

                           </ul>
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