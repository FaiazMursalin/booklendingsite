<?php

require_once('DBconnection.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) 
	&& isset($_POST['nid']) && isset($_POST['mobile']) && isset($_POST['address'])){
	$n = $_POST['name'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	$id = $_POST['nid'];
	$m = $_POST['mobile'];
	$a = $_POST['address'];
	$sql1= "insert into user values ('$n', '$e', '$p', '$id', '$m', '$a')";
	//$sql2= "insert into login values ('$e', '$p' )";
	$result1 = mysqli_query($conn, $sql1);
	//$result2 = mysqli_query($conn, $sql2);

	if(mysqli_affected_rows($conn)){
		//echo "let him enter";
	    header ("location: first.php");
	}
	else{
		//echo "username or password is incorrect";
	    //header ("location: first.php");
	}
}
?>