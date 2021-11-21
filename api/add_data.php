<?php
include "../connection.php";


$CData = $_POST['CData'];
$customID = $_POST['customID'];
$dateToday = $_POST['dateToday'];
$overall_total = $_POST['overall_total'];
$mainUser = $_POST['mainUser'];

$sql = "INSERT INTO `tbl_data`(`data_customID`, `data_date`,`data_due`, `data_addedby`,`data_html`) VALUES ('$customID','$dateToday','$overall_total','$mainUser','$CData')";

$result=$conn->query($sql);
?>
