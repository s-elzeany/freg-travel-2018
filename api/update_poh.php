<?php
include "../connection.php";

$CData = $_POST['CData'];
$Cname = $_POST['Cname'];
$dateToday = $_POST['dateToday'];
$poh_ID = $_POST['poh_ID'];
$mainUser = $_POST['mainUser'];


$query="UPDATE `tbl_poh` SET `poh_date`='$dateToday',`poh_name`='$Cname',`poh_editedby`='$mainUser',`poh_html`='$CData' WHERE `poh_id`=$poh_ID;";

$result=$conn->query($query);

?>
