<?php
include "../connection.php";

$CData = $_POST['CData'];
$customID = $_POST['customID'];
$dateToday = $_POST['dateToday'];
$overall_total = $_POST['overall_total'];
$mainUser = $_POST['mainUser'];

$query="UPDATE `tbl_data` SET `data_date`='$dateToday',`data_due`='$overall_total',`data_editedby`='$mainUser',`data_html`='$CData' WHERE data_customID = '$customID'";

$result=$conn->query($query);

?>
