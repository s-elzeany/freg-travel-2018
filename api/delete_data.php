<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_data WHERE  data_customID='$id'";
$result = $conn->query($sql);
?>
