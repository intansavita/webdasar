<?php

$host = "localhost";
$user = "root";
$base = "mahasiswa";


$conn = mysqli_connect($host, $user, "", $base);

if (mysqli_connect_errno()) {
    die("Failed To Connect");
}