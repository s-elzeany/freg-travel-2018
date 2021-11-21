<?php
include "../connection.php";


$ticketData = $_POST['ticketData'];
$ticketName = $_POST['ticketName'];
$ticketResCode = $_POST['ticketResCode'];
$ticketDue = $_POST['ticketDue'];
$dateToday = $_POST['dateToday'];
$mainUser = $_POST['mainUser'];

$sql = "INSERT INTO `tbl_ticket`(`ticket_date`, `ticket_name`, `ticket_rescode`, `ticket_due`,`ticket_addedby`, `ticket_html`) VALUES ('$dateToday','$ticketName','$ticketResCode','$ticketDue','$mainUser','$ticketData');";


$result=$conn->query($sql);
?>
