<?php
include "../connection.php";
$sql = "SELECT `data_html` FROM `tbl_data` WHERE `data_id`=10";
$result = $conn ->query($sql);
while($row = $result->fetch_assoc()){

echo $row['data_html'];
	}
?>
