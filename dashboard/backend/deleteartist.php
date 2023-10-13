<?php

include("connection.php");

$fetch = $_GET["deleteId"];
$delete = "delete from artist where id = $fetch";
$run = mysqli_query($con, $delete);
// echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="artisttable.php";</script>';



?>