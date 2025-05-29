<?php

include '../config.php';

$id = $_GET['id'];

$sql ="Select * from hallbook where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $HallType = $row['HallType'];
    $Event = $row['Event'];
    $Food = $row['Food'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
}


if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE hallbook SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){

        $type_of_hall = 0;
    if($HallType=="Birthday Hall")
    {
        $type_of_hall = 3000;
    }
    else if($HallType=="Event Hall")
    {
        $type_of_hall = 2000;
    }
    else if($HallType=="Haldi Hall")
    {
        $type_of_hall = 1700;
    }
    else if($HallType=="Dandiya Night")
    {
        $type_of_hall = 1000;
    }
    else if($HallType=="Baby Shower Hall")
    {
        $type_of_hall = 1600;
    }
    else if($HallType=="NamKaran")
    {
        $type_of_hall = 1500;
    }
    else if($HallType=="Engagement Hall")
    {
        $type_of_hall = 3000;
    }
    else if($HallType=="Mahendi Hall")
    {
        $type_of_hall = 2000;
    }
    else if($HallType=="Marrige Hall")
    {
        $type_of_hall = 5000;
    }
        
      

        header("Location:hallbook.php");
    }
}
?>