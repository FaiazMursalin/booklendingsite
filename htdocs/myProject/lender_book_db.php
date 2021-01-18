<?php

require_once('DBconnection.php');

if(isset($_POST['bookname']) && isset($_POST['lender_email']) && isset($_POST['author']) && isset($_POST['categories']) && isset($_POST['price'])){
	$lemail = $_POST['lender_email'];
	$bn = $_POST['bookname'];
	$ath = $_POST['author'];
	$c = $_POST['categories'];
	$p = $_POST['price'];
	
	$sql = "insert into book values (NULL, '$lemail', '$bn', '$ath','$c', '$p')";
	$result1 = mysqli_query($conn, $sql);
	
	
	
	if((strcasecmp("$c", "chemistry") == 0)){
	$sql_1 = "insert into chemistry values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_1);
	}
	if((strcasecmp("$c", "physics") == 0)){
	$sql_2 = "insert into physics values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_2);
	}
	if((strcasecmp("$c", "math") == 0)){
	$sql_3 = "insert into math values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_3);
	}
	if((strcasecmp("$c", "fictions") == 0)){
	$sql_4 = "insert into fictions values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_4);
	}
	if((strcasecmp("$c", "tragedy") == 0)){
	$sql_5 = "insert into tragedy values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_5);
	}
	if((strcasecmp("$c", "horror") == 0)){
	$sql_6 = "insert into horror values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_6);
	}
	if((strcasecmp("$c", "fictions-tragedy") == 0)||(strcasecmp("$c", "tragedy-fictions") == 0)){
	$sql_6 = "insert into tragedy values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_6);
	$sql_7 = "insert into fictions values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_7);
	}
	if((strcasecmp("$c", "math-physics") == 0)||(strcasecmp("$c", "physics-math") == 0)){
	$sql_6 = "insert into math values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_6);
	$sql_7 = "insert into physics values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_7);
	}
	if((strcasecmp("$c", "fictions-horror") == 0)||(strcasecmp("$c", "horror-fictions") == 0)){
	$sql_6 = "insert into horror values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_6);
	$sql_7 = "insert into fictions values (NULL,'$lemail', '$bn', '$ath', '$c', '$p')";
	$result2 = mysqli_query($conn, $sql_7);
	}
	echo "inserted successfully....Go Back";
	/*if(mysqli_affected_rows($conn)){
		echo "your info will be reviewed";
	    //header ("location: index.php");
	}
	else{
		echo "incorrect";
	    //header ("location: first.php");
	}*/
}
?>