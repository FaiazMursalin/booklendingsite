<?php

require_once('DBconnection.php');

if(isset($_POST['uname']) && isset($_POST['pass'])){
	$u = $_POST['uname'];
	$p = $_POST['pass'];
	$sql = "select * from user where Email = '$u' and Password = '$p'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) !=0){
		//echo "let him enter";
	    header ("location: index.php");
	}
	else{
		echo "username or password is incorrect";
	    //header ("location: first.php");
	}
}
?>