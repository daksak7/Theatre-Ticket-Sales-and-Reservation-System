<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$tid = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE theatre SET ".$column_name."='".$text."' WHERE tid='".$tid."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>