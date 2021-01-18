<?php
require_once("DBconnection.php");
include ('chemistry.php');


$sql = "insert into cart values(NULL, '$r1', '$r2', '$r3')";
$result = mysqli_query($conn, $sql);
		   
if(mysqli_affected_rows($conn)){
   //echo 'thik';
}
else{
	echo 'bhul';
}
?>
   
   
   
   
   
   
   
   
   
   
   
