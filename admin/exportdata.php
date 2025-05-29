<?php

include '../config.php';

$sqlq = "SELECT * FROM hallbook";
$result = mysqli_query($conn,$sqlq);
$hallbook_record = array();

while( $rows = mysqli_fetch_assoc($result)){
    $hallbook_record[] = $rows;
}

if(isset($_POST["exportexcel"]))
{
    $filename = "sevenseas_hallbook_data_".date('Ymd') .".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if(!empty($hallbook_record)){
        foreach($hallbook_record as $record){
            if(!$show_coloumn){
                echo implode("\t",array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";
        }
    }
    exit;
}


?>