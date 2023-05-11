<?php

$host = "localhost";
$user = "newrnfi";
$pass = "paraPika16";
$base = "mahasiswa";


$conn = mysqli_connect($host, $user, $pass, $base);

if (mysqli_connect_error()) {
    die("Failed To Connect");
}
?>