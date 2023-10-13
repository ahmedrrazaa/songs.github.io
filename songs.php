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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl caarousal  -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <style>
    body {
        background: url('img3.jpg');
    }

    html,
    body,
    .view {
        height: 100%;
    }

    #mobile-box {
        width: 360px;
    }

    .card {
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    .card .view {
        -webkit-border-top-left-radius: 10px;
        border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card h5 a {
        color: #0d47a1;
    }

    .card h5 a:hover {
        color: #072f6b;
    }

    #pButton {
        float: left;
    }

    #timeline {
        width: 90%;
        height: 2px;
        margin-top: 20px;
        margin-left: 10px;
        float: left;
        -webkit-border-radius: 15px;
        border-radius: 15px;
        background: rgba(0, 0, 0, 0.3);
    }

    #pButton {
        margin-top: 12px;
        cursor: pointer;
    }

    #playhead {
        width: 8px;
        height: 8px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin-top: -3px;
        background: black;
        cursor: pointer;
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
    <center>
        <div><img src="images/img2.gif" alt="" style="height:300px;width:400px"></div>
    </center>




    

    <div class="container">

        <div class="row">
        <?php
$i=0;
while($row = mysqli_fetch_array($result)) {

      echo '      <div class="col-md-4">
                <div id="mobile-box">
                    <!-- Card -->
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="card-img-top" src="../dashboard/img/'.$row['cover'].'" style="height:200px;width:400px"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">

                            <h5 class="h5 font-weight-bold"><a href="#" target="_blank">'.$row['artist'].'</a></h5>
                            <p class="mb-0">'.$row['name'].'</p>

                            <audio controls type="video/mp3"
                                src="../dashboard/audio/'.$row['file'].'"></audio>
                        </div>
                    </div>
                </div>
            </div>';
		}
			?>
            <!-- Card -->
        </div>
    </div>
    <!-- Content -->
    <?php
$i++;

?>


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