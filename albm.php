

<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dj Bishop</title>
	<meta charset="utf-8">
	<!-- rateyo cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!--font awesome bootstrap CDN-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">
	
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
<section class="page_breadcrumbs ds parallax section_padding_top_65 section_padding_bottom_65 table_section table_section_md">
	<div class="container">
		<div class="row">
						<div class="col-md-8 text-center text-md-left">
							<h2>Music Albums</h2>
						</div>
						<div class="col-md-4 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="./">
							Home
						</a> </li>
								<li> <a href="#">Music</a> </li>
								<li class="active">Music Albums</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls page_portfolio section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_40">
				<div class="container">
					<div class="row">
                    <?php
	include("connection.php");
$fetch = mysqli_query($con,"select * from album");
while ($a = mysqli_fetch_array($fetch)) {

      echo '            <div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img style="height:250px; width:300px" src=../dashboard/img/'.$a["pic"].' alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="songs.php" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_25">
									<div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
								<strong class="rating">4.0</strong> out of 5
							</span> </div>
                            <h4 class="entry-title topmargin_5"> <a href="songs.php">'.$a["name"].'</a> </h4>
								</div>
							</div>
						</div>
						';

                    }?>
					 


 
							
						
                    </div>
                </div>
        </div>
    </div>
    

 
                
    


	<?php include("indexx.php");?>
    <?php include('footer.php');?>




    <script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>	
	<!-- eof #canvas -->
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/mediaelement-and-player.min.js"></script>
	<script src="js/mediaelement-migrate.min.js"></script>
	<script type='text/javascript'>
	
		/* <![CDATA[ */
		var _cueSettings = {
			"l10n":
			{
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>