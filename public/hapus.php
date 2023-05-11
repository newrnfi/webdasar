<?php
 
include_once("conn.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($conn, "DELETE FROM data_diri WHERE id=$id");
 
header("Location:index.php");
?>