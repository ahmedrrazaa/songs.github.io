<?php
include("connection.php");
$query = "SELECT * FROM `sound`";
$result = mysqli_query($con, $query);
?>
<?php
error_reporting(0);



if (isset($_POST["save"])) {
    if (count($_POST) > 0) {
        $song = $_POST["song"];
        $result = mysqli_query($con, "SELECT * FROM sound where artist ='$song' " );
    }
}
?>




<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dj Bishop</title>
	<meta charset="utf-8">
	
	<!-- boostrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- font awsome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- owl caarousal  -->
	<!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
	
	
	
	
	
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
	
	<?php include('nav.php');?>




    <section id="latest-album" class="ls ms section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h6 class="highlight">discography</h6>
							<h2 class="section_header">Latest Album</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="vertical-item slide-media opened-media">
								<div class="item-media-wrap"> <img src="images/albums/02.jpg" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media "> <img src="images/albums/02.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <span>
										<i class="fa fa-play highlight" aria-hidden="true"></i>
									</span> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_35">
									<div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
								<strong class="rating">4.0</strong> out of 5
							</span> </div>
									<h4 class="entry-title topmargin_5"> <a href="single-album.php">"Welcome to my hood"</a> </h4>
									<p> <strong class="grey">Released:</strong> 13/09/2017 <br> <strong class="grey">Label:</strong> I am the Best, RED <br> <strong class="grey">Format:</strong> Digital download, CD <br> <strong class="grey">Certifications:</strong> RIAA: Gold </p>
									<p class="topmargin_30"> <a href="#" class="theme_button color1">Get on itunes now!</a> </p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<article>
								<div class="entry-content">
									<div class="cue-playlist-container">
										<div class="cue-playlist cue-theme-default">
											<ol class="cue-tracks"></ol>
										</div>
                                        
										<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script type="application/json" class="cue-playlist-data">
											{
												"embed_link": "",
												"permalink": "",
												"skin": "",
												"thumbnail": "images/albums/background.jpg",
												"tracks": [
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 1,
													"audioUrl": "https://s3.envato.com/files/229455919/preview.mp3",
													"format": "mp3",
													"length": "5:55",
													"title": "Upbeat & Inspiring",
													"order": 0,
													"mp3": "https://s3.envato.com/files/229455919/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "5:55"
													},
													"src": "https://s3.envato.com/files/229455919/preview.mp3",
													"thumb":
													{
														"src": "images/albums/01.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 2,
													"audioUrl": "https://0.s3.envato.com/files/216844247/preview.mp3",
													"format": "mp3",
													"length": "7:48",
													"title": "Inspiring Uplifting Corporate",
													"order": 0,
													"mp3": "https://0.s3.envato.com/files/216844247/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "7:48"
													},
													"src": "https://0.s3.envato.com/files/216844247/preview.mp3",
													"thumb":
													{
														"src": "images/albums/02.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 3,
													"audioUrl": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"format": "mp3",
													"length": "11:36",
													"title": "Inspiration Kit",
													"order": 0,
													"mp3": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "11:36"
													},
													"src": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"thumb":
													{
														"src": "images/albums/03.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 4,
													"audioUrl": "https://0.s3.envato.com/files/179391137/preview.mp3",
													"format": "mp3",
													"length": "4:26",
													"title": "Happy Upbeat Ukulele",
													"order": 0,
													"mp3": "https://0.s3.envato.com/files/179391137/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "4:26"
													},
													"src": "https://0.s3.envato.com/files/179391137/preview.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 5,
													"audioUrl": "https://0.s3.envato.com/files/175505487/preview.mp3",
													"format": "mp3",
													"length": "3:30",
													"title": "Motivational and Inspiring",
													"order": 0,
													"mp3": "https://0.s3.envato.com/files/175505487/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "3:30"
													},
													"src": "https://0.s3.envato.com/files/175505487/preview.mp3",
													"thumb":
													{
														"src": "images/albums/05.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 3,
													"audioUrl": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"format": "mp3",
													"length": "11:36",
													"title": "Inspiration Kit",
													"order": 0,
													"mp3": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "11:36"
													},
													"src": "https://0.s3.envato.com/files/196824856/preview.mp3",
													"thumb":
													{
														"src": "images/albums/03.jpg"
													}
												},
												{
													"artist": "AndreySkarlat",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 1,
													"audioUrl": "https://s3.envato.com/files/229455919/preview.mp3",
													"format": "mp3",
													"length": "5:55",
													"title": "Upbeat & Inspiring",
													"order": 0,
													"mp3": "https://s3.envato.com/files/229455919/preview.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "5:55"
													},
													"src": "https://s3.envato.com/files/229455919/preview.mp3",
													"thumb":
													{
														"src": "images/albums/01.jpg"
													}
												}]
											}
										</script>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

























































    <?php include("indexx.php");?>
    <?php include('footer.php');?>


    <!-- eof #canvas -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    <script src="js/compressed.js "/>
    </script>
    <script src="js/main.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/mediaelement-migrate.min.js"></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _cueSettings = {
        "l10n": {
            "nextTrack": "Next Track",
            "previousTrack": "Previous Track",
            "togglePlayer": "Toggle Player",
            "togglePlaylist": "Toggle Playlist"
        }
    };
    /* ]]> */
    </script>
    <script src="js/cue.min.js"></script>
    <script src="js/switcher.js"></script>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


</body>

</html>