<?php

$server = "shinkansen.proxy.rlwy.net";
$username = "root";
$password = "akslCPgyUhwMYfxMRYWhpXgkFRGpqvgn";
$database = "railway";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
?>
