<?php
session_start();
include "../connection.php";
$id = $_POST['id'];

$sql = "SELECT * FROM tbl_pot WHERE pot_id = '$id';";

$result = $conn -> query($sql);

  while($row =$result -> fetch_assoc() ){
    $pot_date = $row['pot_date'];
    $pot_name = $row['pot_name'];
    $pot_html = $row['pot_html'];
    $pot_id = $row['pot_id'];


  }
  $_SESSION['pot_id']=$pot_id;
  $_SESSION['pot_html']=$pot_html;

  echo "1";


?>
