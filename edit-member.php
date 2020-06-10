<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$cid = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE member SET ".$column_name."='".$text."' WHERE cid='".$cid."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>