<?php

$server = "ballast.proxy.rlwy.net";
$port = 43477;
$username = "root";
$password = "akslCPgyUhwMYfxMRYWhpXgkFRGpqvgn";
$database = "railway";

$conn = mysqli_connect($server, $username, $password, $database, $port);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>

