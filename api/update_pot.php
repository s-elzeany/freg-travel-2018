<?php
include "../connection.php";

$CData = $_POST['CData'];
$Cname = $_POST['Cname'];
$dateToday = $_POST['dateToday'];
$pot_ID = $_POST['pot_ID'];
$mainUser = $_POST['mainUser'];

$query="UPDATE `tbl_pot` SET `pot_date`='$dateToday',`pot_name`='$Cname',`pot_editedby`='$mainUser',`pot_html`='$CData' WHERE `pot_id`=$pot_ID;";

$result=$conn->query($query);

?>
