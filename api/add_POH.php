<?php
include "../connection.php";


$CData = $_POST['CData'];
$Cname = $_POST['Cname'];
$dateToday = $_POST['dateToday'];
$mainUser = $_POST['mainUser'];


$sql = "INSERT INTO `tbl_poh`(`poh_date`, `poh_name`, `poh_addedby`, `poh_html`) VALUES ('$dateToday','$Cname','$mainUser','$CData')";


$result=$conn->query($sql);
?>
