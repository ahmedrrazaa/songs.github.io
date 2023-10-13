<?php

include("connection.php");

$fetch = $_GET["deleteId"];
$delete = "delete from latesthomepage where id = $fetch";
$run = mysqli_query($con, $delete);
// echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="latesthomepage-table.php";</script>';



?>