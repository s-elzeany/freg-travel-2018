<?php
session_start();
include "../connection.php";
$id = $_POST['id'];

$sql = "SELECT * FROM tbl_poh WHERE poh_id = '$id';";

$result = $conn -> query($sql);

  while($row =$result -> fetch_assoc() ){
    $poh_date = $row['poh_date'];
    $poh_name = $row['poh_name'];
    $poh_html = $row['poh_html'];
    $poh_id = $row['poh_id'];


  }
  $_SESSION['poh_id']=$poh_id;
  $_SESSION['poh_html']=$poh_html;

  echo "1";


?>
