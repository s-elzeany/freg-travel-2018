<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_ticket WHERE  ticket_id='$id'";
$result = $conn->query($sql);
?>
