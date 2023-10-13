<?php

include("connection.php");

$fetch = $_GET["deleteId"];
$delete = "delete from signup where id = $fetch";
$run = mysqli_query($con, $delete);
// echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="user-list.php";</script>';



?>