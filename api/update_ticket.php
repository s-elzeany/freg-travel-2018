<?php
include "../connection.php";

$ticketID = $_POST['ticketID'];
$ticketData = $_POST['ticketData'];
$ticketName = $_POST['ticketName'];
$ticketResCode = $_POST['ticketResCode'];
$ticketDue = $_POST['ticketDue'];
$dateToday = $_POST['dateToday'];
$mainUser = $_POST['mainUser'];

$query="UPDATE `tbl_ticket` SET `ticket_date`='$dateToday',`ticket_name`='$ticketName',`ticket_rescode`='$ticketResCode',`ticket_due`='$ticketDue',`ticket_editedby`='$mainUser',`ticket_html`='$ticketData' WHERE `ticket_id`=$ticketID;";

$result=$conn->query($query);

?>
