<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$staff_id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE staff SET ".$column_name."='".$text."' WHERE staff_id='".$staff_id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>