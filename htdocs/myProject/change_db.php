<?php

require_once('DBconnection.php');

if(isset($_POST['uname']) && isset($_POST['oldpass']) && isset($_POST['newpass'])){
	$u = $_POST['uname'];
	$op = $_POST['oldpass'];
	$np = $_POST['newpass'];
	$sql = "update user set password='$np' where Email='$u'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "let him enter";
	    header ("location: index.php");
	}
	else{
		echo "username or password is incorrect";
	    //header ("location: first.php");
	}
}
?>