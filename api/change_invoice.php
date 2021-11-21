<?php
include "../connection.php";

$invNum = $_POST['invNum'];

$query="ALTER TABLE tbl_data AUTO_INCREMENT = $invNum;";

$result=$conn->query($query);

?>
