

<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dj Bishop</title>
	<meta charset="utf-8">
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
    <style>
        body{
            background:url('img3.jpg');
        }
        
.card {
    
    background: #000;
}
.card .image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.card .image img {
    width: 100%;
    transition: .5s;
}
.card:hover .image img {
    opacity: .5;
    transform: translateX(30%);/*100%*/
}
.card .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;     /*100%*/
    height: 100%;
    background: #808080;
    transition: .5s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card .details .center {
    padding: 8px;
    text-align: center;
    background: #d3d5df;;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card .details .center h1 {
    margin: 0;
    padding: 0;
    color: #ff3636;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card .details .center h1 span {
    font-size: 14px;
    color: #262626;
}
.card .details .center p {
    margin: 10px 0;
    padding: 0;
    color: #262626;
}
.card .details .center ul {
    margin: 10px auto 0;
    padding: 0;
    display: table;
}
.card .details .center ul li {
    list-style: none;
    margin: 0 5px;
    float: left;
}
/* .card .details .center ul li a {
    display: block;
    background: #262626;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    transform: .5s;
} */
.card .details .center ul li a:hover {
    background: #ff3636;
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
    

 <!-- card -->
<div class="container">
 <div class="row my-4 mx-2" >
    
 <?php
	include("connection.php");
$fetch = mysqli_query($con,"select * from artist");
while ($a = mysqli_fetch_array($fetch)) {

      echo '        <div class="col-3" >
                    <div class="card" style="height:300px;width:250px;" >
                    <div class="image card-img-top">
                    <img style="height:100%;width:100%" src=../dashboard/img/'.$a["pic"].' />
                    </div>
                    <div class="details">
                    <div class="center">
                        <h1>'.$a["name"].'</h1>
                        <p>Famous Hit siger</p>
                        <ul>
                        <li><a href='.$a["description"].'>see Description</a></li>
                        
                        </ul>
                    </div>
                    </div>
                </div>
                </div> ';

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