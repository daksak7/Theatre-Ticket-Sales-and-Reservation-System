<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$show_id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE shows SET ".$column_name."='".$text."' WHERE show_id='".$show_id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>