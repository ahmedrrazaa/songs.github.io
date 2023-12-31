

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
   </head>
  <body class=" color-light ">
  <?php

include("nav.php");

?>
    <div class="wrapper">
      

      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-7">
               <div class="card card-transparent  iq-song-back">
                  <div class="card-body">
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
                        <div class="details1 col-6 col-sm-6 col-lg-6">
                           <div class="now-playing1"></div>
                           <div class="track-art1"></div>
                           <div>
                              <div class="track-name1">Pop Smoke</div>
                              <div class="track-artist1">Cascada</div>
                           </div>
                        </div>
                        <div class="slider_container1 col-sm-5 col-lg-5">
                           <div class="current-time1">00:00</div>
                           <input type="range" min="1" max="100" value="0" class="seek_slider1" onchange="seekTo1()">
                           <div class="total-duration1">00:00</div>
                        </div>
                        <div class="buttons1 col-6 col-sm-2 col-lg-3">
                           <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                           <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                           <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                        </div>
                        <div class="slider_container1 col-sm-4 col-lg-4">
                           <i class="fa fa-volume-down"></i>
                           <input type="range" min="1" max="100" value="99" class="volume_slider1" onchange="setVolume1()">
                           <i class="fa fa-volume-up"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="card card-transparent">
                  <div class="card-body p-0">
                     <ul class="list-unstyled row mb-0">
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/01.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0">Girls Like You</h6>
                                       <small>Juice WRLD</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/02.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">Lucid Dreams</h6>
                                       <small>Lady Gaga</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/03.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0">Better Now</h6>
                                       <small>Beyonce</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/04.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">No Tears Left To Cry</h6>
                                       <small>Ariana Grande</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/05.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">I Like Me Better</h6>
                                       <small>Lauv</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/06.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">Whatever It Takes</h6>
                                       <small>George Michael</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/07.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">In My Blood</h6>
                                       <small>Lil Pump</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/08.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">Too Good At Goodbyes</h6>
                                       <small>Stevie Wonder</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent mb-md-0">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/09.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">This Is America</h6>
                                       <small>Drake</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-lg-6 col-md-6">
                           <div class="card card-transparent mb-md-0 mb-0">
                              <div class="card-body p-0">
                                 <div class="media align-items-center">
                                    <div class="iq-thumb-hotsong">
                                       <div class="iq-music-overlay"></div>
                                       <a href="javascript:void(0);"><img src="../assets/images/music-dashboard/album-song/10.png"  class="img-fluid avatar-60" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="javascript:void(0);">
                                             <i class="las la-play-circle font-size-24"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 iq-song-title">What Lovers Do</h6>
                                       <small>Dolly Parton</small>
                                    </div>
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
                        <h4 class="card-title">Top Songs</h4>
                     </div>
                     <div class="d-flex align-items-center iq-view">
                        <b class="mb-0 text-primary"><a href="music-latest.php">View More <i class="las la-angle-right"></i></a></b>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row iq-box-hover mb-0">
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Love Yourself</h6>
                                    <p class="mb-0">cupcakKe </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Pretty Heart</h6>
                                    <p class="mb-0">Niki</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Climb Back</h6>
                                    <p class="mb-0">King Princess</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Got It On Me</h6>
                                    <p class="mb-0">Bulow</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Stuck With U</h6>
                                    <p class="mb-0">Tierra Whack</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Be Like That</h6>
                                    <p class="mb-0">Ravyn Lenae</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Follow Me</h6>
                                    <p class="mb-0">Amber Mark</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Those Girls</h6>
                                    <p class="mb-0">Rina</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Mood Swings</h6>
                                    <p class="mb-0">Yaeji</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Supalonely</h6>
                                    <p class="mb-0">Morgan</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Tell Me U Luv</h6>
                                    <p class="mb-0">BbyMutha</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Up Up Away</h6>
                                    <p class="mb-0">Britney</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/13.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Fight Demons</h6>
                                    <p class="mb-0">Kylie</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/14.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Rocking</h6>
                                    <p class="mb-0">Fiona Apple</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/15.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Dream Girl</h6>
                                    <p class="mb-0">Frank</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/16.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0"> In Feelings</h6>
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/17.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Does To Me</h6>
                                    <p class="mb-0">Elvis Presley</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/18.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Hip Hop</h6>
                                    <p class="mb-0">Juice WRLD</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/19.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Dollaz On</h6>
                                    <p class="mb-0">Celine Dion</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/20.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Love Yourself</h6>
                                    <p class="mb-0">Prince</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/21.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Climb Back</h6>
                                    <p class="mb-0">Elton John</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/22.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Moreover</h6>
                                    <p class="mb-0">Morgan Wall</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/23.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Dream Girl</h6>
                                    <p class="mb-0">Rod Wave</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/24.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Headed Goat</h6>
                                    <p class="mb-0">Mariah Carey</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/25.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Something..</h6>
                                    <p class="mb-0">Pop Smoke</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/26.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">I Love Nature</h6>
                                    <p class="mb-0">Florida Geo</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/27.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Girls Like You</h6>
                                    <p class="mb-0">DaBaby</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card  mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/28.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">I Like It</h6>
                                    <p class="mb-0">Post Malone</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/29.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">Meant To Be</h6>
                                    <p class="mb-0">Luke Combs</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/top-song/30.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
                                          <i class="las la-play-circle"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">God's Plan</h6>
                                    <p class="mb-0">Drake</p>
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
                        <b class="mb-0 text-primary"><a href="music-latest.php">View More <i class="las la-angle-right"></i></a></b>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled row  iq-box-hover mb-0">
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="card ">
                              <div class="card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
                                    <a href="javascript:void(0);">
                                       <img src="../assets/images/music-dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <a href="javascript:void(0);">
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
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->

  
  </body>
</html>