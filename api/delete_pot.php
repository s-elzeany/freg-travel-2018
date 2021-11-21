<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_pot WHERE  pot_id='$id'";
$result = $conn->query($sql);
?>
