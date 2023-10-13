<!DOCTYPE html>
<html lang="en">

<head>


	<?php


	if (session_id() == null) {
		session_start();
	}

	?>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>



	<!-- boostrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- font awsome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cue.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



</head>

<body>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">

		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<section class="page_topline ds table_section table_section_md">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-6 text-center text-md-left">
							<div class="inline-content medium">
								<p> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 0318-2097206
								</p>
								<p> <i class="fa fa-envelope highlight rightpadding_5"
										aria-hidden="true"></i>razarazi0318@gmail.com </p>
								<!-- <p class="greylinks"> <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection#e7838db8858e948f8897a7829f868a978b82c984888a"><span class="__cf_email__" data-cfemail="3b5f516459524853544b7b5e435a564b575e15585456">razarazi0318@gmail.com</span></a> </p> -->
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center text-md-center "> <a class="mx-2 fa fa-facebook "
								href="https://www.facebook.com" title="Facebook"></a> <a class="mx-2 fa fa-twitter"
								href="https://twitter.com/" title="Twitter"></a> <a class="mx-2 fa fa-google-plus"
								href="https://www.google.com" title="Twitter"></a> <a class="mx-2 fa fa-linkedin"
								href="https://www.linkedin.com/" title="Twitter"></a> <a class="mx-2 fa fa-youtube"
								href="https://www.youtube.com/" title="Youtube"></a>



								

						</div>




						
						<div class="col-md-4 col-sm-6 text-center text-md-center fw-bold ">
                                                   
                                                           

</div>
                                                             
                       
                                           
<?php
                                                                 echo $_SESSION["Name"]??"";
                                                             ?>

                    
                             




					</div>
					
				</div>





				
			</section>
			<header class="page_header header_white toggler_xs_right ">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table" style="width:30px">
							<div class="header_left_logo display_table_cell"> <a href="./" class="logo top_logo">
									<img src="images/logo-4-removebg-preview.png" alt="" style="width:120px">
								</a> </div>
							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active"> <a href="index.php">Home</a></li>

										<!-- eof pages -->


										<li> <a href="albm.php">Album</a> </li>
										<?php
										if (isset($_SESSION["mail"])) {

											?>

											<li> <a href="songs.php">Songs</a>

											</li>

											<li> <a href="video.php">Videos</a>

											</li>


										<?php

										} else {
											?>
											<li>

											</li>
											<?php

										}

										?>



										<li> <a href="artist.php">Artist</a>
											<ul>

												<!-- <li> <a href="songs.php">Songs</a> </li> -->
												<!-- <li> <a href="artist.php">Artist</a> </li> -->

												<li> <a href="ayear.php">Year</a> </li>
												<li> <a href="agenre.php">Genre</a> </li>
												<li> <a href="alanguage.php">Language</a> </li>

											</ul>
										</li>

										<li> <a href="about.php">About</a>
											<ul>


												<li> <a href="coming.php">Comingsoon</a>

												</li>

											</ul>
										</li>

										<!-- eof blog -->
										<!-- contacts -->
										<li> <a href="contact.php">Contacts</a></li>
										<!-- eof contacts -->
										<!-- artist -->

										<?php
										if (isset($_SESSION["mail"])) {

											?>
											<li><a href="signout.php">Logout</a>
										
										
										</li>


										




											<?php

										} else {
											?>
											


											<li> <a href="#">Registration</a>
												<ul>
													<li><a href="signin.php">Signin</a></li>
													<li><a href="signup.php">Signup</a></li>


												</ul>

												
											</li>


											<?php
										}
										?>


<?php
										if (isset($_SESSION["mail"])) {

											?>

										<form class="form-inline" method="post" action="songs.php"
											style="margin:auto;max-width:50px;margin-left:100px;">
											
											
											<input type="text" name="song" class="form-control"
												placeholder="Search Songs.."
												style="border-radius:50px;background-color:#353935;width:221px;color:white">
												<button type="submit" name="save" class="theme_button color1" style="border-radius:0px;background-color:theme_button color1 min_width_button;margin:17px;max-width:55px;margin-right:-11px" ><i class="fa fa-search"></i></button>


										</form>


										<?php

} else {
	?>

<li>
</li>

<?php
										}
										?>



									</ul>





								</nav>
								<!-- eof main nav -->
								<!-- header toggler --><span class="toggle_menu"><span></span></span>
							</div>
							<!-- <div class="header_right_buttons display_table_cell text-right hidden-xs"> <a href="contact.php" class="theme_button color1">Buy tickets</a> </div> -->
						</div>
					</div>
				</div>
			</header>


			<!-- eof #canvas -->

			<script src="js/compressed.js"></script>
			<!-- bootstrap cdn -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
				integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
				crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
				integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
				crossorigin="anonymous"></script>

</body>

</html>