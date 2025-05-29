<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM contact WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:User Message.php");

?>