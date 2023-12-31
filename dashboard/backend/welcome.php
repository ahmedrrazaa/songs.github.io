
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
   </head>
 <body>


 <?php

include("nav.php");


?>

      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 mb-3">
               <div class="d-flex align-items-center justify-content-between welcome-content">
                  <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Welcome To Dashboard</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb m-0">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ul>
                     </nav>
                  </div>
                  <div class="btn-group btn-group-toggle">
                     <a class="button btn btn-success mr-2 button-icon" target="_blank" href="#"><i class="ri-shopping-cart-2-line m-auto m-0"></i></a>
                     <a class="button btn btn-warning mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-download-2-line m-0"></i></a>
                     <a class="button btn btn-info mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i></a>
                     <a class="button btn btn-primary button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Export<i class="ri-arrow-down-s-fill"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body iq-total-content">
                     <div class="top-block d-flex align-items-center justify-content-between">
                        <p class="mb-1">Total Visitor</p>
                        <span class="badge badge-danger rounded-normal">3.563%<i class="ri-arrow-down-s-fill"></i></span>
                     </div>
                     <h4>$<span class="counter">837,8370</span><i class="ri-add-line text-danger"></i></h4>
                     <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                        <div class="iq-progress-bar bg-danger-light mt-3 iq-progress-bar-icon">
                           <span class="bg-danger iq-progress progress-1" data-percent="67">
                           <span class="progress-text text-danger">67%</span>
                           </span>
                        </div>
                        <div id="total-chart-01" class="ml-4"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body iq-total-content">
                     <div class="top-block d-flex align-items-center justify-content-between">
                        <p class="mb-1">Total Order</p>
                        <span class="badge badge-success rounded-normal">9.563%<i class="ri-arrow-down-s-fill"></i></span>
                     </div>
                     <h4>$<span class="counter">537,8370</span><i class="ri-add-line text-success"></i></h4>
                     <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                        <div class="iq-progress-bar progress-2 bg-success-light mt-3 iq-progress-bar-icon">
                           <span class="bg-success" data-percent="79">
                           <span class="progress-text text-success">79%</span>
                           </span>
                        </div>
                        <div id="total-chart-02" class="ml-4"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body iq-total-content">
                     <div class="top-block d-flex align-items-center justify-content-between">
                        <p class="mb-1">Total Revenue</p>
                        <span class="badge badge-primary rounded-normal">4.523%<i class="ri-arrow-down-s-fill"></i></span>
                     </div>
                     <h4>$<span class="counter">1437,837</span><i class="ri-add-line text-primary"></i></h4>
                     <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                        <div class="iq-progress-bar progress-3 bg-primary-light mt-3 iq-progress-bar-icon">
                           <span class="bg-primary" data-percent="81">
                           <span class="progress-text text-primary">81%</span>
                           </span>
                        </div>
                        <div id="total-chart-03" class="ml-4"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body iq-total-content">
                     <div class="top-block d-flex align-items-center justify-content-between">
                        <p class="mb-1">Total Clients</p>
                        <span class="badge badge-warning rounded-normal">2.893%<i class="ri-arrow-down-s-fill"></i></span>
                     </div>
                     <h4>$<span class="counter">829,8470</span><i class="ri-add-line text-warning"></i></h4>
                     <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                        <div class="iq-progress-bar progress-4 bg-warning-light mt-3 iq-progress-bar-icon">
                           <span class="bg-warning" data-percent="34">
                           <span class="progress-text text-warning">34%</span>
                           </span>
                        </div>
                        <div id="total-chart-04" class="ml-4"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Site Traffic</h4>
                     </div>
                     <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <span class="dropdown-toggle dropdown-bg bg-primary p-2" id="dropdownMenuButton1" data-toggle="dropdown">
                           7.563%<i class="ri-arrow-down-s-fill ml-1"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton1">
                              <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                           </div>
                           <span class="dropdown-toggle dropdown-bg bg-warning p-2 ml-3 d-none d-sm-inline-block" id="dropdownMenuButton6" data-toggle="dropdown">
                           3.563%<i class="ri-arrow-down-s-fill ml-1"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton6">
                              <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="site-trafic-chart"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Popular Products</h4>
                     </div>
                     <p class="mb-0">Goal 1500 Unit</p>
                  </div>
                  <div class="card-body">
                     <div class="iq-details">
                        <span class="title"><b>iPhone XS</b></span>
                        <div class="percentage float-right text-warning">113283 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-warning-light iq-progress-bar-icon">
                              <span class="bg-warning" data-percent="50"></span>
                           </div>
                        </div>
                     </div>
                     <div class="iq-details mt-3">
                        <span class="title"><b>iPhone 3 XL</b></span>
                        <div class="percentage float-right text-primary">56446 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                              <span class="bg-primary" data-percent="70"></span>
                           </div>
                        </div>
                     </div>
                     <div class="iq-details mt-3">
                        <span class="title"><b>Sony 7iii Mirrorless</b></span>
                        <div class="percentage float-right text-success">553546 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-success-light iq-progress-bar-icon">
                              <span class="bg-success" data-percent="40"></span>
                           </div>
                        </div>
                     </div>
                     <div class="iq-details mt-3">
                        <span class="title"><b>Audio technical A 750</b></span>
                        <div class="percentage float-right text-info">45566 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-info-light iq-progress-bar-icon">
                              <span class="bg-info" data-percent="85"></span>
                           </div>
                        </div>
                     </div>
                     <div class="iq-details mt-3">
                        <span class="title"><b>Xiamomi Pocophone f1</b></span>
                        <div class="percentage float-right text-danger">878663 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-danger-light iq-progress-bar-icon">
                              <span class="bg-danger" data-percent="60"></span>
                           </div>
                        </div>
                     </div>
                     <div class="iq-details mt-3">
                        <span class="title"><b>Redmi note pro</b></span>
                        <div class="percentage float-right text-primary">66746 Sold</div>
                        <div class="iq-progress-bar-linear d-inline-block w-100">
                           <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                              <span class="bg-primary" data-percent="45"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Sales by category</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="category-sales-chart"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Recent Hits (Sales)</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="recent-hits-map"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-xl-8">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Recent Orders</h4>
                     </div>
                     <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                           <i class="ri-more-2-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                              <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0 table-borderless tbl-server-info">
                           <thead>
                              <tr class="text-primary">
                                 <th scope="col">#</th>
                                 <th scope="col">Customer</th>
                                 <th scope="col">Customer ID</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img src="../assets/images/user/01.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                       <div class="pl-3">
                                          <h6>Rodney Artichoke</h6>
                                          <p class="text-body mb-0">United States</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>#836729267</td>
                                 <td>05-02-2020</td>
                                 <td>$908</td>
                                 <td>
                                    <div class="badge badge-success">Delivered</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img src="../assets/images/user/02.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                       <div class="pl-3">
                                          <h6>Dominic L. Ement</h6>
                                          <p class="text-body mb-0">India</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>#948947392</td>
                                 <td>09-02-2020</td>
                                 <td>$564</td>
                                 <td>
                                    <div class="badge badge-warning">Pending</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img src="../assets/images/user/03.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                       <div class="pl-3">
                                          <h6>Caspian Bellevedere</h6>
                                          <p class="text-body mb-0">Germany</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>#927351323</td>
                                 <td>16-02-2020</td>
                                 <td>$235</td>
                                 <td>
                                    <div class="badge badge-danger">Declined</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img src="../assets/images/user/04.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                       <div class="pl-3">
                                          <h6>Max Conversion</h6>
                                          <p class="text-body mb-0">United States</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>#253427834</td>
                                 <td>27-02-2020</td>
                                 <td>$235</td>
                                 <td>
                                    <div class="badge badge-success">Delivered</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img src="../assets/images/user/05.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                       <div class="pl-3">
                                          <h6>Chaplain Mondover</h6>
                                          <p class="text-body mb-0">Bangladesh</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>#736292697</td>
                                 <td>19-02-2020</td>
                                 <td>$757</td>
                                 <td>
                                    <div class="badge badge-success">Delivered</div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-xl-4">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Payment History</h4>
                     </div>
                     <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <span class="dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown">
                           <i class="ri-more-2-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                              <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="suggestions-lists m-0 p-0">
                        <li class="d-flex mb-4 align-items-center">
                           <div class="profile-icon bg-primary-light"><i class="ri-currency-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From ATL</h6>
                              <p class="mb-0">5 march, 18:34</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $908.00</h6>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="profile-icon bg-warning-light"><i class="ri-paypal-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From Paypal</h6>
                              <p class="mb-0">5 march, 18:33</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $736.00</h6>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="profile-icon bg-success-light"><i class="ri-bank-card-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From Card</h6>
                              <p class="mb-0">5 march, 18:20</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $125.00</h6>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="profile-icon bg-info-light"><i class="ri-home-6-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From Bank</h6>
                              <p class="mb-0">5 march, 18:23</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $676.00</h6>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="profile-icon bg-danger-light"><i class="ri-refund-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From Payza</h6>
                              <p class="mb-0">5 march, 18:33</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $232.00</h6>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="profile-icon bg-primary-light"><i class="ri-money-pound-box-line"></i></div>
                           <div class="media-support-info ml-3">
                              <h6 class="mb-1">Payment From Skrill</h6>
                              <p class="mb-0">5 march, 18:13</p>
                           </div>
                           <div class="media-support-amount ml-3">
                              <h6>+ $984.00</h6>
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