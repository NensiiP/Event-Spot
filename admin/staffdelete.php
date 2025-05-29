<?php

include '../config.php';

$id = $_GET['id'];

$halldeletesql = "DELETE FROM staff WHERE id = $id";

$result = mysqli_query($conn, $halldeletesql);

header("Location:staff.php");

?>