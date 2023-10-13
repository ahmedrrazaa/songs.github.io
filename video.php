<?php
include("connection.php");
$query = "SELECT * FROM `sound`";
$result = mysqli_query($con, $query);
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
    <style>
        body{
            background:url('img3.jpg');
        }
       
    </style>
	
	
	
	
	
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
    

    <div class="row ">
    <?php
	include("connection.php");
$fetch = mysqli_query($con,"select * from sound");
while ($a = mysqli_fetch_array($fetch)) {

      echo ' 
  <div class="col-4">
  <div class="card h-100"> 
   <video class="card-img-top" src="../dashboard/video/'.$a["video"].'" width="350px"  height="250px" controls type="video/mp4"></video>
      <div class="card-body" style="background-color:#d3d5df;">
      <p class="card-title text-center">Song Name: '.$a["name"].'</p>
        <h5 class="card-title text-center">'.$a["artist"].'</h5>
      </div>
      </div>
    </div>
 
  ';

}?>
</div>
 </div>
 <?php include("indexx.php");?>
    <?php include('footer.php');?>




    
		
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