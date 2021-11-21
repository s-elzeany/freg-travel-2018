<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_poh WHERE  poh_id='$id'";
$result = $conn->query($sql);
?>
