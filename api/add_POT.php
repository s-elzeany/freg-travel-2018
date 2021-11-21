<?php
include "../connection.php";


$CData = $_POST['CData'];
$Cname = $_POST['Cname'];
$dateToday = $_POST['dateToday'];
$mainUser = $_POST['mainUser'];

$sql = "INSERT INTO `tbl_pot`(`pot_date`, `pot_name`, `pot_addedby`,`pot_html`) VALUES ('$dateToday','$Cname','$mainUser','$CData')";


$result=$conn->query($sql);
?>
