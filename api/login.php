<?php
session_start();
include "../connection.php";
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$tblUsername = "";
	$tblPassword = "";
	$sql = "SELECT * FROM tbl_users WHERE user_name = '$user';";

	$result = $conn -> query($sql);


		while($row =$result -> fetch_assoc() ){
			$tblUsername = $row['user_name'];
			$tblPassword = $row['user_pass'];
				}

			if( ($tblUsername == 	$user) && ($tblPassword == $pass) ){
				$_SESSION['user']=$user;
				echo "1";
			} else {
				echo "0";
			}




?>
