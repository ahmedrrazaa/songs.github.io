<?php

include("connection.php");

$fetch = $_GET["deleteId"];
$delete = "delete from language where id = $fetch";
$run = mysqli_query($con, $delete);
// echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="alanguagetable.php";</script>';



?>