<?php
session_start();
include "../connection.php";
$id = $_POST['id'];

$sql = "SELECT * FROM tbl_data WHERE data_customID = '$id';";

$result = $conn -> query($sql);

  while($row =$result -> fetch_assoc() ){
    $data_id = $row['data_id'];
    $data_customID = $row['data_customID'];
    $data_date = $row['data_date'];
    $data_due = $row['data_due'];
    $data_html = $row['data_html'];


  }
  $_SESSION['data_customID']=$data_customID;
  $_SESSION['data_html']=$data_html;

  echo "1";


?>
