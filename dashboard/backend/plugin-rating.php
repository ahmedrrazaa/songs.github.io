

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
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Basic Star Rating</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <select id="example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Advanced Star Rating</h4>
                     </div>
                  </div>
                  <div class="card-body mdb-rating">
                     <span id="rateMe1"></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">1/10 Rating</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <select id="bars-number">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Pill Rating</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <select id="pill-rating">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Movie Rating</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <select id="movie-rating">
                        <option value="Bad">Bad</option>
                        <option value="Mediocre">Mediocre</option>
                        <option value="Good">Good</option>
                        <option value="Awesome">Awesome</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Face Rating</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <span id="face-rating"  class="rating-faces" style="color: orange;"></span>                        
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