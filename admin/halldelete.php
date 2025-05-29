<?php

include '../config.php';

$id = $_GET['id'];

$halldeletesql = "DELETE FROM hall WHERE id = $id";

$result = mysqli_query($conn, $halldeletesql);

header("Location:hall.php");

?>