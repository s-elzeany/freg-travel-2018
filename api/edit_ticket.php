<?php
session_start();
include "../connection.php";
$id = $_POST['id'];

$sql = "SELECT * FROM tbl_ticket WHERE ticket_id = '$id';";

$result = $conn -> query($sql);

  while($row =$result -> fetch_assoc() ){
    $ticket_id = $row['ticket_id'];
    $ticket_date = $row['ticket_date'];
    $ticket_name = $row['ticket_name'];
    $ticket_rescode = $row['ticket_rescode'];
    $ticket_due = $row['ticket_due'];
    $ticket_html = $row['ticket_html'];


  }
  $_SESSION['ticket_id']=$ticket_id;
  $_SESSION['ticket_html']=$ticket_html;

  echo "1";


?>
