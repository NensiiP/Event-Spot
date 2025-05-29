<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM hallbook WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:hallbook.php");

?>